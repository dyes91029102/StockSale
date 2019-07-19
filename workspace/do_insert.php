<?php
    header("Content-Type:text/html; charset=utf-8");
    require 'MySQL.php';
    $db = Database::initDB();
    $order_Emp_id = $_POST['order_Emp_id'];
    $Material_id=$_POST['Material_id'];
    $count=$_POST['count'];
    $price=$_POST['price'];
    
    //如果全部沒填數量
    $sum=0;
    for($i=0;$i<count($count);$i++){
        $sum=$sum+$count[$i];
    }
    if($sum==0)
        echo "<script> alert('新增失敗 至少填一筆正確資料');parent.location.href='https://db-finalreport-john777.c9users.io/show_purch2-1.php'; </script>";
        
    //建立新的訂貨單和明細
    try {  
        
        //$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
        //開始Transaction
        $db->beginTransaction();
        
        //建立新的進貨訂單
        $sql="INSERT INTO PurOder(order_Emp_id) VALUES ($order_Emp_id)";
        $st = $db->prepare($sql); 
        $st->execute();
        
        //取得最後一次新增的PurOder_id
        $sql="select max(PurOder_id) as n from PurOder";
        $st = $db->prepare($sql); 
        $st->execute();
        $PurOder_id=$st->fetchAll(PDO::FETCH_ASSOC)[0]['n'];
        
        //建立新的進貨單明細
        for($i=0;$i<count($count);$i++) {
            if($count[$i]==null)
                continue;
            $sql="INSERT INTO  PurOderDetail(PurOder_id,Material_id,quantity,price)
                  VALUES ('$PurOder_id','$Material_id[$i]','$count[$i]','$price[$i]')";
            $st = $db->prepare($sql); 
            $st->execute();
        }
        $db->commit();
        //結束Transaction
        
        echo "<script> alert('新增成功 將轉跳至查詢明細');parent.location.href='https://db-finalreport-john777.c9users.io/show_select3-3.php?func2=$PurOder_id'; </script>";
        
    } catch (Exception $e) {
        $db->rollBack();
        echo "<script> alert('新增失敗 在試一次');parent.location.href='https://db-finalreport-john777.c9users.io/show_purch2-1.php'; </script>";
    }
?>