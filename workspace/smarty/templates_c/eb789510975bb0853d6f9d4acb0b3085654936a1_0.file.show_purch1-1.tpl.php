<?php
/* Smarty version 3.1.29, created on 2016-05-30 10:55:14
  from "/home/ubuntu/workspace/smarty/templates/show_purch1-1.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_574c1c126ae351_07763261',
  'file_dependency' => 
  array (
    'eb789510975bb0853d6f9d4acb0b3085654936a1' => 
    array (
      0 => '/home/ubuntu/workspace/smarty/templates/show_purch1-1.tpl',
      1 => 1464605506,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_574c1c126ae351_07763261 ($_smarty_tpl) {
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Simple Sidebar - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="../css/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../css/css/simple-sidebar.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"><?php echo '</script'; ?>
>
    <![endif]-->

    <style>
    
        /* for talble*/
        table {
            border-collapse: collapse;
            width: 100%;
        }
        
        th, td {
            text-align: left;
            padding: 8px;
        }
        
        tr:nth-child(even){
            background-color: #f2f2f2
            
        }
        
        th {
            background-color: #4CAF50;
            color: white;
        }
        /* #for talble*/
    </style>
</head>

<body>

    <div id="wrapper">
        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="#">
                        <h1><font color=white face="華康少女文字W5">找到幸福</font></h1>
                    </a>
                </li>
                <li>
                    <font color=White><h2>進貨訂單</h2></font>
                </li>
                <ul>
                    <li>
                        <a class="active" href="#"><h4><font color=white>進貨訂單列表</font></h4></a>
                    </li>
                    <li>
                        <a href="#"><h4><font color=white>新增進貨訂單</font></h4></a>
                    </li>
                    <li>
                        <a href="#"><h4><font color=white>查詢進貨訂單</font></h4></a>
                    </li>
                </ul>
                <li>
                    <font color=White><h2>退貨單</h2></font>
                </li>
                <ul>
                    <li>
                        <a href="#"><h4><font color=white>退貨單列表</font></h4></a>
                    </li>
                    <li>
                        <a href="#"><h4><font color=white>新增退貨單</font></h4></a>
                    </li>
                    <li>
                        <a href="#"><h4><font color=white>查詢退貨單</font></h4></a>
                    </li>
                </ul>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">
                            <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
                        </a>
                    </div>
                </div>
            </div>
            <br>
            <div>
            <ul class="nav nav-tabs">
              <li role="presentation" class="active"><a href="#">未收貨</a></li>
              <li role="presentation"><a href="https://tw.yahoo.com/">已收貨</a></li>
              <li role="presentation"><a href="#">所有訂單</a></li>
            </ul>    
            </div>
            <br>
                <table>
                    <tr bgcolor=#00FF00>
                        <td><b>訂單明細</b></td>
                        <td><b>訂貨單編號</b></td>
                        <td><b>下單人員姓名</b></td>
                        <td><b>下單人編號</b></td>
                        <td><b>狀態</b></td>
                        <td><b>收貨確認</b></td>
                        <td><b>刪除訂單</b></td>
                    </tr>
                    <?php
$_from = $_smarty_tpl->tpl_vars['field_content_array']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_i_0_saved_item = isset($_smarty_tpl->tpl_vars['i']) ? $_smarty_tpl->tpl_vars['i'] : false;
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['i']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
$__foreach_i_0_saved_local_item = $_smarty_tpl->tpl_vars['i'];
?>
                        <tr>
                            <td>
                            <button class="btn btn-default">+</button>
                            </td>
                            <?php
$_from = $_smarty_tpl->tpl_vars['i']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_j_1_saved_item = isset($_smarty_tpl->tpl_vars['j']) ? $_smarty_tpl->tpl_vars['j'] : false;
$_smarty_tpl->tpl_vars['j'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['j']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['j']->value) {
$_smarty_tpl->tpl_vars['j']->_loop = true;
$__foreach_j_1_saved_local_item = $_smarty_tpl->tpl_vars['j'];
?>
                                <td><?php echo $_smarty_tpl->tpl_vars['j']->value;?>
</td>
                            <?php
$_smarty_tpl->tpl_vars['j'] = $__foreach_j_1_saved_local_item;
}
if ($__foreach_j_1_saved_item) {
$_smarty_tpl->tpl_vars['j'] = $__foreach_j_1_saved_item;
}
?>
                            <td>
                                未到貨
                            </td>
                            <td>
                                <button class="btn btn-default">確認</button>
                            </td>
                            <td>
                                <button class="btn btn-default">
                                    <a href="https://www.google.com.tw/">
                                    <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                                </button>
                            </td>
                        </tr>
                    <?php
$_smarty_tpl->tpl_vars['i'] = $__foreach_i_0_saved_local_item;
}
if ($__foreach_i_0_saved_item) {
$_smarty_tpl->tpl_vars['i'] = $__foreach_i_0_saved_item;
}
?>
                </table>
            </div>    
        </div>
        <!-- /#page-content-wrapper -->
    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <?php echo '<script'; ?>
 src="../css/js/jquery.js"><?php echo '</script'; ?>
>

    <!-- Bootstrap Core JavaScript -->
    <?php echo '<script'; ?>
 src="../css/js/bootstrap.min.js"><?php echo '</script'; ?>
>

    <!-- Menu Toggle Script -->
    <?php echo '<script'; ?>
>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    <?php echo '</script'; ?>
>

</body>

</html>
<?php }
}
