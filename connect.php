<?php
    require_once('config.php');
    //连接
    if(($con = mysql_connect(HOST, USERNAME, PASSWORD))){
        echo mysql_error();
    }
    //连库
    if(!mysql_select_db('articles')){
        echo mysql_error();
    }
    //设置数据集
    if(!mysql_query('set names utf8')){
        echo mysql_error();
    }

?>