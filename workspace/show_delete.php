<?php
  $func3=$_GET['func3'];
echo "
<script>
if(confirm('取消退貨'))
{
    window.location='https://db-finalreport-john777.c9users.io/do_delete.php?func4={$func3}';
}
else
{
    window.location='https://db-finalreport-john777.c9users.io/show_return4-1.php';
}
</script>";

?>