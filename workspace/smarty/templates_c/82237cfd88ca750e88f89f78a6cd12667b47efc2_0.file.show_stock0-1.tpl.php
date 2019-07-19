<?php
/* Smarty version 3.1.29, created on 2016-06-05 16:19:27
  from "/home/ubuntu/workspace/smarty/templates/show_stock0-1.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5754510fddc004_88513178',
  'file_dependency' => 
  array (
    '82237cfd88ca750e88f89f78a6cd12667b47efc2' => 
    array (
      0 => '/home/ubuntu/workspace/smarty/templates/show_stock0-1.tpl',
      1 => 1465143555,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5754510fddc004_88513178 ($_smarty_tpl) {
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
    <link href="../css/css/bootstrap.css" rel="stylesheet">
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
        table.intable {
            
        }
        /* #for talble*/
    </style>
</head>
    <header>
        <div class="header" >
            <form action="index.php" methon=get align="right">
	                <img src="<?php echo $_smarty_tpl->tpl_vars['image_filepath']->value;?>
" width="40px" height="40px">
	                <font>使用者：</font>
	                <font><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</font>&nbsp;&nbsp;
	                <button class="header" type="submit" name=func value="do_logout" >登出</button>
	        </form>
        </div>
    </header>

<body>
    <div id="wrapper">
        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="#">
                        <h1>
                            <a href="index.php?func=show_index_page">
                                <font color=white face="微軟正黑體">找到幸福</font>
                            </a>
                        </h1>
                    </a>
                </li>
                <li>
                    <font color=White><h2>盤點單</h2></font>
                </li>
                <ul>
                    <li>
                        <a class="active" href="index.php?func=show_stock0-1"><h4><font color=white>盤點單列表</font></h4></a>
                    </li>
                    <li>
                        <a  href="#"><h4><font color=white>新增盤點單</font></h4></a>
                    </li>
                    <li>
                        <a href="index.php?func=show_stock2-1"><h4><font color=white>修改盤點單</font></h4></a>
                    </li>
                    <li>
                        <a href="index.php?func=show_stock4-1"><h4><font color=white>查詢盤點單</font></h4></a>
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
                    <table>
                        <tr bgcolor=#6495ed>
                            <td><b>倉庫編號</b></td>
                            <td><b>儲位編號</b></td>
                            <td><b>盤點原料編號</b></td>
                            <td><b>盤點原料名稱</b></td>
                            <td><b>數量</b></td>
                            <td><b>單位</b></td>
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
            <nav>
                <center>
                    <ul class="pagination">
                        <!--在第一頁 往前一頁無效-->
                        <?php if ($_smarty_tpl->tpl_vars['current_page']->value == 1) {?>
                            <li><span aria-hidden="true">&laquo;</span></li>
                        <?php } else { ?>
                            <li><a href="?page=<?php echo $_smarty_tpl->tpl_vars['current_page']->value-1;?>
"><span aria-hidden="true">&laquo;</span><span class="sr-only">Previous</span></a></li>
                        <?php }?>
                        <!--列出所有頁數-->
                        <?php
$_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int) ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? $_smarty_tpl->tpl_vars['total_page']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['total_page']->value)+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0) {
for ($_smarty_tpl->tpl_vars['foo']->value = 1, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++) {
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration == 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration == $_smarty_tpl->tpl_vars['foo']->total;?>
                            <li><a href="?page=<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
</a></li>
                        <?php }
}
?>

                        <!--在最後一頁 往後一頁無效-->
                        <?php if ($_smarty_tpl->tpl_vars['current_page']->value == $_smarty_tpl->tpl_vars['total_page']->value) {?>
                            <li><span aria-hidden="true">&raquo;</span></li>
                        <?php } else { ?>
                            <li><a href="?page=<?php echo $_smarty_tpl->tpl_vars['current_page']->value+1;?>
"><span aria-hidden="true">&raquo;</span><span class="sr-only">Next</span></a></li>
                        <?php }?>
                    </ul>
                </center>
            </nav>
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
