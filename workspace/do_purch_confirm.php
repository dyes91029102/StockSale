<?php
    session_start();
    //引用資料庫
    require 'MySQL.php';
    $db = Database::initDB();
    $P_id=$_POST['func4'];
    $date=$_POST['date'];
    $confirm_Emp_id=$_POST['confirm_Emp_id'];
    //取得欄位內容
    $sql = "Update PurOder Set check_Emp_id='$confirm_Emp_id',PurOder_date='$date' where PurOder_id='$P_id'";
    $st = $db->prepare($sql); 
    $st->execute();
    
    header("Location: https://db-finalreport-john777.c9users.io/show_purch1-1.php");
   
    /*$sql2 = "SELECT PurOder_id,Emp_name,order_Emp_id,CASE WHEN PurOder_date IS NULL 
            THEN  '未到貨'  
            ELSE  '已到貨'
            END 
            FROM PurOder JOIN Emp ON order_Emp_id=Emp_id WHERE PurOder_date IS NULL";
    $st2 = $db->prepare($sql2); 
    $st2->execute();    
    $field_content = $st2->fetchAll(PDO::FETCH_ASSOC);
    
    //引用smarty
    require 'MySmarty.php';
    //取得照片位置
    $Emp_name=$_SESSION['logined'];
    $image_filepath="smarty/upload/$Emp_name.jpg";
    
     $db=null;
    //指派並顯示
    $Smarty = MySmarty::initSmarty();
    $Smarty->assign('image_filepath',$image_filepath);
    $Smarty->assign('field_content_array',$field_content);
    $Smarty->assign('name',$_SESSION['logined']);
    $Smarty->display('smarty/templates/show_purch1-1.tpl');*/
?>