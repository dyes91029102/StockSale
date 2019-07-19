<?php

    $page=1;
    if (isset($_GET['page'])) {
        $page = $_GET['page'];
    }

    session_start();
    //引用資料庫
    require 'MySQL.php';
    $db = Database::initDB();
    
    //取得欄位內容
    $sql = "SELECT PurOder_id, a.Emp_name AS c, Order_Emp_id, b.Emp_name AS d, check_Emp_id, PurOder_date, 
            CASE WHEN PurOder_date IS NULL 
            THEN  '未進貨'
            ELSE  '已進貨'
            END FROM PurOder
            JOIN Emp a ON order_Emp_id = a.Emp_id
            LEFT JOIN Emp b ON check_Emp_id = b.Emp_id 
            ORDER BY 1";
    $st = $db->prepare($sql); 
    $st->execute();
    $field_content = $st->fetchAll(PDO::FETCH_ASSOC);
    
    //每10筆一頁 計算總頁數 ceil():無條件進位
    $total_page = ceil(count($field_content)/10);
    
    //建立對應頁數之10筆資料
    $field_array;
    for($i=0;$i<10;$i++){
        if($field_content[($page-1)*10+$i]!=null)
            $field_array[$i] = $field_content[($page-1)*10+$i];
    }

    //關閉資料庫連線
    $db=null;
    
    $db=null;
    //引用smarty
    require 'MySmarty.php';
    
    //取得照片位置
    $Emp_name=$_SESSION['logined'];
    $image_filepath="smarty/upload/$Emp_name.jpg";
    
     //圖片空白
    if(!file_exists($image_filepath)){
        $image_filepath="smarty/upload/default.jpg";
    }
    
    //指派並顯示
    $Smarty = MySmarty::initSmarty();
    $Smarty->assign('image_filepath',$image_filepath);
    $Smarty->assign('name',$_SESSION['logined']);
    $Smarty->assign('field_content_array',$field_array);
    $Smarty->assign('total_page',$total_page);
    $Smarty->assign('current_page',$page);
    $Smarty->display('smarty/templates/show_purch1-3.tpl');
?>