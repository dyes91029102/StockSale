<?php
    $page=1;
    if (isset($_GET['page'])) {
        $page = $_GET['page'];
    }
    
    session_start();
    
    //引用資料庫
    require 'MySQL.php';
    //開啟資料庫連線
    $db = Database::initDB();
    
    //取得所有員工姓名及編號
    $sql = "SELECT Emp_name, Emp_id FROM Emp";
    $st = $db->prepare($sql); 
    $st->execute();
    $Emp_list = $st->fetchAll(PDO::FETCH_ASSOC);
    
    //取得所有產品內容
    $sql = "SELECT Prod_id, Prod_name, price
            FROM  `Prod` ";
    $st = $db->prepare($sql); 
    $st->execute();
    $field_content = $st->fetchAll(PDO::FETCH_ASSOC);

    //關閉資料庫連線
    $db=null;
    
    //引用smarty
    require 'MySmarty.php';
    
    //取得照片位置
    $Emp_name=$_SESSION['logined'];
    $image_filepath="smarty/upload/$Emp_name.jpg";
    //指派並顯示
    $Smarty = MySmarty::initSmarty();
    $Smarty->assign('image_filepath',$image_filepath);
    $Smarty->assign('Emp_list',$Emp_list);
    $Smarty->assign('today',date("Y-m-d"));
    $Smarty->assign('name',$_SESSION['logined']);
    $Smarty->assign('field_content',$field_content);
    $Smarty->display('smarty/templates/show_sales2-1.tpl');
?>