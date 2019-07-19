<?php
    $under=$_POST['under']; //取得下拉式
    $t=$_POST['T'];//取得欄位值
     //引用smarty
    session_start();
    
    if($under==a)
    {
        
        require 'MySQL.php';
        $db = Database::initDB();  
        require 'MySmarty.php';
        //指派並顯示
        $Smarty = MySmarty::initSmarty();
        $sql = "select PurOder_id,a.Emp_name as c, Order_Emp_id,b.Emp_name as d,check_Emp_id,PurOder_date,CASE WHEN PurOder_date IS NULL 
            THEN  '未進貨'
            ELSE  '已進貨'
            END from PurOder join Emp a on order_Emp_id=a.Emp_id left join Emp b on check_Emp_id=b.Emp_id where Order_Emp_id='$t'";
        $st = $db->prepare($sql); 
        $st->execute();
        $db=null;
        //取得照片位置
        $Emp_name=$_SESSION['logined'];
        $image_filepath="smarty/upload/$Emp_name.jpg";
    
        $field_content = $st->fetchAll(PDO::FETCH_ASSOC);
        $Smarty->assign('image_filepath',$image_filepath);
        $Smarty->assign('field_content_array',$field_content);
        $Smarty->assign('name',$_SESSION['logined']);
        $Smarty->display('smarty/templates/show_select3-2.tpl');
        
    }else if($under==b){
        
        require 'MySQL.php';
        $db = Database::initDB();
        require 'MySmarty.php';
    
        //取得照片位置
        $Emp_name=$_SESSION['logined'];
        $image_filepath="smarty/upload/$Emp_name.jpg";
    
        //指派並顯示
        $Smarty = MySmarty::initSmarty();
        $sql = "select PurOder_id,a.Emp_name as c,Order_Emp_id,b.Emp_name as d,check_Emp_id,PurOder_date,
        CASE WHEN PurOder_date IS NULL 
            THEN  '未進貨'
            ELSE  '已進貨'
            END from PurOder join Emp a on order_Emp_id=a.Emp_id left join Emp b on check_Emp_id=b.Emp_id where Check_Emp_id='$t'";
        $st = $db->prepare($sql); 
        $st->execute();
        $db=null;
        $field_content = $st->fetchAll(PDO::FETCH_ASSOC);
        $Smarty->assign('image_filepath',$image_filepath);
        $Smarty->assign('field_content_array',$field_content);
        $Smarty->assign('name',$_SESSION['logined']);
        $Smarty->display('smarty/templates/show_select3-2.tpl');
        
    }else if($under==c){
        $db=null;
        header("Location: https://db-finalreport-john777.c9users.io/show_select3-3.php?func2=$t");
    }
        
     
?>