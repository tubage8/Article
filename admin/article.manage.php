<?php 
    require_once ('../connect.php');
    $sql = "select * from article order by dateline desc";
    $query = mysql_query($sql);
    if ($query && mysql_num_rows($query)){
        while ($row=mysql_fetch_assoc($query)){
            $data[]=$row;
        }
    }else {
        $data = array();
    }
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>管理文章</title>
<style type="text/css">
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
</style>
</head>

<body>
<table width="100%" height="520" border="0" cellpadding="8" cellspacing="1" bgcolor="#000000">
  <tr>
    <td height="89" colspan="2" bgcolor="#FFFF99"><strong>后台管理系统</strong></td>
  </tr>
  <tr>
    <td width="156" height="287" align="left" valign="top" bgcolor="#FFFF99"><p><a href="article.add.php">发布文章</a></p>
    <p><a href="article.manage.php">管理文章</a></p>      </td>
    <td width="837" valign="top" bgcolor="#FFFFFF">
    <form id="form1" name="form1" method="post">
      <table width="779" border="0" cellpadding="8" cellspacing="1">
        <tr>
          <td align="center">管理文章</td>
          </tr>
        <table width="770" border="1" cellpadding="8" cellspacing="1" align="center">
            <tr>
                <td width="100">ID</td>
                <td width="400">标题</td>
                <td >操作</td>
            </tr>
            <?php 
                foreach ($data as $value){
                        
            ?>
                <tr>
                    <td width="100"><?php echo $value["id"]?></td>
                    <td width="400"><?php echo $value["title"]?></td>
                    <td><a href="article.modify.php?id=<?php echo $value["id"]?>">修改</a>&nbsp&nbsp <a href="article.del.handle.php?id=<?php echo $value["id"]?>">删除</a></td>
                </tr>
            <?php 
                }
            ?>
        </table>
        <!-- <tr>
          <td width="119">标题</td>
          <td width="625"><label for="title"></label>
            <input type="text" name="title" id="title" /></td>
        </tr>
        <tr>
          <td>作者</td>
          <td><input type="text" name="author" id="author" /></td>
        </tr>
        <tr>
          <td>简介</td>
          <td><label for="description"></label>
            <textarea name="description" id="description" cols="60" rows="5"></textarea></td>
        </tr>
        <tr>
          <td>内容</td>
          <td><textarea name="content" cols="60" rows="15" id="content"></textarea></td>
        </tr>
        <tr>
          <td colspan="2" align="right"><input type="submit" name="button" id="button" value="提交" /></td>
          </tr> -->
      </table>
    </form></td>
  </tr>
  <tr>
    <td colspan="2" bgcolor="#FFFF99"><strong>版权所有</strong></td>
  </tr>
</table>
</body>
</html>
