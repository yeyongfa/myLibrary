<?php
	require_once("config.php");
	if($_SESSION["username"]=="")
	{
 	echo "<script language=javascript>top.location='login.php'</script>";
	}
?>