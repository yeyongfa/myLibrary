<?php
include("config.php");
?>
		<tr>
	        <td class='listtitle'>图书编号</td>
	        <td class='listtitle'>书名</td>
	        <td class='listtitle'>类别</td>
	        <td class='listtitle'>作者</td>
	        <td class='listtitle'>出版社</td>
	        <td class='listtitle'>出版日期</td>
	        <td class='listtitle'>馆藏</td>
	        <td class='listtitle'>可借</td>
	        <td class='listtitle operate'>操作</td>
      	</tr>
	<?php
		$pagesize=9;
		$sql = "select * from gdutbookss where ".$_POST[seltype]." like ('%".$_POST[coun]."%')";
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
		$sql="select * from gdutbookss where ".$_POST[seltype]." like ('%".$_POST[coun]."%') order by id desc limit $startno,$pagesize";
		$rs=mysql_query($sql);
	?>
    <?php
	while($rows=mysql_fetch_assoc($rs))
	{
	?>
		<tr id='selectRet'>
			<td  width="12%"><?php echo $rows["bookid"]?></td>
			<td  width="17%" ><?php echo $rows["name"]?></td>
			<td  width="11%" ><?php echo $rows["type"]?></td>
			<td  width="8%" ><?php echo $rows["author"]?></td>
			<td  width="20%"  ><?php echo $rows["press"]?></td>
			<td  width="10%"  ><?php echo $rows["pressdate"]?></td>
			<td  width="5%"  ><?php echo $rows["total"]?></td>
			<td  width="5%"  ><?php echo ($rows["total"]-$rows["lent"])?></td>
			<td  width="12%" class='operate'>
			<?php 
			  $rs2=mysql_query("select * from userlent where bookid='".$rows['bookid']."' and userid='".$_SESSION['userid']."'");
			  $rows2=mysql_fetch_assoc($rs2);
			  if($rows2['bookid']){
			  echo "<a onclick='returnSBook(this.id);'id='$rows[bookid]'><span class='returnButton'>归还</span></a>";
			  }else{
			  	if(($rows["total"]-$rows["lent"])==0){
				echo "<span class='noneButton'>已借完</span>";
				}else{
			  		echo "<a onclick='lentBook(this.id);'id='$rows[bookid]'><span class='lendButton'>借阅</span></a>";
			  }
			}?>
		  	</td>
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
