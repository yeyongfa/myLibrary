<?php
include("config.php");
?>

	<div class='tophead'>书籍管理</div>
<?php
	$pagesize=10;
	$sql="select * from gdutbookss";
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
	$sql="select * from gdutbookss order by id desc limit $startno,$pagesize";
	$rs=mysql_query($sql);
?>
<table id="bool_list">
      <tr>
        <td class='listtitle'>图书编号</td>
        <td class='listtitle'>书名</td>
        <td class='listtitle'>类别</td>
        <td class='listtitle'>作者</td>
        <td class='listtitle'>出版社</td>
        <td class='listtitle'>出版日期</td>
        <td class='listtitle'>库存数量</td>
        <td class='listtitle'>被借数量</td>
        <td class='listtitle'>操作</td>
      </tr>
     <?php
	while($rows=mysql_fetch_assoc($rs))
	{
	?>
<tr align="center">
<td class="td_bg" width="10%"><?php echo $rows["bookid"]?></td>
<td class="td_bg" width="16%" height="26"><?php echo $rows["name"]?></td>
<td class="td_bg" width="9%" height="26"><?php echo $rows["type"]?></td>
<td class="td_bg" width="8%" height="26"><?php echo $rows["author"]?></td>
<td class="td_bg" width="19%" height="26" ><?php echo $rows["press"]?></td>
<td class="td_bg" width="10%" height="26" ><?php echo $rows["pressdate"]?></td>
<td class="td_bg" width="8%" height="26" ><?php echo $rows["total"]?></td>
<td class="td_bg" width="8%" height="26" ><?php echo $rows["lent"]?></td>
<td class="td_bg" width="12%">
<a href="update.php?id=<?php echo $rows[id] ?>" class="modifyButton">修改</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="del.php?id=<?php echo $rows[id] ?>" class="deleteButton">删除</a></td>
</tr>
	<?php
	}
?>
	    <tr>
      <th height="25" colspan="10" align="center" class="bg_tr">
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
