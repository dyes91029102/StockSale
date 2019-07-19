<?php  
    //預設為第一頁
    $page=1;
    if (isset($_GET['page'])) {
        $page = $_GET['page'];
    }
    //所有資料
    $all_arr =array(array(11,12,13),array(21,22,23),array(31,32,33),array(41,42,43),array(51,52,53));
    
    //每3筆一頁 計算總頁數 ceil():無條件進位
    $total_page = ceil(count($all_arr)/3);
    
    //建立對應頁數之3筆資料
    $arr;
    for($i=0;$i<3;$i++){
        if($all_arr[($page-1)*3+$i]!=null)             //這行判斷有沒空資料
            $arr[$i] = $all_arr[($page-1)*3+$i];       //塞進陣列
    }
    
    //引用smarty
    require 'MySmarty.php';
    $Smarty = MySmarty::initSmarty();
    
    //顯示
    echo "<html>";
    echo "<table>";
    foreach ($arr as $i) {
        echo "<tr>";
        foreach ($i as $j) {
            echo "<td>$j</td>";
        }
        echo "</tr>";
    }
    echo "<table>";
        echo "<ul>";
        for($i=1;$i<=$total_page;$i++)
            echo "<li><a href='?page=$i'>$i</a></li>";
        echo "</ul>";
    echo "</table>";
?>