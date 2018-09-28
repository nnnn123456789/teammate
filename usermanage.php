<?php

// 0 �û�������
// non-zero �û��ֻ���
function getuserphone($studentid)
{
  $file = fopen("users.txt", "r");
  while(!feof($file))
  {
      $str = fgets($file);
      $array = explode('	', $str);
	  #var_dump( $array);
	  $id = $array[0];
      if($array[0] == $studentid)
      {
          fclose($file);
          return trim($array[1]);
      }
  }
  fclose($file);
  return 0;
}

function isuserexist($studentid)
{
  $file = fopen("users.txt", "r");
  while(!feof($file))
  {
    $str = fgets($file);
    $arr = explode('	', $str);
    if($arr[0] == $studentid)
    {
      fclose($file);
      return true;
    }
  }
  fclose($file);
  return false;
}

// 1 �û��Ѵ���
// 0 ����ע��
function signup($studentid, $phonenumber)
{
  if(0 != getuserphone($studentid))
  {
    return 1;
  }
  $file = fopen("users.txt", "a");
  $buffer = $studentid . '	' . $phonenumber . "\r\n" ;
  fwrite($file, $buffer);
  fclose($file);
  return 0;
}


// 1 �û�������
// 2 �������
// 0 ��¼����
function signin($studentid, $phonenumber)
{
  $pn = getuserphone($studentid);
  if(0 == $pn)
  {
    return 1;
  }
  else if($pn == $phonenumber)
  {
    return 0;
  }
  else
  {
    return 2;
  }
}

function addomit($studentid)
{
  $file = fopen("omit.txt", "a");
  $buffer = $studentid  . "\r\n" ;
  fwrite($file, $buffer);
  fclose($file);
}

function isomit($studentid)
{
  $file = fopen("omit.txt", "r");
   while(!feof($file))
  {
    $str = fgets($file);
    if(trim($str) == $studentid)
    {
      fclose($file);
      return true;
    }
  }
  return false;
}

?>
