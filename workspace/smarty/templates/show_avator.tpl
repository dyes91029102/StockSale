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
    <style>
        .btn-file {   
            position: relative;   
            overflow: hidden;   
        }   
        .btn-file input[type=file] {   
            position: absolute;   
            top: 0;   
            right: 0;   
            min-width: 100%;   
            min-height: 100%;   
            font-size: 100px;   
            text-align: right;   
            filter: alpha(opacity=0);   
            opacity: 0;   
            outline: none;   
            background: white;   
            cursor: inherit;   
            display: block;   
        }  
    </style>
    </head>
    <header>
        <div style="float:left;">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="index.php?func=show_index_page">
                <b><font color=black size=5 face="微軟正黑體" >返回首頁</font></b>
            </a>
        </div>
        <div style="float:right;">
            <form action="index.php" methon=get>
                <a href="show_avator.php?func=show_avator">
                    <img src="{$image_filepath}" width="40px" height="40px">
                </a>
                <font>使用者：</font>
                <font>{$name}</font>&nbsp;&nbsp;
                <button class="header" type="submit" name=func value="do_logout" >
                    登出
                </button>
            </form>
        </div>
    </header>
    
    <body background="../css/img/bg001.jpg" width=1000>
        <div style="text-align:auto;" align="center">
	        <div style="margin:0 auto;">
	            <br>
	            <form action="do_uploadimage.php" method="POST" enctype="multipart/form-data">
	                <span class="glyphicon glyphicon-folder-open btn-file">  
                       <input type="file" name="image" > 
                    </span> 
                    &nbsp;&nbsp;
                    <input type="submit" value="上傳">
                </form>
                <br>
                <img src="{$image_filepath}"  width="800px" height="800px">
	        </div>
	    </div>   
    </body>
</html>
