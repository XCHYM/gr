<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Document</title>
  <style>
  </style>
</head>
<body>
   <?php
   header("Content-type: text/html;charset=utf-8");
  $con = mysql_connect("localhost:3306","root","root");
  if (!$con) {
    die('Could not connect: ' . mysql_error());
  }
 
  mysql_select_db("test", $con);
 mysql_query('set names utf8');
  $sql = "INSERT INTO user (username,password)
  VALUES
  ('$_POST[username]','$_POST[password]')";
 
  if (!mysql_query($sql,$con)) {
    die('Error: ' . mysql_error());
  }
 
  echo '一条消息插入成功';
 
  mysql_close($con);
 
?>
</body>
</html>