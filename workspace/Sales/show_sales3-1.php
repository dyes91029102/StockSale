<?php
    $page=1;
    if (isset($_GET['page'])) {
        $page = $_GET['page'];
    }
    
    session_start();
    
    //引用資料庫
    require 'MySQL.php';
    //開啟資料庫連線
    $db = Database::initDB();
    
    //取得欄位內容
    $sql = "SELECT PurOder_id,Emp_name,order_Emp_id,CASE WHEN PurOder_date IS NULL 
            THEN  '未到貨'  
            ELSE  '已到貨'
            END 
            FROM PurOder JOIN Emp ON order_Emp_id=Emp_id WHERE PurOder_date IS NULL";
    $st = $db->prepare($sql); 
    $st->execute();
    $field_content = $st->fetchAll(PDO::FETCH_ASSOC);
    

    //關閉資料庫連線
    $db=null;
    
    //取得照片位置
    $Emp_name=$_SESSION['logined'];
    $image_filepath="smarty/upload/$Emp_name.jpg";
  
    //引用smarty
    require 'MySmarty.php';
    $Smarty = MySmarty::initSmarty();
    
    //指派並顯示
    $Smarty->assign('image_filepath',$image_filepath);
    $Smarty->assign('name',$_SESSION['logined']);
    $Smarty->assign('field_content_array',$field_array);
    $Smarty->assign('total_page',$total_page);
    $Smarty->assign('current_page',$page);
    $Smarty->display('smarty/templates/show_sales3-1.tpl');
?>