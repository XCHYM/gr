<?php
 
  $con = mysql_connect("localhost","root","root");
  if (!$con) {
    die('Could not connect: ' . mysql_error());
  }
 
  mysql_select_db("test", $con);
 
  mysql_query("UPDATE user SET password = '$_POST[password]' WHERE username = '$_POST[username]'");
 
  mysql_close($con);
?>