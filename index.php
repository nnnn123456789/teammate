<html>
<head>
<title>��ѧ��ģ���</title>
</head>
<body>

<form action="signin.php" method="post">
ѧ��: <input type="text" name="studentid" > </input><br><br>
�ֻ���: <input type="text" name="phone"> </input><br><br>
	<input type="hidden" name="jump" value="index.php"></input>
<input type="submit" value="��¼"></input>
</form>
û���˺�? <button onclick="location.href='submit.php'" >ע��</button><br>
<?php
	require_once("datamanage.php");
	$arr = getall();
	echo "���������Ϣ���£�";
	echo "<table border='1'>";
	foreach($arr as $key => $value)
	{
		if($value != "")
			echo "<tr><td>" . $key . "</td><td width='400'>" . $value . "</td></tr>";
	}
	echo "</table>";


	echo "������������ϵ����Ա";
?>
</body>
</html>
