<?php
	require_once("datamanage.php");
	if((!isset($_POST)) || (!array_key_exists("studentid", $_POST)))
	{
		echo "<script>
		alert('���¼��');
		window.location = 'index.php';
		</script>";
	}
	else
	{
		$studentid = $_POST["studentid"];
		$text = $_POST["text"];
		adddata($studentid,$text);
		echo "<form action='home.php' method='POST'>
		��ӳɹ�<input type='hidden' name='studentid' value='$studentid'></input><br>
		�����˴�����<input type='submit' value='����'</input>
		</form>";

	}

?>