<html>
<head>
	<title>白蚁的秘密空间</title>
	<link rel="stylesheet" type="text/css" href="index.css">
	<script type="text/javascript" src="time.js"></script>

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
	<h2>全部留言</h2><hr/><br/>


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
 
$sql = "SELECT message, yourname, time FROM msg_test ORDER BY time ASC";

mysqli_query($conn, "set names utf8");
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    //输出数据
	$n=1;
	while($row = mysqli_fetch_assoc($result)) {
		if($n<10){
			echo "0".$n.". 时间：" . $row["time"]."--留言：" . $row["message"]."———署名：".$row["yourname"]."<br/>";
			$n=$n+1;}
		else{
			echo $n.". 时间：" . $row["time"]."--留言：" . $row["message"]."———署名：".$row["yourname"]."<br/>";
			$n=$n+1;}
	}
} else {
    echo "目前还没有留言哦~";
}
 
mysqli_close($conn);


?>
</div>
<div class="footer">
  <p>感谢访问！</p>
</div>

</body>
</html>
