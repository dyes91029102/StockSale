<?php
    require 'MySQL.php';
    $db = Database::initDB();
    $func4=$_GET['func4'];
    //取消退貨單
    $sql="Delete from Reform WHERE Reform_id='$func4'";
    $st = $db->prepare($sql); 
    $st->execute();
    header("Location: https://db-finalreport-john777.c9users.io/show_return4-1.php");
?>