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
		echo "<form action='add.php' method='POST'>
		<input type='hidden' name='studentid' value='" . $_POST["studentid"] . "'></input>
		���뷢�������Ϣ<input type='submit' value='���'</input>
		</form>";
		
		echo "<form action='delete.php' method='POST'>
		<input type='hidden' name='studentid' value='" . $_POST["studentid"] . "'></input>
		���Ѿ���ö��ˣ�Ҫɾ��ȫ����Ӽ�¼<input type='submit' value='ɾ��'</input><br>
		<div style='color:red'>�����ťû��ȷ����ʾ�����֮�������Ϣ�ͱ�ɾ���ˡ������ص��</div>
		</form>";
		
		echo "���������Ϣ���£�";
		
		$arr = getall();
		echo "<table border='1'>";
		foreach($arr as $key => $value)
		{
			if($value != "")
				echo "<tr><td>" . $key . "</td><td width='400'>" . $value . "</td></tr>";
		}
		echo "</table>";
		
		
		echo "������������ϵ����Ա";
	}

?>