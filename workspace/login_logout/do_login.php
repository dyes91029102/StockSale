<?php
    require 'MySQL.php';
    $db = Database::initDB();  
    $account = $_POST['account'];
    $password = hash('crc32', $_POST['password']);
    
    $sql = "SELECT account,passwd from Account WHERE account='$account' and passwd='$password'";
    $st = $db->prepare($sql); 
    $st->execute();
    $c=count($st->fetchAll(PDO::FETCH_ASSOC));
    if ($c==1) {
        $sql = "SELECT Emp_name from Account join Emp on Owner_id=Emp_id where account='$account'";
        $st = $db->prepare($sql); 
        $st->execute();
        $_SESSION['logined'] =$st->fetchAll(PDO::FETCH_ASSOC)[0][Emp_name];
        $db = null;
        header("Location: index.php");
    }else {
        $db = null;
        
        echo "<script>alert('登入失敗 跳回登入網頁');location.href='https://db-finalreport-john777.c9users.io/';</script>";
    } 
?>