<?php
include("config.php");
require_once('user_check.php');

$sqluser="select * from gdutuser where userid=".$_SESSION[userid];
$rsuser=mysql_query($sqluser);
$rowsuser1=mysql_fetch_assoc($rsuser);
$arruser=mysql_query($sqluser,$conn);
$rowsuser=mysql_fetch_row($arruser);
?>
<!DOCTYPE html>
 <html>
	 <head>
	 	<title>我的图书馆</title>
	 	<meta http-equiv='Content-Type' content='texl/html;charset=utf-8'>
	 	<link rel="shortcut icon" href="images/favicon.ico">
	 	<link rel="stylesheet" type="text/css" href="css/reset.css">
	 	<link rel="stylesheet" type="text/css" href="css/index.css">
	 	<script type="text/javascript" src='js/ajax.js'></script>
	 	<script type="text/javascript" src='js/index.js'></script>
	 </head>
	 <body >
	 	<div id='header'>
	        <div id="headerlogo">
	            <img id="" src="images/logo.gif" />
	        </div>
	        <div id="headertext">
	            <span id="">图书检索系统</span>
	        </div>
	        <div id="headermenu">            
	            <div id='logoff'>
	            	<a href="login.php?tj=out" target="_parent">退出登录</a>
	            </div>
	            <span id='activeuser'>当前用户：&nbsp;<?php echo $rowsuser1["name"] ?></span>          
	      	</div>    
	    </div>
	    <div id='navLeft'>
	    	<ul id="navigation">
  				<div id='leftTitle'>菜单</div>
    			<li><span class="head">信息查询</span>
       				<ul class='nav'>
				        <li><a href="select.php" target="rightFrame">图书检索</a></li>
				        <li><a href="lentinfo.php" target="rightFrame">借阅情况</a></li>

      				</ul>
    			</li>
    			<li> <span class="head">个人设置</span>
      				<ul class='nav'>
				        <li><a href="userinfo.php" target="rightFrame">个人信息</a></li>
				        <li><a href="aboutUser.php" target="rightFrame">信息更改</a></li>
				        <li><a href="user_psw.php" target="rightFrame">密码更改</a></li>
      				</ul>
    			</li>
  			</ul>
	    </div>
	    <div id='content'>
	    	<div class='tophead'>个人信息</div>
		    <table class="" id='information'>
		      <tr><td class='infoleft'>身&nbsp;&nbsp;&nbsp;&nbsp;份</td><td class="inforight"> <?php echo $rowsuser[1] ?></td></tr>
		      <tr><td class='infoleft'>学号/工号</td><td class="inforight"> <?php echo $rowsuser[2] ?></td></tr>
		      <tr><td class='infoleft'>姓&nbsp;&nbsp;&nbsp;&nbsp;名</td><td class="inforight"> <?php echo $rowsuser[3] ?></td></tr>
		      <tr><td class='infoleft'>性&nbsp;&nbsp;&nbsp;&nbsp;别</td><td class="inforight"> <?php echo $rowsuser[4] ?></td></tr>
		      <tr><td class='infoleft'>所在学院</td><td class="inforight"> <?php echo $rowsuser[6] ?></td></tr>
		      <tr><td class='infoleft'>家庭住址</td><td class="inforight"> <?php echo $rowsuser[9] ?></td></tr>
		      <tr><td class='infoleft'>联系电话</td><td class="inforight"> <?php echo $rowsuser[8] ?></td></tr>
		      <tr><td class='infoleft'>电子邮箱</td><td class="inforight"> <?php echo $rowsuser[7] ?></td></tr>
			</table>
	    </div>
	 </body>
</html>