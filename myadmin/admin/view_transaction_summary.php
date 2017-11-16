

 <h3 align="center">Transaction List</h3>

	<table width="100%" id="gradient-style">

		<tr>

			<th width="14%">Purchase Id</th>

		        <th width="16%">Total Qty </th>
                <th width="12%">Total Paid </th>
			    <th width="14%" align="center">Status</th>
				<th width="18%">Date</th>
				<th width="14%">Pay Mode</th>
				<th>&nbsp;</th>
		</tr>
         <?php	
	$currentPage = $_SERVER["PHP_SELF"]."?m=".$_GET['m']."&p=".$_GET['p']."&id=".$_GET['id'] ;
	$maxRows_Recordset1 = 5;
	$pageNum_Recordset1 = 0;
	if (isset($_GET['pageNum_Recordset1']))
	{
	$pageNum_Recordset1 = $_GET['pageNum_Recordset1'];
	}
	
	$startRow_Recordset1 = $pageNum_Recordset1 * $maxRows_Recordset1;
	$query_Recordset1 = "select * from purchase_summary where id='".$_GET['id']."' order by pur_date desc ";
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
           <form action="" method="post" name="ftp" enctype="multipart/form-data">
			<td><?PHP echo $qdata->purchase_id;?></td>

			<td><?PHP echo $qdata->total_qty;?></td>
			<td><?PHP echo $qdata->total_price;?></td>

			<td>
			<select name="opt" id="opt">
			<option value="delivered" <?PHP if($qdata->purchase_status=="delivered"){ echo "selected" ;} ?> >
			delivered</option>
			<option value="undelivered" <?PHP if($qdata->purchase_status=="undelivered"){ echo "selected" ;} ?> >
			undelivered</option>
			</select></td>
			<td><?PHP echo $qdata->pur_date;?></td>
			<td><?PHP echo $qdata->payment_mode;?></td>
           <td width="12%">
		   <input name="polu" id="polu" type="hidden" value="<?PHP echo $qdata->purchase_id;?>" />
		   <input name="stp" type="submit" value="" class="update_btn" />
		   <?php
		   if(isset($_POST['stp']))
		   {
					//check purchase status
					$mysql="select * from purchase_summary where purchase_id='".$_POST['polu']."'";
					$ry=mysql_query($mysql);
					 while($Ry=mysql_fetch_array($ry))
					 {
					   $psta=$Ry['purchase_status'];
					 }			
		   
		   if($psta=='delivered' && $_POST['opt']=='undelivered')
		   {
		    //increase product from product table
						  $msql="select * from purchase_details where purchase_id='".$_POST['polu']."'";
						  $r=mysql_query($msql);
	                      while($R=mysql_fetch_array($r))
		                  {
			                 $pd=$R['product_id'];
							 $sq=$R['quantity'];
							 
							 $mmsql="select * from product where product_id='".$pd."'";
							  $rr=mysql_query($mmsql);
							  while($RR=mysql_fetch_array($rr))
		                      {
							    $tq=$RR['qty']+$sq;
							    $nxt="update product set qty='".$tq."' where product_id='".$pd."'";
								$pst=mysql_query($nxt);
							  }
							 
			              }
						  
						  //update status
			$poet="update purchase_summary set purchase_status='".$_POST['opt']."' where purchase_id='".$_POST['polu']."'";
			mysql_query($poet,$connection);  
			echo '<script>window.location="adminmain.php?m='.$_GET['m'].'&p='.$_GET['p'].'&id='.$_GET['id'].'"</script>';
		   }
		   
		   else if($psta=='undelivered' && $_POST['opt']=='delivered')
		   {
		    //decrease product from product table
						  $msql="select * from purchase_details where purchase_id='".$_POST['polu']."'";
						  $r=mysql_query($msql);
	                      while($R=mysql_fetch_array($r))
		                  {
			                 $pd=$R['product_id'];
							 $sq=$R['quantity'];
							 
							 $mmsql="select * from product where product_id='".$pd."'";
							  $rr=mysql_query($mmsql);
							  while($RR=mysql_fetch_array($rr))
		                      {
							    $tq=$RR['qty']-$sq;
							    $nxt="update product set qty='".$tq."' where product_id='".$pd."'";
								$pst=mysql_query($nxt);
							  }
							 
			              }
						  
						  //update status
		   $poet="update purchase_summary set purchase_status='".$_POST['opt']."' where purchase_id='".$_POST['polu']."'";
			mysql_query($poet,$connection);  
			echo '<script>window.location="adminmain.php?m='.$_GET['m'].'&p='.$_GET['p'].'&id='.$_GET['id'].'"</script>';
		   }
		   }
		   ?></td>
		  </form>
		</tr>

		<?php } ?>
  </table>
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

<br /><br />
<?php
echo "<font color='red'>".$_SESSION['delivery_st_change']."</font>";
$_SESSION['delivery_st_change']="";

?>