<?php
include("config.php");
?>
<?php
$sql="select * from gdutuser where userid=".$_SESSION[userid];
$arr=mysql_query($sql,$conn);
$rows=mysql_fetch_row($arr);
?>
<meta http-equiv="Content-Type" content="text/html; charset=gbk" />
	<div class='tophead'>个人信息</div>
	<table class="" id='information'>
		      <tr><td class='infoleft'>身&nbsp;&nbsp;&nbsp;&nbsp;份</td><td class="inforight"> <?php echo $rows[1] ?></td></tr>
		      <tr><td class='infoleft'>学号/工号</td><td class="inforight"> <?php echo $rows[2] ?></td></tr>
		      <tr><td class='infoleft'>姓&nbsp;&nbsp;&nbsp;&nbsp;名</td><td class="inforight"> <?php echo $rows[3] ?></td></tr>
		      <tr><td class='infoleft'>性&nbsp;&nbsp;&nbsp;&nbsp;别</td><td class="inforight"> <?php echo $rows[4] ?></td></tr>
		      <tr><td class='infoleft'>所在学院</td><td class="inforight"> <?php echo $rows[6] ?></td></tr>
		      <tr><td class='infoleft'>家庭住址</td><td class="inforight"> <?php echo $rows[9] ?></td></tr>
		      <tr><td class='infoleft'>联系电话</td><td class="inforight"> <?php echo $rows[8] ?></td></tr>
		      <tr><td class='infoleft'>电子邮箱</td><td class="inforight"> <?php echo $rows[7] ?></td></tr>
	</table>
