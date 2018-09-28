<html>
<head>
<title>数学建模组队</title>
</head>
<body>

<form action="signin.php" method="post">
学号: <input type="text" name="studentid" > </input><br><br>
手机号: <input type="text" name="phone"> </input><br><br>
	<input type="hidden" name="jump" value="index.php"></input>
<input type="submit" value="登录"></input>
</form>
没有账号? <button onclick="location.href='submit.php'" >注册</button><br>
<?php
	require_once("datamanage.php");
	$arr = getall();
	echo "已有组队信息如下：";
	echo "<table border='1'>";
	foreach($arr as $key => $value)
	{
		if($value != "")
			echo "<tr><td>" . $key . "</td><td width='400'>" . $value . "</td></tr>";
	}
	echo "</table>";


	echo "如有疑问请联系管理员";
?>
</body>
</html>
