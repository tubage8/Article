<?php
    require_once('../connect.php');
    //把传递过来的数据入库
//     print_r($_POST);

    if(!(isset($_POST['title']) && (!empty($_POST['title'])))){
        echo "<script>alert('标题不能为空！');window.location.href='article.add.php';</script>";
    }
    
    $id = $_POST['id'];
    $title = $_POST['title'];
    $author = $_POST['author'];
    $description = $_POST['description'];
    $content = $_POST['content'];
    $dateline = time();
    
    echo $sql = "update article set title='$title',author='$author',description='$description',content='$content',dateline='$dateline' where id=$id";
    
    
    if(mysql_query($sql)){
        echo "<script>alert('Update database successful!');window.location.href='article.add.php';</script>";
    }else{
        echo "<script>alert('Update database failed!');window.location.href='article.add.php';</script>";
    }
?>