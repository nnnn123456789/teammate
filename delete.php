<?php
	require_once("usermanage.php");
	if((!isset($_POST)) || (!array_key_exists("studentid", $_POST)))
	{
		echo "<script>
		alert('���¼��');
		window.location = 'index.php';
		</script>";
	}
	else
	{
		addomit($_POST["studentid"]);
		echo "<form action='home.php' method='POST'>
		ɾ���ɹ�<input type='hidden' name='studentid' value='" . $_POST['studentid'] . "'></input><br>
		�����˴�����<input type='submit' value='����'</input>
		</form>";
	}

?>