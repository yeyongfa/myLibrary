window.onload=function(){
  leftNav();
  
}


function leftNav(){
    var nav=document.getElementById('navigation');
    var menu=nav.getElementsByTagName('a');
    var canvas=document.getElementById('content');  
    for(i=0,len=menu.length;i<len;i++){
      menu[i].onclick=function(){
        leftnav=new MyLibrary();
        leftnav.grabFileGet(this.href,canvas);
        return false;
      } 
    }
}

function selectShow(){
    var canvas=document.getElementById('checkshow');
    var seltype=encodeURI(document.getElementById('seltype').value);
    var coun=encodeURI(document.getElementById('coun').value);
    var data='seltype='+String(seltype)+'&coun='+String(coun);
        selShow=new MyLibrary();
        selShow.grabFilePost('select_show.php',canvas,data);
        return false;
}

function returnLBook(element){
    var canvas=document.getElementById('lentinfoWrap');
    returnBtn=new MyLibrary();
    returnBtn.grabFilePost('indexCheck.php',canvas,'bookid='+element+'&returnbook=return');
    return false;
}

function lentBook(element){
    var canvas=document.getElementById('checkshow');
    lentBtn=new MyLibrary();
    lentBtn.grabFilePost('indexCheck.php',canvas,'bookid='+element+'&lentbook=lent');
    return false;
}

function returnSBook(element){
    var canvas=document.getElementById('checkshow');
    returnBtn=new MyLibrary();
    returnBtn.grabFilePost('indexCheck.php',canvas,'bookid='+element+'&returnbook=return');
    return false;
}

function modifyUserI(){
    var canvas='';
    var category=encodeURI(document.getElementById('category').value);
    var userid=encodeURI(document.getElementById('userid').value);
    var name=encodeURI(document.getElementById('name').value);
    var sex=encodeURI(document.getElementById('sex').value);
    var unit=encodeURI(document.getElementById('unit').value);
    var address=encodeURI(document.getElementById('address').value);
    var tel=encodeURI(document.getElementById('tel').value);
    var email=encodeURI(document.getElementById('email').value);
    var uptime=encodeURI(document.getElementById('uptime').value);
    var data='category='+String(category)+'&userid='+String(userid)+
    '&name='+String(name)+'&sex='+String(sex)+'&unit='+String(unit)+
    '&address='+String(address)+'&tel='+String(tel)+'&email='+String(email)+
    '&uptime='+String(uptime)+'&aboutUser_submit=submit';
    modiUser=new MyLibrary();
    modiUser.grabFilePost('indexCheck.php',canvas,data);
    return false;

}


function check(){
  if(document.getElementById('password1').value != document.getElementById('password2').value) {
        document.getElementById('password1').focus();
        document.getElementById('password1').value = '';
        document.getElementById('password2').value = '';
        alert("新密码和确认密码不相同，请重新输入");
        return false;
  }
}

function changePsw(){
  var canvas=document.getElementById('changeArea');
  var password=encodeURI(document.getElementById('password').value);
  var password1=encodeURI(document.getElementById('password1').value);
  var password2=encodeURI(document.getElementById('password2').value);
  var data='password='+String(password)+
  '&password1='+String(password1)+'&password2='+String(password2);
  changeP=new MyLibrary();
  changeP.grabFilePost('indexcheck.php',canvas,data);
  return false;
}

function originPsw(){
  var canvas=document.getElementById('pswError');
  var password=encodeURI(document.getElementById('password').value);
  var data='password='+String(password);
  originP=new MyLibrary();
  originP.grabFilePost('indexcheck.php',canvas,data);
  return false;
}
