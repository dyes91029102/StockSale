<?php
  $func3=$_GET['func3'];
echo "
<script>
if(confirm('確定退貨'))
{
    window.location='https://db-finalreport-john777.c9users.io/do_return_btn.php?func4={$func3}';
}
else
{
    window.location='https://db-finalreport-john777.c9users.io/show_purch1-2.php';
}
</script>";

?>