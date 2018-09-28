<?php
	require_once("usermanage.php");
	if((!isset($_POST)) || (!array_key_exists("studentid", $_POST)))
	{
		echo "<script>
		alert('请登录！');
		window.location = 'index.php';
		</script>";
	}
	else
	{
		$ret = signup($_POST["studentid"], $_POST["phone"]);
		if(0 == $ret)
		{
			echo "<form action='home.php' method='POST'>
			注册成功<input type='hidden' name='studentid' value='" . $_POST["studentid"] . "'></input><br>
			单击此处返回<input type='submit' value='返回'</input>
			</form>";
		}
	}

?>