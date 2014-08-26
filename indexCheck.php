<?php
include("config.php"); 

	if($_POST['aboutUser_submit']){
	   $sqlstr = "update gdutuser set category= '".$_POST[category]."', userid = '".$_POST[userid]."', name = '".$_POST[name]."',sex = '".$_POST[sex]."',unit= '".$_POST[unit]."',address= '".$_POST[address]."',tel= '".$_POST[tel]."', email = '".$_POST[email]."',uploadtime = '".$_POST[uptime]."' where userid = ".$_SESSION[userid];
	   $arry=mysql_query($sqlstr,$conn);
	    if ($arry){
			echo "alert('信息更改成功');document.getElementById('userInfo').onclick();";
		}else{
		echo "alert('信息更改失败');document.getElementById('userInfo').onclick();";
		}
	};

	if($_POST['lentbook']){
		$bookid=$_POST['bookid'];
		if ($bookid==""){
			echo "<script language=javascript>alert('编号不正确');window.location='index.php'</script>";
			exit();
		}
		else{	
			if($_SESSION['userid']==""){
				echo "<script language=javascript>alert('您还没有登陆');window.location='login.php'</script>";
				exit();
			}else{
				$now = date("Y-m-d");
				$bookid=$_POST['bookid'];
				$userid=$_SESSION['userid'];
				$sql1 = "select * from gdutbooks where bookid='".$bookid."'";
				$sql2 = "select * from gdutuser where userid='".$userid."'";
			    $rs1=mysql_query($sql1);
			    $rs2=mysql_query($sql2);
				$rows1=mysql_fetch_assoc($rs1);
				$rows2=mysql_fetch_assoc($rs2);
				$bookname=$rows1['name'];
				$username=$rows2['name'];
				$type=$rows1['type'];
				$author=$rows1['author'];
				$press=$rows1['press'];
				$lendsql="insert into userlent(id,bookid, bookname,type,author,press, userid,username, lentdate) values(NULL,'$bookid','$bookname','$type','$author','$press','$userid','$username','$now')";
				mysql_query($lendsql,$conn) or die ("操作失败：".mysql_error());
				mysql_query("update gdutbooks set lent=lent+1 where bookid='$bookid'",$conn);
				echo "alert('借阅成功');document.getElementById('lentInfo').onclick();";
			}
		}
	};

	if($_POST['returnbook']){
			//如果没有登录，退出
		if ($_SESSION['userid']==""){
				echo "<script language=javascript>alert('您还没有登陆');top.location='login.php'</script>";
				exit();
		}
		$bookid=$_POST[bookid];	
		//构建sql语句还书
		//在lend表中删除该借书记录
		$returnsql="delete from userlent where bookid='$bookid' and userid=".$_SESSION['userid'];
		mysql_query($returnsql,$conn) or die ("删除借书记录失败：".mysql_error());
		//在book表中增加一本现存书数量
		$booksql="update gdutbooks set lent=lent-1 where bookid='$bookid'";
		mysql_query($booksql,$conn) or die ("更新已借数量失败：".mysql_error());

		echo "alert('还书成功');document.getElementById('lentInfo').onclick();";
	};

$userid=$_SESSION["userid"];
$sql="select * from gdutuser where userid='$userid'";
$rs=mysql_query($sql);
$rows=mysql_fetch_assoc($rs);

	if($_POST["passwordf"]){
			if($rows["password"]==md5($_POST["passwordo"])){
				$password2=md5($_POST["passwords"]);
		        $sql="update gdutuser set password='$password2' where userid='$userid'";
				mysql_query($sql);
				echo "alert('密码修改成功');document.getElementById('userPsw').onclick();";	
			}
			else{
			 echo "alert('密码修改失败');document.getElementById('userPsw').onclick();";
			}
	};

	if($_POST["password"]){
			if($rows["password"]!=md5($_POST["password"])){
				echo '原始密码不正确';
			}else{
				echo '';
			}
	};


?>