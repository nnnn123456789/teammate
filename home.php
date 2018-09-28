<?php
	require_once("datamanage.php");
	if((!isset($_POST)) || (!array_key_exists("studentid", $_POST)))
	{
		echo "<script>
		alert('请登录！');
		window.location = 'index.php';
		</script>";
	}
	else
	{
		echo "<form action='add.php' method='POST'>
		<input type='hidden' name='studentid' value='" . $_POST["studentid"] . "'></input>
		我想发布组队信息<input type='submit' value='添加'</input>
		</form>";
		
		echo "<form action='delete.php' method='POST'>
		<input type='hidden' name='studentid' value='" . $_POST["studentid"] . "'></input>
		我已经组好队了，要删除全部组队记录<input type='submit' value='删除'</input><br>
		<div style='color:red'>这个按钮没有确认提示，点击之后组队信息就被删除了。请慎重点击</div>
		</form>";
		
		echo "已有组队信息如下：";
		
		$arr = getall();
		echo "<table border='1'>";
		foreach($arr as $key => $value)
		{
			if($value != "")
				echo "<tr><td>" . $key . "</td><td width='400'>" . $value . "</td></tr>";
		}
		echo "</table>";
		
		
		echo "如有疑问请联系管理员";
	}

?>