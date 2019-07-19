<?php
    header("Content-Type:text/html; charset=utf-8");
    $func3=$_GET['func3'];
    echo "
    <script>
        if(confirm('刪除盤點單')){
            window.location='index.php?func=do_del_stock&func4={$func3}';
        }
        else{
            window.location='index.php?func=show_stock1-1';
        }
    </script>";
?>