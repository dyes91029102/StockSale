<?php
    header("Content-Type:text/html; charset=utf-8");
    require 'MySQL.php';
    $db = Database::initDB();
    $order_Emp_id = $_POST['order_Emp_id'];
    $date=$_POST['date'];
    $Prod_id=$_POST['Prod_id'];
    $count=$_POST['count'];
    
    //如果全部沒填數量
    $sum=0;
    for($i=0;$i<count($count);$i++){
        $sum=$sum+$count[$i];
    }
    if($sum==0)
        echo "<script> alert('新增失敗 至少填一筆正確資料');parent.location.href='index.php?func=show_sales2-1'; </script>";
    
    //建立新的訂貨單和明細
    try {  
        
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
        //開始Transaction
        $db->beginTransaction();
        
        //建立新的銷貨訂單
        $sql="INSERT INTO `Order`(confirm_Emp_id,Order_date) VALUES ($order_Emp_id,'$date')";
        $st = $db->prepare($sql); 
        $st->execute();
        
        //取得最後一次新增的Order_id
        $sql="select max(Order_id) as n from `Order`";
        $st = $db->prepare($sql); 
        $st->execute();
        $Order_id=$st->fetchAll(PDO::FETCH_ASSOC)[0]['n'];
        
        //建立新的進銷貨明細
        for($i=0;$i<count($count);$i++) {
            if($count[$i]==null)
                continue;
            $sql="INSERT INTO OrderDetail(Order_id,Prod_id,quantity)
                  VALUES ('$Order_id','$Prod_id[$i]','$count[$i]')";
            $st = $db->prepare($sql); 
            $st->execute();
        }
        $db->commit();
        //結束Transaction
        echo "<script> alert('新增成功 將轉跳至查詢明細');parent.location.href='index.php?func=show_sales3-3&func2=$Order_id'; </script>";
        
    } catch (Exception $e) {
        $db->rollBack();
        echo "<script> alert('新增失敗 在試一次');parent.location.href='index.php?func=show_sales2-1'; </script>";
    }
?>