   <h3 align="center">Registered Users</h3>
	<hr/>
	<table width="100%" id="gradient-style">
	<tr>
	<th width="28%">Name</th>
	<th width="24%">City</th>
	<th width="29%">State</th>
	<th width="19%">&nbsp;</th>
	</tr>
    <?php	
	$currentPage = $_SERVER["PHP_SELF"]."?m=".$_GET['m']."&p=".$_GET['p'] ;
	$maxRows_Recordset1 = 5;
	$pageNum_Recordset1 = 0;
	if (isset($_GET['pageNum_Recordset1']))
	{
	$pageNum_Recordset1 = $_GET['pageNum_Recordset1'];
	}
	
	$startRow_Recordset1 = $pageNum_Recordset1 * $maxRows_Recordset1;
	$query_Recordset1 = "select * from user where user_status='register' order by id desc ";
	$query_limit_Recordset1 = sprintf("%s LIMIT %d, %d", $query_Recordset1, $startRow_Recordset1, $maxRows_Recordset1);
	if (isset($_GET['totalRows_Recordset1'])) 
	{
	$totalRows_Recordset1 = $_GET['totalRows_Recordset1'];
	} 
	else 
	{
	$all_Recordset1 = mysql_query($query_Recordset1);
	$totalRows_Recordset1 = mysql_num_rows($all_Recordset1);
	$totalPages_Recordset1 = ceil($totalRows_Recordset1/$maxRows_Recordset1)-1;
	}
	?>
	<?php
	$result = mysql_query($query_limit_Recordset1);
	while($qdata = mysql_fetch_object($result))
	{ ?>
		<tr>

			<td><?PHP echo $qdata->first_name." ".$qdata->last_name;?></td>
			<td><?PHP echo $qdata->city;?></td>
            <td><?PHP echo $qdata->state;?></td>
             <td  align="center">
			 <a href="adminmain.php?m=3&p=33&id=<?php echo $qdata->id ; ?>">
			 <input type="button" class="detail_btn" 
			 name="DET" value=""/></a>
			 </td>
		</tr>

		<?php } ?>
  </table>
<br />
<TABLE border="0" cellpadding="0" cellspacing="0">
    <TR>
	<td>
	&nbsp;&nbsp;&nbsp;
	</td>
	<td >
	
	 <?php
	 if ($pageNum_Recordset1 > 0)
	 { // Show if not first page
	 ?>
	 <a href="<?php printf("%s&pageNum_Recordset1=%d%s", $currentPage, 0, $queryString_Recordset1); ?>">
	 <img src="img/First.gif" border="0" />
	 </a>
	  &nbsp;&nbsp;
    <?php
	 } // Show if not first page 
	 ?>    
	</td>
	
     <td>
	 <?php
	 if ($pageNum_Recordset1 > 0)
	  { // Show if not first page 
	  ?>
	  <a href="<?php printf("%s&pageNum_Recordset1=%d%s", $currentPage, max(0, $pageNum_Recordset1 - 1), 
	  $queryString_Recordset1); ?>">
	  <img src="img/Previous.gif" border="0" />
	  </a>
	  <?php
	  } // Show if not first page 
	  ?>    
	 </td>
	 <style type="text/css">
	 .style701 {

	color: #003399;

	font: bold normal 14px Calibri;
     }
	 </style>
	 
	 <td align="center" >
	 <div id="page-info">
	 <span class="style701">Record: </span><b><?php echo ($startRow_Recordset1 + 1) ?></b> to <b><?php echo min($startRow_Recordset1 + $maxRows_Recordset1, 
	 $totalRows_Recordset1) ?></b> of <b><?php echo $totalRows_Recordset1 ?></b>
	 </div>
	 </td>
     
	 <td>
	 <?php
	 //echo $pageNum_Recordset1 ;
	 //echo $totalPages_Recordset1 ;
	  if ($pageNum_Recordset1 < $totalPages_Recordset1)
	  { // Show if not last page 
	  ?>
	  <a href="<?php printf("%s&pageNum_Recordset1=%d%s", $currentPage, min($totalPages_Recordset1, 
	  $pageNum_Recordset1 + 1), $queryString_Recordset1); ?>">
	  <img src="img/Next.gif" border="0" />
	  </a>
	   &nbsp;&nbsp;
      <?php
	   } // Show if not last page 
	   else
	   {
	   ?>
	   &nbsp;
	   <?php
	   }
	   ?>    
      </td>
	   
       <td>
	   <?php if ($pageNum_Recordset1 < $totalPages_Recordset1)
	    { // Show if not last page 
		?>
		<a href="<?php printf("%s&pageNum_Recordset1=%d%s", $currentPage, 
		$totalPages_Recordset1, $queryString_Recordset1); ?>">
		<img src="img/Last.gif" border="0" />
		</a>
		<?php
		 } // Show if not last page 
		 ?>    
	  </td>
</TR>
</TABLE>