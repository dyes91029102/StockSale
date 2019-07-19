<?php
    $under=$_POST['under']; //取得下拉式
    $t=$_POST['T'];//取得欄位值
    //引用smarty
    session_start();
    
    //引用資料庫
    require 'MySQL.php';
    
    //開啟資料庫連線
    $db = Database::initDB(); 
    //引用smarty
    require 'MySmarty.php';
    $Smarty = MySmarty::initSmarty();
    
    //取得照片位置
    $Emp_name=$_SESSION['logined'];
    $image_filepath="smarty/upload/$Emp_name.jpg";
        
    if($under=='a')
    {
         $sql ="select InvRecipt_id,Emp_name,a.Emp_id,InvRecipt_date
               from InvRecipt a join Emp b on a.Emp_id=b.Emp_id where a.Emp_id='$t'" ; 
    
        
    }else if($under=='b'){
       $db=null;
        header("Location: index.php?func=show_stock3-3&func2=$t");
    }
    
    $st = $db->prepare($sql); 
    $st->execute();
    $db=null;
    
    //指派並顯示
    $field_content = $st->fetchAll(PDO::FETCH_ASSOC);
    $Smarty->assign('image_filepath',$image_filepath);
    $Smarty->assign('field_content_array',$field_content);
    $Smarty->assign('name',$_SESSION['logined']);
    $Smarty->display('smarty/templates/show_stock3-2.tpl');
?>