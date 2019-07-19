
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
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
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
            height:50px;
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
    <!--div class="header">-->
        <form action="index.php" methon=get align="RIGHT">
            <img src="{$image_filepath}" width="40px" height="40px">
	        <font>使用者：</font>
	        <font>{$name}</font>&nbsp;&nbsp;
	        <button class="header" type="submit" name=func value="do_logout" >登出</button>
	    </form>
    <!--</div>-->
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
                    <font color=White><h2>銷貨訂單</h2></font>
                </li>
                <ul>
                    <li>
                        <a  href="index.php?func=show_sales1-1"><h4><font color=white>銷貨訂單列表</font></h4></a>
                    </li>
                    <li>
                        <a href="index.php?func=show_sales2-1"><h4><font color=white>新增銷貨訂單</font></h4></a>
                    </li>
                    <li>
                        <a class="active" href="index.php?func=show_sales3-1"><h4><font color=white>查詢銷貨訂單</font></h4></a>
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
                  <h2>銷貨訂單</h2>
                <table>
                    <tr bgcolor=#6495ed>
                        <td><b>銷貨訂單編號</b></td>
                        <td><b>接單人員姓名</b></td>
                        <td><b>接單人員編號</b></td>
                        <td><b>總計</b></td>
                        <td><b>銷貨日期</b></td>
                    </tr>
                    {foreach from=$field_content_array item=i}
                    <tr>
                        {foreach from=$i item=j}
                            <td>{$j}</td>
                        {/foreach}
                    </tr>    
                    {/foreach}
                </table>
                <br>
                <h2>銷貨訂單明細</h2>
                <table>
                    <tr bgcolor=#6495ed>
                        <td><b>銷貨訂單編號</b></td>
                        <td><b>產品名稱</b></td>
                        <td><b>產品編號</b></td>
                        <td><b>單價</b></td>
                        <td><b>數量</b></td>
                        <td><b>小計</b></td>
                    </tr>
                    {foreach from=$field_content_array2 item=i}
                    <tr>
                        {foreach from=$i item=j}
                            <td>{$j}</td>
                        {/foreach}
                    </tr>
                    {/foreach}
                </table>
            </div>    
        </div>
        <!-- /#page-content-wrapper -->
    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../css/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../css/js/bootstrap.min.js"></script>

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>

</body>

</html>
