<?php
    session_start();
    //引用資料庫
    require 'MySQL.php';
    $db = Database::initDB();
    $P_id=$_POST['func4'];
    $date=$_POST['date'];
    $confirm_Emp_id=$_POST['confirm_Emp_id'];
    
    //取得欄位內容
    $sql = "Update Reform Set Reform_Emp_id='$confirm_Emp_id',Reform_date='$date' where PurOder_id='$P_id'";
    $st = $db->prepare($sql); 
    $st->execute();   
    
   
   header("Location: https://db-finalreport-john777.c9users.io/show_return4-1.php");

?>