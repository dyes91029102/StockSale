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
    
        /* for talble*/
        table {
            border-collapse: collapse;
            width: 60%;
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
        <div class="header" >
            <form action="index.php" methon=get align="right">
	                <img src="{$image_filepath}" width="40px" height="40px"></a>
	                <font>使用者：</font>
	                <font>{$name}</font>&nbsp;&nbsp;
	                <button class="header" type="submit" name=func value="do_logout" >登出</button>
	        </form>
    	        <a href="index.php?func=show_purchase_page">
                    <br><font color=black face="微軟正黑體">返回訂單頁面</font>
                </a>
        </div>
    </header>
    
     <br><br>
    <body background="../css/img/bg001.jpg" width=1000>
        <div style="text-align:auto;" align="center">
	        <div style="margin:0 auto;">
	            <br>
    	            <form action="do_purch_confirm.php" method="post">
    	                 
                        <table>
                        <tr bgcolor=#6495ed>
                            <td><b>進貨訂貨單編號</b></td>
                            <td><b>驗貨單人員編號</b></td>
                            <td><b>請選擇收貨日期</b></td>
                            <td><b>確認</b></td>
                        </tr>
                            <tr>
                                <td>
                                    {$func3}
                                    <input type="hidden" name="func4" value={$func3}>
                                </td>    
                                <td>
                                    <select name="confirm_Emp_id">
                                        {foreach from=$Emp_list item=i}
                                            <option value={$i['Emp_id']}>
                                                {$i['Emp_id']}
                                            </option>
                                        {/foreach}
                                    </select>
                                </td>
                                <td>
                                    <p>
                                        <label for="bookdate">日期：</label>
                                        <input type="date" id="bookdate" value={$today} placeholder="2014-09-18" name="date" required>
                                    </p>
                                </td>
                                <td>
                                    <!--<a href="https://db-finalreport-john777.c9users.io/do_purch_confirm.php?func4={$func3}"><button class="btn btn-default">確認</button></a>-->
                                    <input class="btn btn-default" type="submit" value="確認">
                                </td>
                            </tr>
                        </table>
                    </form>
                <br>
	        </div>
	    </div>   
    </body>
</html>
