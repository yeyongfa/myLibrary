<?php
include("config.php");
?>
<div class='tophead'>图书统计</div>
<table class='table table-bordered table-hover'>
      <tr>
        <td class='listtitle'>图书类别</td>
        <td class='listtitle'>库存种类</td>
      </tr>
      <?php 
	  $sql="select type, count(*) from gdutbookss group by type";
	  $val=mysql_query($sql,$conn);
	  while($arr=mysql_fetch_row($val)){
	  echo "<tr height='30'>";
	  echo "<td align='center'>".$arr[0]."</td>";
	  echo "<td align='center'>本类目共有：&nbsp;".$arr[1]."&nbsp;&nbsp;&nbsp;种</td>";
	  echo "</tr>";
	  }
	  ?>
</table>
