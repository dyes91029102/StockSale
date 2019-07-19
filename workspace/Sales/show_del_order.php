<?php
    header("Content-Type:text/html; charset=utf-8");
    $func3=$_GET['func3'];
    echo "
    <script>
        if(confirm('刪除訂單')){
            window.location='index.php?func=do_del_order&func4={$func3}';
        }
        else{
            window.location='index.php?func=show_sales1-1';
        }
    </script>";
?>