<?php
include("config.php");
// require_once('user_check.php');

$sqluser="select * from admin where username=".$_SESSION[username];
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
	            <span id="">图书后台管理系统</span>
	        </div>
	        <div id="headermenu">            
	            <div id='logoff'>
	            	<a href="login.php?tj=out" target="_parent">退出登录</a>
	            </div>
	            <span id='activeuser'>当前用户：&nbsp;<?php echo $rowsuser1["username"] ?></span>          
	      	</div>    
	    </div>
	    <div id='navLeft'>
	    	<ul id="navigation">
  				<div id='leftTitle'>菜单</div>
    			<li><span class="head">信息查询</span>
       				<ul class='nav'>
				        <li><a href="select.php" id='searchBook' >图书查询</a></li>
				        <li><a href="lentinfo.php" id='lentInfo' >借阅情况</a></li>
				        <li><a href="userselect2.php" >用户查询</a></li>
		    			<li><a href="count.php">图书统计</a></li>
      				</ul>
    			</li>
    			<li><span class='head'>图书管理</span>
    				<ul class='nav'>
    					<li><a href="list.php">书籍管理</a></li>
						<li><a href="add.php">新书入库</a></li>
    			</li>
    			<li><span class="head">用户管理</span>
      				<ul class='nav'>
				        <li><a href="userlist.php" >用户管理</a></li>
				        <li><a href="adduser.php" >用户录入</a></li>
      				</ul>
    			</li>
    			<li><span class='head'>系统设置</span>
    				<ul class='nav'>
    					<li><a href="admin_psw.php">密码修改</a></li>
    				</ul>
    			</li>
  			</ul>
	    </div>
	    <div id='content'>
<!-- 	    	<div class='tophead'>个人信息</div>
		    <table class="" id='information'>
		      <tr><td class='infoleft'>身&nbsp;&nbsp;&nbsp;&nbsp;份</td><td class="inforight"> <?php echo $rowsuser[1] ?></td></tr>
		      <tr><td class='infoleft'>学号/工号</td><td class="inforight"> <?php echo $rowsuser[2] ?></td></tr>
		      <tr><td class='infoleft'>姓&nbsp;&nbsp;&nbsp;&nbsp;名</td><td class="inforight"> <?php echo $rowsuser[3] ?></td></tr>
		      <tr><td class='infoleft'>性&nbsp;&nbsp;&nbsp;&nbsp;别</td><td class="inforight"> <?php echo $rowsuser[4] ?></td></tr>
		      <tr><td class='infoleft'>所在学院</td><td class="inforight"> <?php echo $rowsuser[6] ?></td></tr>
		      <tr><td class='infoleft'>家庭住址</td><td class="inforight"> <?php echo $rowsuser[9] ?></td></tr>
		      <tr><td class='infoleft'>联系电话</td><td class="inforight"> <?php echo $rowsuser[8] ?></td></tr>
		      <tr><td class='infoleft'>电子邮箱</td><td class="inforight"> <?php echo $rowsuser[7] ?></td></tr>
			</table> -->
	    </div>
	 </body>
</html>