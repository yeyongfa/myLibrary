<?php
include("config.php");

    $sql="select * from gdutuser where userid=".$_SESSION[userid];
    $arr=mysql_query($sql,$conn);
    $rows=mysql_fetch_row($arr);
?>

<div class='tophead'>信息更改</div>
    <div id="modiUserInfo">
          <table id="wrap_userInfo">
            <tr><td><input name="category" type="text" class='about_userInfo'  id="category" value="<?php echo $rows[1] ?>" /></td></tr>  
            <tr><td><input name="userid" type="text" class='about_userInfo'  id="userid" value="<?php echo $rows[2] ?>" /></td></tr>      
            <tr><td><input name="name" type="text" class='about_userInfo'  id="name" value="<?php echo $rows[3] ?>" /></td></tr>
            <tr><td><input name="sex" type="text" class='about_userInfo'  id="sex" value="<?php echo $rows[4] ?>" /></td></tr>           
            <tr><td><input name="unit" type="text" class='about_userInfo'  id="unit" value="<?php echo $rows[6] ?>" /></td></tr>
            <tr><td><input name="address" type="text" class='about_userInfo'  id="address" value="<?php echo $rows[9] ?>" /></td></tr>
            <tr><td><input name="tel" type="text" class='about_userInfo'  id="tel" value="<?php echo $rows[8] ?>" /></td></tr>
            <tr><td><input name="email" type="text" class='about_userInfo'  id="email" value="<?php echo $rows[7] ?>" /></td></tr>
            <tr><td><input name="uptime" type="text" class='about_userInfo'  id="uptime" value="<?php echo date("Y-m-d")?>" /></td></tr>
            <tr><td><input type="submit" name="button" id="aboutUser_submit" onclick='modifyUserI();'  value="提交" /></td></tr>
          </table>
    </div>