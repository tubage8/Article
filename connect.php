<?php
    require_once('config.php');
    //链接
    if(($con = mysql_connect(HOST, USERNAME, PASSWORD))){
        echo mysql_error();
    }
    //连库
    if(!mysql_select_db('articles')){
        echo mysql_error();
    }
    //设置字符集
    if(!mysql_query('set names utf8')){
        echo mysql_error();
    }

?>