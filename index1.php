<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width,user-scalable=no,initial-scale=1.0">
  <meta charset="UTF-8">
  <title>Document</title>
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/chh.css">
  <script src="js/jquery-1.10.2.js"></script>
  <script src="js/chh.js"></script>
</head>
<style>
  tr th{
  width: 100px;
  height: 50px;
  text-align: center;
    color:#FFFFFF;
    background-color:#000000;
    border: 2px solid #CC0066;
}
tr td{
  height: 80px;
  /*background: #da22d3;*/
  color: #fff;
    border: 2px solid #333;
}
.wsx{
    background: #fff;
    color: black;
  }
  .ze{
    background: green;
    text-align: center;
  }
</style>
<body>
  <!-- 导航条开始 -->
  <nav class="navbar">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nav1">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
        <a href="" class="navbar-brand">
          Lu
        </a>        
      </div>
      <!-- collapse navbar-collapse -->
      <div class="collapse navbar-collapse" id="nav1">
        <ul class="nav navbar-nav">
          <li><a href="">首页</a></li>
          <li><a href="">相册</a></li>
          <li><a href="">日志</a></li>
          <li><a href="">留言</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- 导航条结束 -->

<div class="box1">
  <div class="mul" class="col-lg-1" action="return false">
    <div class="an1 box"><a href="index.html">学生信息</a></div>
    <div class="an2 box wsx"><a href="index1.php">查看消息</a></div>
    <div class="an3 box"><a href="index.php">添加信息</a></div>
  </div>
<div class="col-lg-offset-2 col-md-6 col-sm-5 col-xs-8">
   <?php
    $con = mysql_connect("localhost:3306","root","root");
   mysql_query('set names utf8');
    if (!$con) {
      die('Could not connect: ' . mysql_error());
    }
   
    mysql_select_db("test", $con);
   
    $result = mysql_query("SELECT * FROM user");
   
    echo "<table border='1'>
    <tr>
    <th>Username</th>
    <th>Password</th>
    </tr>";
   
    while($row = mysql_fetch_array($result)) {
      echo "<tr>";
      echo "<td class='ze'>" . $row['username'] . "</td>";
      echo "<td class='ze'>" . $row['password'] . "</td>";
      echo "</tr>";
    } 
    echo "</table>";
   
    mysql_close($con);
  ?>
</div>
  
</div>
</body>
</html>