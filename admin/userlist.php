<?php
include("config.php");
?>

	<div class='tophead'>用户管理</div>
<?php
	$pagesize=10;
	$sql="select * from gdutuser";
	$rs=mysql_query($sql);
	$recordcount=mysql_num_rows($rs);
	$pagecount=($recordcount-1)/$pagesize+1;
	$pagecount=(int)$pagecount;
	$pageno=$_GET["pageno"];
	if($pageno=="")
	{
		$pageno=1;
	}
	if($pageno<1)
	{
		$pageno=1;
	}
	if($pageno>$pagecount)
	{
		$pageno=$pagecount;
	}
	$startno=($pageno-1)*$pagesize;
	$sql="select * from gdutuser order by id desc limit $startno,$pagesize";
	$rs=mysql_query($sql);
?>
<table id="user_list">
      <tr>
        <td class='listtitle'>身份</td>
        <td class='listtitle'>学号/工号</td>
        <td class='listtitle'>姓名</td>
        <td class='listtitle'>联系电话</td>
        <td class='listtitle'>性别</td>
        <td class='listtitle'>工作单位</td>
        <td class='listtitle'>家庭住址</td>
        <td class='listtitle'>电子邮箱</td>
        <td class='listtitle'>操作</td>
      </tr>
     <?php
	while($rows=mysql_fetch_assoc($rs))
	{
	?>
<tr align="center">
<td class="td_bg" width="6%"><?php echo $rows["category"]?></td>
<td class="td_bg" width="12%" height="26"><?php echo $rows["userid"]?></td>
<td class="td_bg" width="10%" height="26"><?php echo $rows["name"]?></td>
<td class="td_bg" width="12%" height="26"><?php echo $rows["tel"]?></td>
<td class="td_bg" width="6%" height="26"><?php echo $rows["sex"]?></td>
<td class="td_bg" width="12%" height="26"><?php echo $rows["unit"]?></td>
<td class="td_bg" width="17%" height="26" ><?php echo $rows["address"]?></td>
<td class="td_bg" width="13%" height="26" ><?php echo $rows["email"]?></td>
<td class="td_bg" width="12%">
<a href="userupdate.php?id=<?php echo $rows[id] ?>" class="modifyButton">修改</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="userdel.php?id=<?php echo $rows[id] ?>" class="deleteButton">删除</a></td>
</tr>
	<?php
	}
?>
	    <tr>
      <th height="25" colspan="12" align="center" class="bg_tr">
    <?php
	if($pageno==1)
	{
	?>
	<span class='bottomfont marleft70'>首页</span> | <span class='bottomfont'>上一页</span> | <a href="?pageno=<?php echo $pageno+1?>&id=<?php echo $id?>"><span class='bottomfont'>下一页</span></a> | <a href="?pageno=<?php echo $pagecount?>&id=<?php echo $id?>"><span class='bottomfont'>末页</span></a>
	<?php
	}
	else if($pageno==$pagecount)
	{
	?>
	<a href="?pageno=1&id=<?php echo $id?>"><span class='bottomfont marleft70'>首页</span></a> | <a href="?pageno=<?php echo $pageno-1?>&id=<?php echo $id?>"><span class='bottomfont'>上一页</span></a> | <span class='bottomfont'>下一页</span> | <span class='bottomfont'>末页
	</span><?php
	}
	else
	{
	?>
	<a href="?pageno=1&id=<?php echo $id?>"><span class='bottomfont marleft70'>首页</span></a> | <a href="?pageno=<?php echo $pageno-1?>&id=<?php echo $id?>"><span class='bottomfont'>上一页</span></a> | <a href="?pageno=<?php echo $pageno+1?>&id=<?php echo $id?>" class="forumRowHighlight"><span class='bottomfont'>下一页</span></a> | <a href="?pageno=<?php echo $pagecount?>&id=<?php echo $id?>"><span class='bottomfont'>末页</span></a>
	<?php
	}
?>
	&nbsp;页次：<?php echo $pageno ?>/<?php echo $pagecount ?>&nbsp;&nbsp;页<span class='bottomfont'>&nbsp;共有&nbsp;&nbsp;<?php echo $recordcount?>&nbsp;&nbsp;条信息</span> </th>
	  </tr>
</table>
