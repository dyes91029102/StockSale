<?php
    session_start();
    //引用資料庫
    require 'MySQL.php';
    $db = Database::initDB();
    
    //引用smarty
    require 'MySmarty.php';
    
    //取得照片位置
    $Emp_name=$_SESSION['logined'];
    $image_filepath="smarty/upload/$Emp_name.jpg";
    
    //圖片空白
    if(!file_exists($image_filepath)){
        $image_filepath="smarty/upload/default.jpg";
    }
    
    
     $db=null;
    //指派並顯示
    $Smarty = MySmarty::initSmarty();
    $Smarty->assign('image_filepath',$image_filepath);
    $Smarty->assign('field_content_array',$field_content);
    $Smarty->assign('name',$_SESSION['logined']);
    $Smarty->display('smarty/templates/show_stock3-1.tpl');
?>