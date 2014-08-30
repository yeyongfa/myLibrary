<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>图书检索</title>
<link rel="stylesheet" type="text/css" href="css/login.css"/>
<script type="text/javascript" src='js/ajax.js'></script>
<script type="text/javascript" src='js/login.js'></script>
</head>
<body>

    <div id="loginArea">
       <h2 id="loginHeader">图书后台管理系统</h2>
        <div><input type="text" name="username" id="log_username"  class="loginInput" onblur='logNCheck();' placeholder="用户名">
        <span id='wrap_nameError'></span></div>
        <div><input type="password" name="pwd" id="log_psw" class="loginInput" onblur='logPCheck();' placeholder="密码">
        <span id='wrap_pswError'></span></div>
        <div><input name="code" type="text" id="log_code" onblur='logCCheck();' placeholder="验证码"/>    
        <img  class="img-rounded" src="verify.php" id='yanzm' />
        <span id='wrap_codeError'></span></div>    
        <input  id='log_button' type='submit' onclick='logACheck();' name="login" value="登录"/>
    </div> 
<div id="footer"></div>
</body>
</html>
