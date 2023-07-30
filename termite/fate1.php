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
		<a href="/~s2021319010214/fate.html" id="a_page">缘分测试</a>
		<a href="/~s2021319010214/town.html">我的家乡</a>
		<a href="/~s2021319010214/intro.html">个人规划</a>
		<a href="/~s2021319010214/homepage.html" id="a_home">回到首页</a>
	</div>
	<br/>

	<div class="card">
	<h2>缘分测试结果</h2><hr/><br/><br/>
<?php
	if(empty($_GET['n1']))
	{die();}

	$name1=$_GET['n1'];
	$name2=$_GET['n2'];

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
 
$sql = "INSERT INTO fate_test (name1, name2, time)
VALUES ($name1, $name2, now())";
 
if (mysqli_query($conn, $sql)) {
    echo "你们的缘分关系是：";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
 
mysqli_close($conn);


	$d=$name1-$name2;
	
	if($d<0){
		$d=-1*$d;
	}
	if(0==$d){
		print("亲密无间");
	}
	if(1==$d){
		print("永远和你在一起");
	}
	if(2==$d){
		print("水火不相容");
	}	
	if(3==$d){
		print("知心朋友");
	}
	if(4==$d){
		print("心上人");
	}	
	if(5==$d){
		print("帮你做事的人");
	}
	if(6==$d){
		print("帮你的人");
	}	
	if(7==$d){
		print("面和心不合");
	}
	if(8==$d){
		print("男女关系不正常");
	}
	if(9==$d){
		print("情投意合");
	}
	if(10==$d){
		print("关系马虎");
	}
	if(11==$d){
		print("尊敬你的人");
	}
	if(12==$d){
		print("爱你的人");
	}
	if(13==$d){
		print("适合你的");
	}
	if(14==$d){
		print("说你坏话的人");
	}
	if(15==$d){
		print("克星");
	}
	if(16==$d){
		print("救星 ");
	}
	if(17==$d){
		print("忠心的人");
	}
	if(18==$d){
		print("狼心狗肺的人");
	}
	if(19==$d){
		print("单相思");
	}
	if(20==$d){
		print("山盟海誓");
	}
	if(21==$d){
		print("情敌");
	}
	if(22==$d){
		print("服从你的人");
	}
	if(23==$d){
		print("永远在一起");
	}
	if(24==$d){
		print("伴终生");
	}
	if(25==$d){
		print("恨你又爱你");
	}	
	if(25<$d){
		print("你俩缘分超出计算范围");
	}
?>
<br/><br/><br/><br/><br/><br/><br/><br/><br/>
</div>
<div class="footer">
  <p>本页面小游戏结果仅供娱乐，请勿当真</p>
</div>

</body>
</html>