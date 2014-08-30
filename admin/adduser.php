<?php
include("config.php");
?>

<script language="JavaScript" Type="text/javascript">
<!--
function checkemail()
    {       
    
      // 检查email格式是否正确
   if (myform.email.value.charAt(0)=="." ||
      myform.email.value.charAt(0)=="@"||
      myform.email.value.indexOf('@', 0) == -1 ||
      myform.email.value.indexOf('.', 0) == -1 ||
      myform.email.value.lastIndexOf("@")==myform.email.value.length-1 ||
      myform.email.value.lastIndexOf(".")==myform.email.value.length-1)
    {
      alert("Email的格式不正确！");
      myform.email.select();
      return false;
    }
    return true;

    }

//--></script>

<?php
if($_POST[action]=="insert"){
$password=$_POST['password'];
$password=md5($password);
$sql = "insert into gdutuser (id,category,userid,name,sex,password,unit,email,tel,address,registerdate,uploadtime) values('','".$_POST[category]."','".$_POST[userid]."','".$_POST[name]."','".$_POST[sex]."','$password','".$_POST[unit]."','".$_POST[email]."','".$_POST[tel]."','".$_POST[address]."','".$_POST[uptime]."','".$_POST[uptime]."')";
$arr=mysql_query($sql,$conn);
if ($arr){
		echo "<script language=javascript>alert('添加成功！');window.location='adduser.php'</script>";
			}
			else{
				echo "<script>alert('添加失败');history.go(-1);</script>";
				}

		}
?>

  <div class='tophead'>用户录入</div>
  <div id="adduser">
    <table id="wrap_adduser">   
            <tr><td><label for='teacher'><input type="radio"  name="category" id="teacher" value="教师" >
                教师</label>
            <label for='student'><input type="radio" name="category" id="student" value="学生" >
                 学生</label></td></tr> 
          
          <tr><td><input name="userid" type="text" class="adduser"  id="userid" placeholder="学号&nbsp;/&nbsp;工号" /></td></tr>      
          <tr><td><input name="name" type="text" class="adduser"  id="name" placeholder="姓名" /></td></tr>
          <tr><td><input name="password" type="password" class="adduser" id="add_password" placeholder="初始密码" /></td></tr>

              <tr ><td id='adduser_sex'><label for='man'><input type="radio" name="sex" id="man" value="男" >
                      男</label>
              <label for='female'><input type="radio" name="sex" id="female" value="女" >
                      女</label></td></tr>

          <tr><td><input name="unit" type="text" class="adduser"  id="unit" placeholder="工作单位"/></td></tr>
          <tr><td><input name="address" type="text" class="adduser"  id="address" placeholder="家庭住址"/></td></tr>
          <tr><td><input name="tel" type="text" class="adduser"  id="tel" placeholder="联系电话" /></td></tr>
          <tr><td><input name="email" type="text" class="adduser"  id="email" placeholder="电子邮箱" /></td></tr>
          <tr><td><input name="uptime" type="text" class="adduser"  id="uptime" value="<?php echo date("Y-m-d")?>"/></td></tr>
          <tr><td><input type="submit" name="button" id="adduser_submit"  value="提交" /></td></tr>
    </table>
  </div>
</form>
