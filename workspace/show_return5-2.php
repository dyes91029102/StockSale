<?php
    session_start();
    //引用資料庫
    require 'MySQL.php';
    $db = Database::initDB();
    
    //取得欄位內容
    $sql = "select PurOder_id,a.Emp_name as c,Order_Emp_id,b.Emp_name as d,check_Emp_id,PurOder_date
    from PurOder join Emp a on order_Emp_id=a.Emp_id left join Emp b on check_Emp_id=b.Emp_id";
    $st = $db->prepare($sql); 
    $st->execute();
    $field_content = $st->fetchAll(PDO::FETCH_ASSOC);
    
    
    //取得照片位置
    $Emp_name=$_SESSION['logined'];
    $image_filepath="smarty/upload/$Emp_name.jpg";
    
    //圖片空白
    if(!file_exists($image_filepath)){
        $image_filepath="smarty/upload/default.jpg";
    }
    
     $db=null;
     $Smarty = MySmarty::initSmarty();
    $Smarty->assign('image_filepath',$image_filepath);
    $Smarty->assign('field_content_array',$field_content);
    $Smarty->display('smarty/templates/show_return5-2.tpl');
?>