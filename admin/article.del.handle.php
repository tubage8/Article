<?php
    require_once('../connect.php');
    $id = $_GET['id'];
    $sql = "delete from article where id=$id";
    if(mysql_query($sql)){
        echo "<script>alert('Delete article successful!');window.location.href='article.manage.php';</script>";
    }else{
        echo "<script>alert('Delete article failed!');window.location.href='article.manage.php';</script>";
    }
?>