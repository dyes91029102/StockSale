<?php
    require 'MySQL.php';
    $db = Database::initDB();
    $func4=$_GET['func4'];
    try{
    //開始Transaction
    $db->beginTransaction();
    
    //刪除進貨訂單
    $sql="Delete from PurOderDetail WHERE PurOder_id='$func4'";
    $st = $db->prepare($sql); 
    $st->execute();
    
    $sql="Delete from PurOder WHERE PurOder_id='$func4'";
    $st = $db->prepare($sql); 
    $st->execute();
    header("Location: https://db-finalreport-john777.c9users.io/show_purch1-1.php");
    $db->commit();
   
    } catch (Exception $e) {
        $db->rollBack();
   
    }
?>