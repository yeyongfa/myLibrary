<?php
	error_reporting(0);
	ob_start();
	session_start(); //��������
	$conn=@mysql_connect('localhost','root','');  //����mysql��������Ϣ"59.188.182.239","a0308181112","6793481"
	if($conn==null)
	{
		echo "�ܱ�Ǹ�����ݿ��ʧ��Ӵ";
		exit; //���ݿ��ʧ�ܣ��˳�
	}
	mysql_query("SET NAMES 'utf8'"); //�������ݿ����
	mysql_select_db("bookinfo", $conn); //a0308181112
?>
