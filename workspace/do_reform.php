<?php
    $under=$_POST['under']; //取得下拉式
    $t=$_POST['t'];//取得欄位值
    
    session_start();
    
    if($under==a)
    {
        
        require 'MySQL.php';
        $db = Database::initDB();  
        require 'MySmarty.php';
        
        //取得照片位置
        $Emp_name=$_SESSION['logined'];
        $image_filepath="smarty/upload/$Emp_name.jpg";
        //指派並顯示
        $Smarty = MySmarty::initSmarty();
        $sql = "SELECT Reform_id,Emp_name,Reform_Emp_id,PurOder_id,Reform_date,CASE WHEN Reform_date IS NULL 
            THEN  '待退貨'
            ELSE  '已退貨'
            END
        FROM Reform left JOIN Emp ON Reform_Emp_id=Emp_id where Reform_Emp_id='$t'";
        $st = $db->prepare($sql); 
        $st->execute();
        $field_content = $st->fetchAll(PDO::FETCH_ASSOC);
        $db=null;
        $Smarty->assign('name',$_SESSION['logined']);
        $Smarty->assign('image_filepath',$image_filepath);
        $Smarty->assign('field_content_array',$field_content);
        $Smarty->assign('name',$_SESSION['logined']);
        $Smarty->display('smarty/templates/show_return5-2.tpl');
        
    }else if($under==b){
        $db=null;
        header("Location: https://db-finalreport-john777.c9users.io/show_return5-3.php?func2=$t");
        
    }
        
     
?>