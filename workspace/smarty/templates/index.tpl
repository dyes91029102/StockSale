<!DOCTYPE html>
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
         <!-- Bootstrap Core CSS -->
        <link href="../css/css/bootstrap.min.css" rel="stylesheet">
        
         <!-- Custom CSS -->
    <link href="../css/css/bootstrap.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    </head>
    <header>
        <div class="header" >
            <form action="index.php" methon=get align="right">
	                <a href="show_avator.php?func=show_avator"><img src="{$image_filepath}" width="40px" height="40px"></a>
	                <font>使用者：</font>
	                <font>{$name}</font>&nbsp;&nbsp;
	                <button class="header" type="submit" name=func value="do_logout" id="user-info">登出</button>
        </div>
    </header>
    
    <body background="../css/img/bg001.jpg" width=1000>
        
        <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/zh_TW/sdk.js#xfbml=1&version=v2.6&appId=1123168284410262";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
        
        <div style="text-align:auto;">
	        <div style="margin:0 auto;">
	            <br><br>
	            <table align="center">
	            	<tr>
	            		<td align="center"><img src="../css/img/logo.gif"></td>
	            	</tr>
	            	<tr>
	            		<td align="center"><font face="DFKai-sb" size="6" color="#4C72C4"><b>進銷存管理系統</b></font></td>
	            	</tr>
	            </table>
	            <br><br><br>
	            <table align="center">
	            <tr>
	                <td align="text-align:left"><a href="index.php?func=show_purchase_page"><img src="../css/img/purchase2.png"></a></td>
                    <td align="center"><a href="index.php?func=show_sales1-1"><img src="../css/img/sale2.png"></a></td>
                    <td align="text-align:right"><a href="index.php?func=show_stock1-1"><img src="../css/img/stock.png"></a></td>
                </tr>
                <tr>    
                	<td align="center"><font face="DFKai-sb" size="6"><b>採購管理</b></font></td>
                   	<td align="center"><font face="DFKai-sb" size="6"><b>銷售管理</b></font></td>
                	<td align="center"><font face="DFKai-sb" size="6"><b>存貨管理</b></font></td>
                </tr>
                </table>
	        </div>
	    </div>   
    </body>
</html>
