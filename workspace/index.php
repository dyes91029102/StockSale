<?php
    
    session_start();
    
    $func='show_index_page';
    if (isset($_GET['func'])) {
        $func = $_GET['func'];
    }
    
    if(empty($_SESSION['logined'])&& $func != 'action_login'){
        require 'login&logout/show_login.html';
        return;
    }

    switch ($func) {
        //登入與登出
        case 'action_login';
            require 'login&logout/do_login.php';
            break; 
        case 'do_logout';
            require 'login&logout/do_logout.php';
            break;
            
        //首頁
        default:
        case 'show_index_page' :
            require 'show_index_page.php';
            break;
            
        //進貨管理
        case 'show_purchase_page' :
            require 'show_purch1-1.php';
            break;
            
        //銷貨管理
        case 'show_sales1-1':
            require "Sales/show_sales1-1.php";
            break;
        case 'show_sales2-1':
            require "Sales/show_sales2-1.php";
            break;
        case 'show_sales3-1':
            require "Sales/show_sales3-1.php";
            break;
        case 'show_sales3-2':
            require "Sales/show_sales3-2.php";
            break;
        case 'show_sales3-3':
            require "Sales/show_sales3-3.php";
            break;
        case 'show_del_order':
            require "Sales/show_del_order.php";
            break;
        case 'do_del_order':
            require "Sales/do_del_order.php";
            break;
        case 'do_sales_insert':
            require "Sales/do_sales_insert.php";
            break;
            
        //存貨管理
        case 'show_stock1-1':
            require "stock/show_stock1-1.php";
            break;
        case 'show_stock2-1':
            require "stock/show_stock2-1.php";
            break;
        case 'show_stock3-1':
            require "stock/show_stock3-1.php";
            break;
        case 'show_stock3-2':
            require "stock/show_stock3-2.php";
            break;
        case 'show_stock3-3':
            require "stock/show_stock3-3.php";
            break;    
        case 'do_query_stock':
            require "stock/do_query_stock.php";
            break;
        case 'do_insert_stock':
            require "stock/do_insert_stock.php";
            break;
        case 'show_del_stock':
            require "stock/show_del_stock.php";
            break;
        case 'do_del_stock':
            require "stock/do_del_stock.php";
            break;
    }

?>