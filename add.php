<?php
	if((!isset($_POST)) || (!array_key_exists("studentid", $_POST)))
	{
		echo "<script>
		alert('���¼��');
		window.location = 'index.php';
		</script>";
	}
	else
	{
		echo "
		<script>alert('ǧ����������������ϵ��ʽ');</script>
		<form action='add2.php' method='POST'>
		<input type='hidden' name='studentid' value='" . $_POST["studentid"] . "'></input>
		<textarea rows='10' cols='50' name='text'>�����Ϣ<br>ע��ע��ʱ���ֻ��Ž�������֤��������չʾ����ҡ�</textarea>
		<input type='submit' value='���'</input>
		</form>";

	}

?>