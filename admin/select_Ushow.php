<?php
include("config.php");
?>
		<tr>
	        <td class='listtitle'>身份</td>
	        <td class='listtitle'>学号/工号</td>
	        <td class='listtitle'>姓名</td>
	        <td class='listtitle'>联系电话</td>
	        <td class='listtitle'>性别</td>
	        <td class='listtitle'>工作单位</td>
	        <td class='listtitle'>家庭住址</td>
	        <td class='listtitle'>电子邮箱</td>
	        <td class='listtitle operate'>操作</td>
      	</tr>
	<?php
		$pagesize=9;
		$sql = "select * from gdutuser where ".$_POST[seltype]." like ('%".$_POST[coun]."%')";
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
		$sql="select * from gdutuser where ".$_POST[seltype]." like ('%".$_POST[coun]."%') order by id desc limit $startno,$pagesize";
		$rs=mysql_query($sql);
	?>
    <?php
	while($rows=mysql_fetch_assoc($rs))
	{
	?>
		<tr id='selectRet'>
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
	    <th height="25" colspan="10" >
	    <?php
		if($pageno==1)
		{
		?>
		<span class=''>首页</span> |<span class=''> 上一页</span> | <a href="?pageno=<?php echo $pageno+1?>"><span class=''>下一页</span></a> | <a href="?pageno=<?php echo $_POST[seltype]?>"><span class=''>末页</span></a>
		<?php
		}
		else if($pageno==$pagecount)
		{
		?>
		<a href="?pageno=1"><span class=''>首页</span></a> | <a href="?pageno=<?php echo $pageno-1?>"><span class=''>上一页</span></a> | <span class=''>下一页</span> | <span class=''>末页</span>
		<?php
		}
		else
		{
		?>
		<a href="?pageno=1"><span class=' marleft70'>首页</span></a> | <a href="?pageno=<?php echo $pageno-1?>"><span class=''>上一页</span></a> | <a href="?pageno=<?php echo $pageno+1?>" class="forumRowHighlight"><span class=''>下一页</span></a> | <a href="?pageno=<?php echo $pagecount?>&id=<?php echo $id?>"><span class=''>末页</span></a>
		<?php
		}
		?>
		<span class=''>&nbsp;页次：<?php echo $pageno ?>/<?php echo $pagecount ?>&nbsp;&nbsp;页</span><span class=''>&nbsp;共有&nbsp;<?php echo $recordcount?>&nbsp;条信息</span> 
	    </th>
	</tr>
