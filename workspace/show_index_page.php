<?php 
    session_start();
    //引用資料庫
    require 'MySQL.php';
    $db = Database::initDB();

    //引用smarty
    require 'MySmarty.php';
    
    session_start();
    $db=null;
    $Emp_name=$_SESSION['logined'];
    //圖片
    $Smarty = MySmarty::initSmarty();
     $image_filepath="smarty/upload/$Emp_name.jpg";
    if(!file_exists($image_filepath)){
        $image_filepath="smarty/upload/default.jpg";
    }
    $Smarty->assign('image_filepath',$image_filepath);
     
    $Smarty->assign('name',$_SESSION['logined']);
    $Smarty->display('smarty/templates/index.tpl');
    ?>