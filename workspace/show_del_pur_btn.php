<?php
    header("Content-Type:text/html; charset=utf-8");
    $func3=$_GET['func3'];
    echo "
    <script>
        if(confirm('刪除訂單')){
            window.location='https://db-finalreport-john777.c9users.io/do_del_pur_btn.php?func4={$func3}';
        }
        else{
            window.location='https://db-finalreport-john777.c9users.io/show_purch1-1.php';
        }
    </script>";
?>