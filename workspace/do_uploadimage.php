<?php
    session_start();
    require 'MySQL.php';
    $db = Database::initDB();
    require 'MySmarty.php';
    $Smarty = MySmarty::initSmarty();
    $image_filepath=$_FILES['image'];
    $Emp_name=$_SESSION['logined'];
    $filepath="smarty/upload/$Emp_name.jpg";
    
    if(move_uploaded_file($image_filepath['tmp_name'], $filepath))
    {
        echo '上傳成功';
        header("Location: index.php");
    }
    else{
        echo "上傳失敗,請返回上一頁!!!";
    }
?>