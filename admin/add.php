<?php
include("../config.php");
?>

<script language="JavaScript" Type="text/javascript">
<!--
function myform_Validator(theForm)
{

  if (theForm.name.value == "")
  {
    alert("请输入书名");
    theForm.name.focus();
    return (false);
  }
    if (theForm.bookid.value == "")
  {
    alert("请输入图书编号");
    theForm.price.focus();
    return (false);
  }
    if (theForm.type.value == "")
  {
    alert("请输入图书所属类别");
    theForm.type.focus();
    return (false);
  }
 return (true);
 }

//--></script>
</head>
<?php
if($_POST[action]=="insert"){
$sql = "insert into gdutbooks (id,bookid,name,type,author,press,pressdate,price,pages,keywords,total,lent,uploadtime) values('','".$_POST[bookid]."','".$_POST[name]."','".$_POST[type]."','".$_POST[author]."','".$_POST[press]."','".$_POST[pressdate]."','".$_POST[price]."','".$_POST[pages]."','".$_POST[keywords]."','".$_POST[total]."','0','".$_POST[uptime]."')";
$arr=mysql_query($sql,$conn);
if ($arr){
		echo "<script language=javascript>alert('添加成功！');window.location='add.php'</script>";
			}
			else{
				echo "<script>alert('添加失败');history.go(-1);</script>";
				}

		}
?>

<div class='tophead'>新书入库</div>
  <div id="addBook">
    <table id="wrap_addBook">
        <tr><td><input name="bookid" type="text" class="addbook"  id="bookid" placeholder="编号" /></td></tr>
        <tr><td><input name="name" type="text" class="addbook"  id="name" placeholder="书名" /></td></tr>
        <tr><td><input name="type" type="text" class="addbook"  id="type" placeholder="所属类别" /></td></tr>
        <tr><td><input name="author" type="text" class="addbook"  id="author" placeholder="作者" /></td></tr>
        <tr><td><input name="press" type="text" class="addbook"  id="press" placeholder="出版社" /></td></tr>
        <tr><td><input name="pressdate" type="text" class="addbook"  id="pressdate" placeholder="出版日期 年-月"/></td></tr>
        <tr><td><input name="price" type="text" class="addbook"  id="price" placeholder="价格 元"/></td></tr>
        <tr><td><input name="pages" type="text" class="addbook"  id="pages" placeholder="页码 页"/></td></tr>
        <tr><td><input name="keywords" type="text" class="addbook"  id="keywords" placeholder="关键词 空格隔开" /></td></tr>
        <tr><td><input name="total" type="text" class="addbook"  id="total" placeholder="入库数量" /></td></tr>
        <tr><td><input name="uptime" type="text" class="addbook"  id="uptime" value="<?php echo date("Y-m-d")?>"/></td></tr>
        <tr><td><input type="submit" name="button" id="addbook_submit"  value="提交" /></td></tr>
    </table>
  </div>
</form>
