<?php
    require 'MySQL.php';
    $db = Database::initDB();
    $func4=$_GET['func4'];
    
    // $sql="Delete from PurOder WHERE PurOder_id='$func4'";
    // $st = $db->prepare($sql); 
    // $st->execute();
    
    $sql3="INSERT INTO Reform (PurOder_id,Reform_id) VALUES ($func4,NULL)";
    $st3 = $db->prepare($sql3); 
    $st3->execute();
    
    header("Location: https://db-finalreport-john777.c9users.io/show_purch1-2.php");

?>