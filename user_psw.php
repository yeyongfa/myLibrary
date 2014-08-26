
<div class='tophead'>密码更改</div>
<?php
include("config.php");
$userid=$_SESSION["userid"];
$sql="select * from gdutuser where userid='$userid'";
$rs=mysql_query($sql);
$rows=mysql_fetch_assoc($rs);
?>

		
	    <div id="changeArea">
	    <span id='pswUserid'><?php echo $rows["userid"] ?></span>
	    <input name="password" type="password" id="password" onblur='originPsw();' class="password" placeholder="原密码"><p id='pswError'></p>
	    <input name="password1" type="password" id="password1" class="password" placeholder="新密码">
	    <input  name="password2" type="password" id="password2" class="password" onblur='check();' placeholder="确认新密码">
	    <input id="changePw" class="" onclick='changePsw();' type="submit" name="Submit" value="确定更改">
	  	</div>

