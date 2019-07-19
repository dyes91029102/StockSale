<?php
    session_start();
    //引用資料庫
    require 'MySQL.php';
    $db = Database::initDB();
    $func2=$_GET['func2'];
    //取得欄位內容
    
     require 'MySmarty.php';
     $Smarty = MySmarty::initSmarty();
         $sql = "SELECT Reform_id,Emp_name,Reform_Emp_id, a.PurOder_id, Reform_date,CASE WHEN Reform_date IS NULL 
                THEN  '待退貨'
                ELSE  '已退貨'
                END
        FROM Reform a left JOIN Emp b on a.Reform_Emp_id=b.Emp_id
        WHERE Reform_id ='$func2'";  //退貨單明細
        
        $sql2 ="SELECT Reform_id, a.PurOder_id, Material_name,e.Material_id,price,quantity,unit,Sup_name,price*quantity
        FROM Reform a join PurOderDetail c ON a.PurOder_id = c.PurOder_id
        LEFT JOIN Material e ON c.Material_id = e.Material_id JOIN Sup d ON e.Sup_id = d.Sup_id
        WHERE Reform_id ='$func2'";      //進貨單資料 轉退貨單明細
                
        $st = $db->prepare($sql); 
        $st->execute();
        $field_content = $st->fetchAll(PDO::FETCH_ASSOC);
        $st2 = $db->prepare($sql2); 
        $st2->execute();
        $field_content2 = $st2->fetchAll(PDO::FETCH_ASSOC);
            
        //取得照片位置
        $Emp_name=$_SESSION['logined'];
        $image_filepath="smarty/upload/$Emp_name.jpg";
    
            //圖片空白
        if(!file_exists($image_filepath)){
            $image_filepath="smarty/upload/default.jpg";
        }
        $db=null;
        $Smarty->assign('field_content_array',$field_content);
        $Smarty->assign('field_content_array2',$field_content2);
        $Smarty->assign('image_filepath',$image_filepath);
        $Smarty->assign('name',$_SESSION['logined']);
        $Smarty->display('smarty/templates/show_return5-3.tpl');
    
    

?>