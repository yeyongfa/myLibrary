<?php
include("config.php");

	$pagesize=10;
	$sql='select * from userlent';
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
	$sql1="select * from userlent";
	$rs1=mysql_query($sql1);
	
	
?>
<div class='tophead'>借阅情况</div>
<table id='lentinfoWrap'>
      <tr>
      <td class='lentinfoHead'>图书编号</td>
      <td class='lentinfoHead'>书名</td>
      <td class='lentinfoHead'>类别</td>
      <td class='lentinfoHead'>作者</td>
      <td class='lentinfoHead'>出版社</td>
      <td class='lentinfoHead'>借书日期</td>
      <td class='lentinfoHead'>借书者</td>
      <td class='lentinfoHead'>学号/工号</td>
      </tr>
     <?php
	while($rows1=mysql_fetch_assoc($rs1))
	{	
	?>
		<tr align="center">
		<td  width="10%"><?php echo $rows1["bookid"]?></td>
		<td  width="14%" height="26"><?php echo $rows1["bookname"]?></td>
		<td  width="11%" height="26"><?php echo $rows1["type"]?></td>
		<td  width="10%" height="26"><?php echo $rows1["author"]?></td>
		<td  width="20%" height="26" ><?php echo $rows1["press"]?></td>
		<td  width="14%" height="26" ><?php echo $rows1["lentdate"]?></td>
		<td  width="8%" height="26" ><?php echo $rows1["username"]?></td>
		<td  width="13%" height="26" ><?php echo $rows1["userid"]?></td>
		</tr>
	<?php
	}
?>
	<tr>
		<th height="25" colspan="10" align="center" class='page_bottom'>
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
			&nbsp;页次：<?php echo $pageno ?>/<?php echo $pagecount ?>&nbsp;&nbsp;页<span class='bottomfont'>&nbsp;共有&nbsp;&nbsp;<?php echo $recordcount?>&nbsp;&nbsp;条信息</span>
		</th>
	 </tr>
</table>
