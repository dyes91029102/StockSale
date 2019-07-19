<?php
    
    require 'MySQL.php';
    $db = Database::initDB();
    require 'MySmarty.php';
    $Smarty = MySmarty::initSmarty();
    session_start();
    $Emp_name=$_SESSION['logined'];
    $image_filepath="smarty/upload/$Emp_name.jpg";
    $name=$_GET['name'];
    if(!file_exists($image_filepath)){
        $image_filepath="smarty/upload/default.jpg";
    }
    $func=$_GET['func'];
    if($func=='show_avator')
      {    
          $Smarty->assign('name',$_SESSION['logined']);
          $Smarty->assign('image_filepath',$image_filepath);
          $Smarty->display('smarty/templates/show_avator.tpl');
      }
?>