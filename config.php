<?php
	error_reporting(0);
	ob_start();
	session_start(); //��������
	$conn=@mysql_connect('localhost','root','');  
	if($conn==null)
	{
		echo "�ܱ�Ǹ�����ݿ��ʧ��Ӵ";
		exit; //���ݿ��ʧ�ܣ��˳�
	}
	mysql_query("SET NAMES 'utf8'"); 
	mysql_select_db("bookinfo", $conn); 
?>
