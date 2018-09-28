<?php
require_once("usermanage.php");
function searchuser($studentid)
{
  $ret = Array();
  $file = fopen("data.txt", "r");
  while(!feof($file))
  {
    $str = fgets($file);
    $arr = explode('	', $str);
    if($arr[0] == $studentid)
    {
      $ret[] = str_replace("<br>", "\n", $arr[1]);
    }
  }
  fclose($file);
  return $ret;
}

function getall()
{
	$ret = array();
	$file = fopen("data.txt", "r");
    while(!feof($file))
    {
        $str = fgets($file);
		if(trim($str) == "")
			continue;
        $arr = explode('	', $str);
		if(isomit($arr[0])) continue;
		$ret[] = $arr[1];
    }
    fclose($file);
    return $ret;
}
function adddata($studentid, $text)
{
  $t = str_replace("\r\n","<br>",$text);
  $file = fopen("data.txt", "a");
  $buffer = $studentid . "\t" . $t . "\r\n";
  fwrite($file, $buffer);
  fclose($file);
}


?>