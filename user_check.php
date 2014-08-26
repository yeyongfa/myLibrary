<?php
	require_once("config.php");
	if($_SESSION["userid"]=="")
	{
 	echo "<script language=javascript>top.location='login.php'</script>";
	}
?>