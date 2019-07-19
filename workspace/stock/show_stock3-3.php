<?php
    session_start();
    //引用資料庫
    require 'MySQL.php';
    $db = Database::initDB();
    $func2=$_GET['func2'];
    //取得欄位內容
     require 'MySmarty.php';
    $Smarty = MySmarty::initSmarty();
    
        $sql ="select InvRecipt_id,Emp_name,a.Emp_id,InvRecipt_date
        from InvRecipt a join Emp b on a.Emp_id=b.Emp_id where InvRecipt_id='$func2'" ;      //盤點單資料
              
      $sql2 = "SELECT b.InvRecipt_id,f.Warehouse_id,Storage_id,c.Material_id,Material_name,stock,unit FROM InvReciptDetail c right join Material d on c.Material_id=d.Material_id
        right join Storage e on StorageSt_id=e.Storage_id right join Warehouse f on e.Warehouse_id=f.Warehouse_id join InvRecipt b on c.InvRecipt_id=b.InvRecipt_id join Emp a on b.Emp_id=a.Emp_id where b.InvRecipt_id='$func2'"; //盤點單明細        
  
        $st = $db->prepare($sql); 
        $st->execute();
        $st2 = $db->prepare($sql2); 
        $st2->execute();
        //取得照片位置
        $Emp_name=$_SESSION['logined'];
        $image_filepath="smarty/upload/$Emp_name.jpg";
        
        $db=null;
        
            //圖片空白
        if(!file_exists($image_filepath)){
            $image_filepath="smarty/upload/default.jpg";
        }
        
        $field_content = $st->fetchAll(PDO::FETCH_ASSOC);
        $field_content2 = $st2->fetchAll(PDO::FETCH_ASSOC);
        $Smarty->assign('field_content_array',$field_content);
        $Smarty->assign('field_content_array2',$field_content2);
        $Smarty->assign('image_filepath',$image_filepath);
        $Smarty->assign('name',$_SESSION['logined']);
        $Smarty->display('smarty/templates/show_stock3-3.tpl');
    
    

?>