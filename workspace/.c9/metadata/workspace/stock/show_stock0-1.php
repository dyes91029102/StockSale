{"changed":true,"filter":false,"title":"show_stock0-1.php","tooltip":"/stock/show_stock0-1.php","value":"<?php\n    $page=1;\n    if (isset($_GET['page'])) {\n        $page = $_GET['page'];\n    }\n    session_start();\n    //引用資料庫\n    require 'MySQL.php';\n    $db = Database::initDB();\n    \n    \n    //取得照片位置\n    $Emp_name=$_SESSION['logined'];\n    $image_filepath=\"smarty/upload/$Emp_name.jpg\";\n    \n    //取得欄位內容\n    $sql = \"SELECT f.Warehouse_id,Storage_id,c.Material_id,Material_name,stock,unit FROM InvReciptDetail c right join Material d on c.Material_id=d.Material_id\n    right join Storage e on StorageSt_id=e.Storage_id right join Warehouse f on e.Warehouse_id=f.Warehouse_id join InvRecipt b on c.InvRecipt_id=b.InvRecipt_id join Emp a on b.Emp_id=a.Emp_id\";\n    $st = $db->prepare($sql); \n    $st->execute();\n    $field_content = $st->fetchAll(PDO::FETCH_ASSOC);\n    //關閉資料庫連線\n    $db=null;\n    //引用smarty\n    require 'MySmarty.php';\n    \n    //圖片空白\n    if(!file_exists($image_filepath)){\n        $image_filepath=\"smarty/upload/default.jpg\";\n    }\n    \n     \n    //指派並顯示\n    $Smarty = MySmarty::initSmarty();\n    $Smarty->assign('field_content_array',$field_content);\n    $Smarty->assign('image_filepath',$image_filepath);\n    $Smarty->assign('name',$_SESSION['logined']);\n    $Smarty->assign('x',1);\n    $Smarty->display('smarty/templates/show_stock0-1.tpl');\n   \n?>","undoManager":{"mark":-2,"position":5,"stack":[[{"start":{"row":2,"column":1},"end":{"row":2,"column":2},"action":"insert","lines":["="],"id":71}],[{"start":{"row":2,"column":1},"end":{"row":2,"column":2},"action":"remove","lines":["="],"id":72}],[{"start":{"row":2,"column":0},"end":{"row":2,"column":1},"action":"remove","lines":[" "],"id":73}],[{"start":{"row":1,"column":4},"end":{"row":2,"column":3},"action":"remove","lines":["","   "],"id":74}],[{"start":{"row":1,"column":0},"end":{"row":1,"column":4},"action":"remove","lines":["    "],"id":75}],[{"start":{"row":0,"column":5},"end":{"row":1,"column":0},"action":"remove","lines":["",""],"id":76}]]},"ace":{"folds":[],"scrolltop":480,"scrollleft":0,"selection":{"start":{"row":0,"column":5},"end":{"row":0,"column":5},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":19,"state":"php-start","mode":"ace/mode/php"}},"timestamp":1465147752000}