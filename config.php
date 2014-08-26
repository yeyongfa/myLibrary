<?php
	error_reporting(0);
	ob_start();
	session_start(); //开启缓存
	$conn=@mysql_connect('localhost','root','');  //配置mysql服务器信息"59.188.182.239","a0308181112","6793481"
	if($conn==null)
	{
		echo "很抱歉，数据库打开失败哟";
		exit; //数据库打开失败，退出
	}
	mysql_query("SET NAMES 'utf8'"); //设置数据库编码
	mysql_select_db("bookinfo", $conn); //a0308181112
?>
