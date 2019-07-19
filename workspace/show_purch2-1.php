<?php
    
    
    $page=1;
    if (isset($_GET['page'])) {
        $page = $_GET['page'];
    }
    session_start();
    //引用資料庫
    require 'MySQL.php';
    $db = Database::initDB();
    
    
    //取得照片位置
    $Emp_name=$_SESSION['logined'];
    $image_filepath="smarty/upload/$Emp_name.jpg";
    
    //判斷權限是否可以新增進貨訂單
    $sql = "SELECT role from Account join Emp on Owner_id=Emp_id where Emp_name='$Emp_name'";
    $st = $db->prepare($sql); 
    $st->execute();
    $y=$st->fetchAll(PDO::FETCH_ASSOC)[0][role];
    
   
    //取得可以下訂的員工姓名及編號
    $sql = "SELECT Emp_name, Emp_id FROM Emp Where Emp_id=1";
    $st = $db->prepare($sql); 
    $st->execute();
    $Emp_list = $st->fetchAll(PDO::FETCH_ASSOC);
    
    //取得欄位內容
    
    $sql = "SELECT Material_id,Material_name,Sup_name,unit FROM Material a JOIN Sup b ON a.Sup_id=b.Sup_id";
    $st = $db->prepare($sql); 
    $st->execute();
    $field_content = $st->fetchAll(PDO::FETCH_ASSOC);
    //關閉資料庫連線
    $db=null;
    //引用smarty
    require 'MySmarty.php';
    
    //圖片空白
    if(!file_exists($image_filepath)){
        $image_filepath="smarty/upload/default.jpg";
    }
    
     
    //指派並顯示
    $Smarty = MySmarty::initSmarty();
    $Smarty->assign('field_content_array',$field_content);
    $Smarty->assign('image_filepath',$image_filepath);
    $Smarty->assign('Emp_list',$Emp_list);
    $Smarty->assign('name',$_SESSION['logined']);
    $Smarty->assign('x',1);
    if($y==1){
    $Smarty->display('smarty/templates/show_purch2-1.tpl');
    }
    else{
    $Smarty->display('smarty/templates/role_purch2-1.tpl');
    }
?>