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
		$studentid = $_POST["studentid"];
		$text = $_POST["text"];
		adddata($studentid,$text);
		echo "<form action='home.php' method='POST'>
		添加成功<input type='hidden' name='studentid' value='$studentid'></input><br>
		单击此处返回<input type='submit' value='返回'</input>
		</form>";

	}

?>