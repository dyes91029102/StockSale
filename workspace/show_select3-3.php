<?php
    session_start();
    //引用資料庫
    require 'MySQL.php';
    $db = Database::initDB();
    $func2=$_GET['func2'];
    //取得欄位內容
     require 'MySmarty.php';
    $Smarty = MySmarty::initSmarty();
    
      
        
        $sql ="select c.PurOder_id,a.Emp_name as c,Order_Emp_id,b.Emp_name as d,check_Emp_id,sum(price*quantity),PurOder_date , 
                CASE WHEN PurOder_date IS NULL 
                THEN  '未進貨'
                ELSE  '已進貨'
                END FROM PurOder c
                join Emp a on c.order_Emp_id=a.Emp_id left join Emp b on c.check_Emp_id=b.Emp_id join PurOderDetail d on c.PurOder_id=d.PurOder_id 
                where c.PurOder_id='$func2' Group by c.PurOder_id" ;      //進貨訂單資料
              
        $sql2 = "select PurOder_id,Material_name,a.Material_id,price,quantity,unit,Sup_name,price*quantity
                from PurOderDetail a join Material b on a.Material_id=b.Material_id join Sup c on b.Sup_id=c.Sup_id where PurOder_id='$func2'";  //進貨訂單明細        
  
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
        $Smarty->display('smarty/templates/show_select3-3.tpl');
    
    

?>