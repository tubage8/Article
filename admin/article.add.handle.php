<?php
    require_once('../connect.php');
    //把传递过来的数据入库
//     print_r($_POST);

    if(!(isset($_POST['title']) && (!empty($_POST['title'])))){
        echo "<script>alert('标题不能为空！');window.location.href='article.add.php';</script>";
    }
    
    $title = $_POST['title'];
    $author = $_POST['author'];
    $description = $_POST['description'];
    $content = $_POST['content'];
    $dateline = time();
    
    echo $sql = "insert into article(title,author,description,content,dateline) values('$title','$author','$description','$content',$dateline)";
    
    
    if(mysql_query($sql)){
        echo "<script>alert('Insert into database successful!');window.location.href='article.manage.php';</script>";
    }else{
        echo "<script>alert('Insert into database failed!');window.location.href='article.manage.php';</script>";
    } 
?>