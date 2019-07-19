<?php
    session_start();
    //引用資料庫
    require 'MySQL.php';
    //開啟資料庫連線
    $db = Database::initDB();
    
    //取得欄位內容
    $sql = "SELECT PurOder_id,Emp_name,order_Emp_id FROM PurOder JOIN Emp ON order_Emp_id=Emp_id WHERE PurOder_date IS NULL";
    $st = $db->prepare($sql); 
    $st->execute();
    $field_content = $st->fetchAll(PDO::FETCH_ASSOC);
    
    //關閉資料庫連線
    $db=null;
    
    
    //引用smarty
    require 'MySmarty.php';
    
    //指派並顯示
    $Smarty = MySmarty::initSmarty();
    $Smarty->assign('field_content_array',$field_content);
    $Smarty->assign('name',$_SESSION['logined']);
    $Smarty->display('smarty/templates/show_sale_page.tpl');
?>