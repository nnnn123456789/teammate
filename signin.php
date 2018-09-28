<?php
	require_once("usermanage.php");
	$studentid = $_POST["studentid"];
	$phonenuber = $_POST["phone"];
	$jump = $_POST["jump"];
	$signflag = signin($studentid, $phonenuber);
	switch($signflag)
	{
		case 1:
			echo "用户不存在!";
			echo "<br><br>";
			echo "<a href='$jump'>返回</a>";
			break;
		case 2:
			echo "密码错误!";
			echo "<br><br>";
			echo "<a href='$jump'>返回</a>";
			break;
		case 0:
			echo "登录成功!";
			sleep(1);
			echo "<form id='form1' action='home.php' method='post'>
			若浏览器不能自动跳转, 请点击此处<input type='submit' value='跳转'></input>
			<input type='hidden' name='studentid' value='$studentid'></input>
			</form>
			<script>function load_submit(){document.form1.submit();}load_submit();</script>";
	}
?>
	