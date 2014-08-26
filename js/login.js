window.onload=function(){
  document.getElementById('log_username').focus();
}

function logNCheck(){
  var canvas=document.getElementById('wrap_nameError');
  var log_name=encodeURI(document.getElementById('log_username').value);
  var data='log_username='+String(log_name);
  logName=new MyLibrary();
  logName.grabFilePost('logincheck.php',canvas,data);
  return false;
}

function logPCheck(){
  var canvas=document.getElementById('wrap_pswError');
  var log_name2=encodeURI(document.getElementById('log_username').value);
  var log_psw=encodeURI(document.getElementById('log_psw').value);
  var data='log_username2='+String(log_name2)+'&log_psw='+String(log_psw);
  logName=new MyLibrary();
  logName.grabFilePost('logincheck.php',canvas,data);
  return false;
}

function logCCheck(){
  var canvas=document.getElementById('wrap_codeError');
  var log_code=encodeURI(document.getElementById('log_code').value);
  var data='log_code='+String(log_code);
  logName=new MyLibrary();
  logName.grabFilePost('logincheck.php',canvas,data);
  return false;
}

function logACheck(){
	var canvas='';
	var log_name3=encodeURI(document.getElementById('log_username').value);
  	var log_psw2=encodeURI(document.getElementById('log_psw').value);
  	var log_code2=encodeURI(document.getElementById('log_code').value);
  	var data='log_submit=submit'+'&log_username3='+String(log_name3)+'&log_psw2='+String(log_psw2)+
  	'&log_code2='+String(log_code2);
  	logAChe=new MyLibrary();
  	logAChe.grabFilePost('logincheck.php',canvas,data);
  	return false;
}