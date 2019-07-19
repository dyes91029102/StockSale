<?php
    header("Content-Type:text/html; charset=utf-8");
    require 'MySQL.php';
    $db = Database::initDB();
    $Emp_id = $_POST['Emp_id'];
    $InvRecipt_date=$_POST['date'];
    $warehouse = $_POST['warehouse'];
    $storage = $_PSOT['storage'];
    $Material_id=$_POST['Material_id'];
    $count=$_POST['count'];
    
    //建立新的驗貨單和明細
    try {  
        
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
        //開始Transaction
        $db->beginTransaction();
        
        //建立新的盤點單
        $sql="INSERT INTO InvRecipt(Emp_id,InvRecipt_date) VALUES ('$Emp_id','$InvRecipt_date')";
        $st = $db->prepare($sql); 
        $st->execute();
        
        //取得最後一次新增的InvRecipt_id
        $sql="select max(InvRecipt_id) as n from InvRecipt";
        $st = $db->prepare($sql); 
        $st->execute();
        $InvRecipt_id=$st->fetchAll(PDO::FETCH_ASSOC)[0]['n'];
        
        //建立新的盤點單明細
        for($i=0;$i<count($count);$i++) {
            if($count[$i]==null)
                continue;
                $sql="INSERT INTO  InvReciptDetail(InvRecipt_id,Material_id,stock)
                  VALUES ('$InvRecipt_id','$Material_id[$i]','$count[$i]')";
            $st = $db->prepare($sql); 
            $st->execute();
        }
        $db->commit();
        //結束Transaction
        echo "<script> alert('新增成功 將轉跳至查詢明細');parent.location.href='index.php?func=show_stock3-3&func2=$InvRecipt_id'; </script>";
        
    } catch (Exception $e) {
        $db->rollBack();
        echo "<script> alert('新增失敗 在試一次');parent.location.href='index.php?func=show_stock1-1'; </script>";
    }
?>