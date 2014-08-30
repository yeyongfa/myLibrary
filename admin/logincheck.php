<?php
require_once("config.php"); 
	
	if($_POST['log_username']){
		$username=$_POST['log_username'];
		$sql="select * from admin where username='$username'";
		$rs=mysql_query($sql);
		if(mysql_num_rows($rs)!=1){
			echo "<span id='log_nameError'>用户名错误</span>";
		}else{
			echo "";
		}
	};

	if($_POST['log_psw']){
		$username2=$_POST['log_username2'];
		$pwd=($_POST['log_psw']);
		$sql="select * from admin where username='$username2' and password='$pwd'";
		$rs=mysql_query($sql);
		if(mysql_num_rows($rs)!=1){
			echo "<span id='log_pswError'>密码错误</span>";
		}else{
			echo "";
		}
	};

	if($_POST['log_code']){
		$code=$_POST['log_code'];
		if($code!=$_SESSION["auth"]){
			echo "<span id='log_codeError'>验证码错误</span>";
		}else{
			echo "";
		}
	};

	if($_POST['log_submit']){
		$code=$_POST['log_code2'];
		if($code==$_SESSION["auth"]){
			$username3=$_POST['log_username3'];
			$pwd2=($_POST['log_psw2']);
			$sql="select * from admin where username='$username3' and password='$pwd2'";
			$rs=mysql_query($sql);
			if(mysql_num_rows($rs)==1){
				$_SESSION["pwd"]=$_POST["log_psw2"];
				$_SESSION["username"]=$_POST["log_username3"];
				echo "window.location='index.php'";				
			}else{
				echo "alert('用户名或密码错误！');window.location='login.php'";
				die();
			}		
		}
	};
 
	if($_GET['tj'] == 'out'){
	 session_destroy();
	 echo "<script language=javascript>window.location='login.php'</script>";
	};
?>