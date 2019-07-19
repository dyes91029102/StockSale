<?php
    require 'MySQL.php';
    $db = Database::initDB();
    $func3=$_GET['func3'];
    
    require 'MySmarty.php';
    $Smarty = MySmarty::initSmarty();
    session_start();
    $Emp_name=$_SESSION['logined'];
    $image_filepath="smarty/upload/$Emp_name.jpg";
    
    //取得員工id
    $sql = "SELECT Emp_id FROM Emp";
    $st = $db->prepare($sql); 
    $st->execute();
    $Emp_list=$st->fetchAll(PDO::FETCH_ASSOC);
    $Smarty->assign('func3',$func3);
    $Smarty->assign('Emp_list',$Emp_list);
    $Smarty->assign('today',date("Y-m-d"));
    $Smarty->assign('name',$_SESSION['logined']);  
    $Smarty->assign('image_filepath',$image_filepath);
    $Smarty->display('smarty/templates/show_return_confirm.tpl');
    
?>
