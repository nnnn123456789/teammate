<?php
	require_once("usermanage.php");
	$studentid = $_POST["studentid"];
	$phonenuber = $_POST["phone"];
	$jump = $_POST["jump"];
	$signflag = signin($studentid, $phonenuber);
	switch($signflag)
	{
		case 1:
			echo "�û�������!";
			echo "<br><br>";
			echo "<a href='$jump'>����</a>";
			break;
		case 2:
			echo "�������!";
			echo "<br><br>";
			echo "<a href='$jump'>����</a>";
			break;
		case 0:
			echo "��¼�ɹ�!";
			sleep(1);
			echo "<form id='form1' action='home.php' method='post'>
			������������Զ���ת, �����˴�<input type='submit' value='��ת'></input>
			<input type='hidden' name='studentid' value='$studentid'></input>
			</form>
			<script>function load_submit(){document.form1.submit();}load_submit();</script>";
	}
?>
	