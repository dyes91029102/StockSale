<?php
    header("Content-Type:text/html; charset=utf-8");
    require 'MySQL.php';
    $db = Database::initDB();
    $func4=$_GET['func4'];
    try{
        //開始Transaction
        $db->beginTransaction();
        
        //刪除盤點單明細
        $sql="Delete from InvReciptDetail WHERE InvRecipt_id='$func4'";
        $st = $db->prepare($sql); 
        $st->execute();
        
        //刪除盤點單
        $sql="Delete from InvRecipt WHERE InvRecipt_id='$func4'";
        $st = $db->prepare($sql); 
        $st->execute();
        $db->commit();
        //結束Transaction

        echo "<script> alert('刪除成功');parent.location.href='index.php?func=show_stock1-1'; </script>";
   
    } catch (Exception $e) {
        $db->rollBack();
        echo "<script> alert('刪除失敗');parent.location.href='index.php?func=show_stock1-1'; </script>";

    }
?>