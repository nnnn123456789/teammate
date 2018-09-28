<?php
	if((!isset($_POST)) || (!array_key_exists("studentid", $_POST)))
	{
		echo "<script>
		alert('请登录！');
		window.location = 'index.php';
		</script>";
	}
	else
	{
		echo "
		<script>alert('千万别忘了留下你的联系方式');</script>
		<form action='add2.php' method='POST'>
		<input type='hidden' name='studentid' value='" . $_POST["studentid"] . "'></input>
		<textarea rows='10' cols='50' name='text'>组队信息<br>注意注册时的手机号仅用于验证，并不会展示给大家。</textarea>
		<input type='submit' value='添加'</input>
		</form>";

	}

?>