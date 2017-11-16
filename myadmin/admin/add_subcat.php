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

echo $_POST['subcat_detail'];


if($code!="")
{
	$dis='';
	$new_dis="none";
	$sql = "select * from subcategory where subcat_id=".$code;
	$query_result=mysql_query($sql);
	$res = mysql_fetch_object($query_result);
	$mode="edit";
	}
else{
	$mode="add";
	}
	
$mode1=$_POST['mode'];
if($mode1!=''){
	if(isset($_POST['save']) && $_POST['mode']=="add")
	{
	
	   if(($_POST['subcat_name']=="")||($_POST['cat_id']==""))
	      {?>
	    <SCRIPT LANGUAGE="JAVASCRIPT"> 
		alert("Enter Subcategory Name !"); 
		</SCRIPT>
		<?php 
		   }
		   else
		   {
		   
		$b_name="";
		$b_name=basename($_FILES['s_image']['name']);
		if($b_name!="")
		{
		$target_path = "../sub_cat_image/";
		$b_name='pic_'.str_replace(" ", "", $b_name);
		$target_path = $target_path.$b_name;
		
		copy($_FILES['s_image']['tmp_name'], $target_path);
		}
		if($b_name=="")
		{
		$b_name="not_available_b.png";
		} 
		  
		
		$sql="insert into subcategory (subcat_id,cat_id,subcat_name,sub_cat_image,subcat_detail) 
			values(null,'".$_POST['cat_id']."','".$_POST['subcat_name']."','".$b_name."','".$_POST['subcat_detail']."')";
		
		mysql_query($sql,$connection) or die("error");
		
		$currentPage = "adminmain.php?m=".$_GET['m']."&p=".$_GET['p']."&pageNum_Recordset1=".$_GET['pageNum_Recordset1'] ;
		echo "<script>window.location='$currentPage'</script>";
		}
	}
	if(isset($_POST['save']) && $_POST['mode']=='edit')
	{
	
		$id=$_POST['id1'];
		if(($_POST['subcat_name']==""))
		{
		?>
	   <SCRIPT LANGUAGE="JAVASCRIPT"> 
		alert("Enter Subcategory name !"); 
		</SCRIPT>
		<?php
		}
		
		else
		{
		 echo $_POST['subcat_detail'];
		 
		$sql="update  subcategory
			set subcat_name='".$_POST['subcat_name']."', 
			cat_id='".$_POST['cat_id']."',
			subcat_detail='".$_POST['subcat_detail']."'
			where subcat_id=".$id;
		
		mysql_query($sql,$connection);
		
		//$b_name="";
		
		$s_name="";
		echo $s_name=basename($_FILES['s_image']['name']);
		if($s_name!="")
		{
		$target_path = "../sub_cat_image/";
		$last_id=mysql_insert_id();
		$s_name='pic_'.str_replace(" ", "", $s_name);
		echo $target_path = $target_path.$s_name;
		
		copy($_FILES['s_image']['tmp_name'], $target_path);
		
		$sql="update  subcategory set sub_cat_image='".$s_name."' where subcat_id=".$id;
		mysql_query($sql,$connection);
		}
		
		/*$currentPage = "adminmain.php?m=".$_GET['m']."&p=".$_GET['p']."&pageNum_Recordset1=".$_GET['pageNum_Recordset1'] ;
		echo "<script>window.location='$currentPage'</script>";*/
		
		}
		
	}
		
			

	if(isset($_POST['delete']))
	{
		$id=$_POST['id1'];
		$sql="delete from subcategory where subcat_id=".$id;
		mysql_query($sql,$connection);
			
	}
}
?>
<div id="addeddit2" style="display:<?PHP echo $new_dis;?> ">
	<h3 align="center">SUBCATEGORY</h3>
	
	<table width="100%" id="gradient-style">
		<tr>
			<th width="24%">Suucategory name</th>
			<th width="49%">Category Name</th>
			<th width="49%">Image</th>
			<!--<th width="26%">Comming Soon</th>-->
			<th width="27%" align="center" >
			<form action="" method="post">
			<input type="hidden" name="ss" value="add"/>
			<input type="submit" name="Add" value="" class="add_btn" />
			</form>
		  </th>
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
	$query_Recordset1 = "select * from subcategory order by cat_id,subcat_name ";
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
	<td><?PHP echo $qdata->subcat_name;?></td>
	<td>
	<?PHP 
	$sql_cat_select=mysql_fetch_object(mysql_query("select * from category where cat_id='".$qdata->cat_id."'")) ;
	echo $sql_cat_select->cat_name ;
	?>
	</td>
	<td align="center">
	<a rel="sexylightbox[group1]" 
	href="<?PHP echo "../sub_cat_image/".$qdata->sub_cat_image ;?>"  title="">
	<img src="<?PHP echo "../sub_cat_image/".$qdata->sub_cat_image;?>" width="40" height="40"/>
	</a>
	</td>
	<?php /*?><td><?PHP echo $qdata->comming_soon;?></td><?php */?>
	<td align="center">
	<form action="" method="post">
	<input type="hidden" value="<?PHP echo $qdata->subcat_id;?>" name="id">
	 <input name="Update" type="submit" value="" class="update_btn"/>
	</form>
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
</div>	


	<div id="addeddit1" style="display:<?PHP echo $dis;?> ">
	<form id="formID" class="formular" method="post" action="" enctype="multipart/form-data">
	<p align="center"><strong><?php echo strtoupper($mode)." SUBCATYGORY" ; ?></strong></p>
	<table width="100%" id="hor-minimalist-b">
		
		<tr>
			<td width="32%">Subcategory
			  <input type="hidden"  name="mode" value="<?PHP echo $mode;?>"/>
              <input type="hidden" name="id1" value="<?PHP echo $code;?>"/>			</td>
		    <td width="68%">
			<input  name="subcat_name" id="subcat_name"  value="<?PHP echo $res->subcat_name;?>" /></td>
		</tr>
		<tr>
			<td width="32%">Category			</td>
	      <td width="68%">
		 <select name="cat_id" id="cat_id">
		 <?php
		 $sql_sel_id=mysql_query("select * from category ") ;
		 while($res_sel_id=mysql_fetch_object($sql_sel_id))
		 {
		 ?>
		 <option value="<?php echo $res_sel_id->cat_id ; ?>" <?php if($res_sel_id->cat_id==$res->cat_id){echo "selected" ; } ?> >
		 <?php echo $res_sel_id->cat_name ; ?></option>
		 <?php
		 }
		  ?>
		  </select>		</td>
		</tr>
		
		<tr>
			<td width="32%">Image</td>
		    <td width="68%">
			<input name="s_image" id="s_image" type="file" />			</td>
		</tr>
		
		
		<tr>
			<td width="32%">Details</td>
		    <td width="68%">
			<input type="text" id="subcat_detail"   name="subcat_detail" 
			value="<?php echo $res->subcat_detail; ?>"></td>
		</tr>
		
				
		
		<?php /*?><tr>
			<td width="32%">Cooming Soon
			</td>
		    <td width="68%"><label>
		      <select name="cs_select" id="cs_select">
			  <option selected="selected" value="<?PHP echo $res->comming_soon;?>"><?PHP echo $res->comming_soon;?></option>
			  <option>Y</option>
			  <option>N</option
	          ></select>
	        </label>
			</td>
			
		</tr><?php */?>
		
		
		
		<tr>
		<td colspan="2" align="center">
		<input type="submit" name="save" class="save_btn" value="">
		<input type="submit" name="delete" class="del_btn" value="">		</tr>
	</table>
	
	
	
	</form>
	</div>