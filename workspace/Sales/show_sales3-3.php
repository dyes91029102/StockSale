<?php
    session_start();
    //引用資料庫
    require 'MySQL.php';
    $db = Database::initDB();
    $func2=$_GET['func2'];
    //取得欄位內容
    require 'MySmarty.php';
    $Smarty = MySmarty::initSmarty();
        
    $sql ="SELECT a.Order_id, Emp_name, confirm_Emp_id, SUM( price * quantity ) , Order_date
            FROM  `Order` a
            JOIN Emp b ON a.confirm_Emp_id = b.Emp_id
            JOIN OrderDetail c ON a.Order_id = c.Order_id
            JOIN Prod d ON c.Prod_id = d.Prod_id
            WHERE a.Order_id =  '$func2'
            GROUP BY '$func2'" ;      //銷貨訂單資料
          
    $sql2 = "SELECT a.Order_id,Prod_name,d.Prod_id,price,quantity,price*quantity
            FROM  `Order` a
            JOIN Emp b ON a.confirm_Emp_id = b.Emp_id JOIN OrderDetail c ON a.Order_id = c.Order_id
            JOIN Prod d ON c.Prod_id = d.Prod_id WHERE a.Order_id ='$func2'";  //銷貨訂單明細        

    $st = $db->prepare($sql); 
    $st->execute();
    $st2 = $db->prepare($sql2); 
    $st2->execute();
    //取得照片位置
    $Emp_name=$_SESSION['logined'];
    $image_filepath="smarty/upload/$Emp_name.jpg";

    $db=null;
    
    $field_content = $st->fetchAll(PDO::FETCH_ASSOC);
    $field_content2 = $st2->fetchAll(PDO::FETCH_ASSOC);
    $Smarty->assign('field_content_array',$field_content);
    $Smarty->assign('field_content_array2',$field_content2);
    $Smarty->assign('image_filepath',$image_filepath);
    $Smarty->assign('name',$_SESSION['logined']);
    $Smarty->display('smarty/templates/show_sales3-3.tpl');
    
    

?>