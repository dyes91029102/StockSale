<?php
    $under=$_POST['under']; //取得下拉式
    $t=$_POST['T'];//取得欄位值
     //引用smarty
    session_start();
    
    if($under=='a')
    {
        
        require 'MySQL.php';
        $db = Database::initDB();  
        require 'MySmarty.php';
        //指派並顯示
        $Smarty = MySmarty::initSmarty();
        $sql = "SELECT f.Warehouse_id,Storage_id,c.Material_id,Material_name,stock,unit FROM InvReciptDetail c right join Material d on c.Material_id=d.Material_id
         right join Storage e on StorageSt_id=e.Storage_id right join Warehouse f on e.Warehouse_id=f.Warehouse_id join InvRecipt b on c.InvRecipt_id=b.InvRecipt_id join Emp a on b.Emp_id=a.Emp_id where b.Emp_id='$t'";
        $st = $db->prepare($sql); 
        $st->execute();
        $db=null;
       
        
    }else if($under=='b'){
         $db=null;
        header("Location: index.php?func=show_stock3-3&func2=$t");
        
    }
        
         //取得照片位置
        $Emp_name=$_SESSION['logined'];
        $image_filepath="smarty/upload/$Emp_name.jpg";
        
        $field_content = $st->fetchAll(PDO::FETCH_ASSOC);
        $Smarty->assign('image_filepath',$image_filepath);
        $Smarty->assign('field_content_array',$field_content);
        $Smarty->assign('name',$_SESSION['logined']);
        $Smarty->display('smarty/templates/show_stock3-2.tpl');
     
?>