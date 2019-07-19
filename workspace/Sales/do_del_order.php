<?php
    header("Content-Type:text/html; charset=utf-8");
    require 'MySQL.php';
    $db = Database::initDB();
    $func4=$_GET['func4'];
    try{
        //開始Transaction
        $db->beginTransaction();
        
        //刪除銷貨訂單
        $sql="Delete from OrderDetail WHERE Order_id='$func4'";
        $st = $db->prepare($sql); 
        $st->execute();
        
        //刪除銷貨訂單明細
        $sql="Delete from `Order` WHERE Order_id='$func4'";
        $st = $db->prepare($sql); 
        $st->execute();
        $db->commit();
        //結束Transaction

        echo "<script> alert('刪除成功');parent.location.href='index.php?func=show_sales1-1'; </script>";
   
    } catch (Exception $e) {
        $db->rollBack();
        echo "<script> alert('刪除失敗');parent.location.href='index.php?func=show_sales1-1'; </script>";

    }
?>