<?php
	error_reporting(0);
	ob_start();
	session_start(); //开启缓存
	$conn=@mysql_connect('localhost','root','');  
	if($conn==null)
	{
		echo "很抱歉，数据库打开失败哟";
		exit; //数据库打开失败，退出
	}
	mysql_query("SET NAMES 'utf8'"); 
	mysql_select_db("bookinfo", $conn); 
?>
