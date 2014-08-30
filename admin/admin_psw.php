<?php
include("config.php");
?>

<div class='tophead'>更改密码</div>
<?php
$password=$_SESSION["pwd"];
$sql="select * from admin where password='$password'";
$rs=mysql_query($sql);
$rows=mysql_fetch_assoc($rs);
if($_POST["Submit"])
	{
if($rows["password"]==$_POST["password"])
		{
		$password2=$_POST["password2"];
        $sql="update admin set password='$password2' where id=1";
		mysql_query($sql);
		echo "<script language=javascript>alert('修改成功,请重新进行登陆！');top.location='login.php'</script>";
		exit();
		}
		else
?>
		<?php	
		{
?>
		<script language="javascript">
			alert("原始密码不正确,请重新输入")
			location.href="admin_psw.php";
		</script>
		<?php
		}
		}
		?>
<form name="renpassword" method="post" action="">
    <div class="form-group">
    <p class='form-control-static centerpad10'><?php echo $rows["username"] ?></p>
    <input name="password" type="password" id="password" class="form-control centerpad10" placeholder="原密码">
    <input name="password1" type="password" id="password1" class="form-control centerpad10" placeholder="新密码">
    <input  name="password2" type="password" id="password2" class="form-control centerpad10" placeholder="确认密码">
    <input id="button2" class="btn btn-lg btn-default btn-block centerpad10" onClick="return check();" type="submit" name="Submit" value="确定更改">
  </div>
</form>

<script LANGUAGE="javascript">
<!--
function checkspace(checkstr) {
  var str = '';
  for(i = 0; i < checkstr.length; i++) {
    str = str + ' ';
  }
  return (str == checkstr);
}
function check()
{
  if(checkspace(document.renpassword.password.value)) {
	document.renpassword.password.focus();
    alert("原密码不能为空！");
	return false;
  }
  if(checkspace(document.renpassword.password1.value)) {
	document.renpassword.password1.focus();
    alert("新密码不能为空！");
	return false;
  }
    if(checkspace(document.renpassword.password2.value)) {
	document.renpassword.password2.focus();
    alert("确认密码不能为空！");
	return false;
  }
    if(document.renpassword.password1.value != document.renpassword.password2.value) {
	document.renpassword.password1.focus();
	document.renpassword.password1.value = '';
	document.renpassword.password2.value = '';
    alert("新密码和确认密码不相同，请重新输入");
	return false;
  }
	document.admininfo.submit();
  }
//-->
</script> 
