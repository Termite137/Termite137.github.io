<?php
	$url="/~s2021319010214/msg_out1.php";
?>
<html>
<head>
	<title>白蚁的秘密空间</title>
	<link rel="stylesheet" type="text/css" href="index.css">
	<script type="text/javascript" src="time.js"></script>
	<meta http-equiv="refresh" content="10;url=<?php echo$url;?>">
</head>
<body onload="startTime()">
	<div style="float:left;" id="clock"></div>
	<div style="float:right;" id="visiter">亲爱的 来访者，您好！</div>
	<div class="header">
		<h1>欢迎来到我的个人主页</h1>
	</div>
	<div class="topnav">
		<a href="/~s2021319010214/tarot.html">塔罗占卜</a>
		<a href="/~s2021319010214/fate.html">缘分测试</a>
		<a href="/~s2021319010214/town.html">我的家乡</a>
		<a href="/~s2021319010214/intro.html">个人规划</a>
		<a href="/~s2021319010214/homepage.html" id="a_home">回到首页</a>
	</div>
	<br/>

	<div class="card">
	<h2>留言结果</h2><hr/><br/>

<?php


$servername = "localhost";
$username = "s2021319010214";
$password = "lkzrm030112";
$dbname = "s2021319010214db";
 
// 创建连接
$conn = mysqli_connect($servername, $username, $password, $dbname);
// 检测连接
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
 
$sql = "INSERT INTO msg_test (message, yourname, time)
VALUES ('" . $_POST["message"] . "', '" . $_POST["visitor"] . "', now())";

mysqli_query($conn, "set names utf8");
if (mysqli_query($conn, $sql)) {
    echo "留言成功！";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
 
mysqli_close($conn);


?>
	<br/>
	<br/><p align="center">10秒后将自动跳转至全部留言页面...</p>
	<br/>
	<form action="msg_out1.php"><br/>
	<p align="center"><input id="leave_msg" type="submit" value="点击这里直接前往查看全部留言->"></p>
	</form>
	<br/><br/><br/><br/><br/><br/><br/>
</div>

	
<div class="footer">
  <p>感谢访问！</p>
</div>

</body>
</html>