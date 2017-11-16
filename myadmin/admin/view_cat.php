<?php
$code=$_POST['id'];
if($_POST['ss']!='')
{
	$dis='';
	$new_dis="none";
}
else{
	$dis="none";
	$new_dis='';
}
if($code!="")
{
	$dis='';
	$new_dis="none";
	$sql = "select * from category where cat_id=".$code;
	$query_result=mysql_query($sql);
	$res = mysql_fetch_object($query_result);
	$mode="edit";
}
else
{
	$mode="add";
}
$mode1=$_POST['mode'];
if($mode1!=''){
	if(isset($_POST['save']) && $_POST['mode']=="add")
	{
	if(($_POST['cat_name']==""))
		{
		
		?>
	  <SCRIPT LANGUAGE="JAVASCRIPT"> 
		alert("Enter Category name !"); 
		</SCRIPT>
		<?php
		
		}
		else
		{
		$sql="insert into category (cat_id,cat_name) 
			values(null,'".$_POST['cat_name']."')";
		
		mysql_query($sql,$connection) or die("error");
		
		$currentPage = "adminmain.php?m=".$_GET['m']."&p=".$_GET['p']."&pageNum_Recordset1=".$_GET['pageNum_Recordset1'] ;
		echo "<script>window.location='$currentPage'</script>";
		}
	}
	if(isset($_POST['save']) && $_POST['mode']=='edit')
	{
		$id=$_POST['id1'];
		
		if(($_POST['cat_name']==""))
		{
		?>
		<SCRIPT LANGUAGE="JAVASCRIPT"> 
		alert("Enter Category name !"); 
		</SCRIPT>
		<?php
		}
		else
		{
		$sql="update  category
			set cat_name='".$_POST['cat_name']."'
			where cat_id=".$id;
		
		mysql_query($sql,$connection);
		$currentPage = "adminmain.php?m=".$_GET['m']."&p=".$_GET['p']."&pageNum_Recordset1=".$_GET['pageNum_Recordset1'] ;
		echo "<script>window.location='$currentPage'</script>";
		
		}
			
	}
	if(isset($_POST['delete']))
	{
		$id=$_POST['id1'];
		$sql="delete from category where cat_id=".$id;
		mysql_query($sql,$connection);
		$currentPage = "adminmain.php?m=".$_GET['m']."&p=".$_GET['p']."&pageNum_Recordset1=".$_GET['pageNum_Recordset1'] ;
		echo "<script>window.location='$currentPage'</script>";
			
	}
}
?>
   <div id="addeddit2" style="display:<?PHP echo $new_dis;?> ">
   
	<h3 align="center">CATEGORY</h3>
	<table width="100%" id="gradient-style">
		<tr>
			<!--<th width="35%">Category Id </th>-->
			<th width="65%">Category </th>
			<?php /*?><th width="25%">
			<form action="" method="post"><input type="hidden" name="ss" value="add"/>
			<input type="submit" name="Add" value="" class="add_btn"/></form>
			</th><?php */?>
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
	$query_Recordset1 = "select * from category order by cat_name  ";
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
	{
	?>
	<tr>
	<?php /*?><td><?PHP echo $qdata->cat_id;?></td><?php */?>
	<td><?PHP echo $qdata->cat_name;?></td>
	<?php /*?><td align="center">
	<form action="" method="post">
	<input type="hidden" value="<?PHP echo $qdata->cat_id;?>" name="id">
	 <input name="Update" type="submit" value="" class="update_btn"/>
	</form>
	</td><?php */?>
	</tr>
	<?php 
	} 
	?>
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
</div>	
	
	<div id="addeddit1" style="display:<?PHP echo $dis;?> ">
	<form id="formID" class="formular" method="post" action="">
	<p align="center"><strong><?php echo strtoupper($mode)." CATYGORY" ; ?></strong></p>
	<table width="100%" id="hor-minimalist-b">
	<tr>
	<td width="32%">Category
	  <input type="hidden"  name="mode" value="<?PHP echo $mode;?>"/>
	<input type="hidden" name="id1" value="<?PHP echo $code;?>"/>
	</td>
	<td width="68%">
	<input   name="cat_name" id="cat_name"  
	value="<?PHP echo $res->cat_name;?>" />
	</td>
	</tr>
	
		<tr>
			<td colspan="2" align="center">
			<input type="submit" name="save" class="save_btn" value="">
		<input type="submit" name="delete" class="del_btn" value="">
			</td>
		</tr>
	</table>
	
	
	
	</form>
	</div>