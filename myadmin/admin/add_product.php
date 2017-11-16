<?php
    $_SESSION['select_cat_update']="" ;
	
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
	$sql = "select * from product where product_id=".$code;
	$query_result=mysql_query($sql);
	$res = mysql_fetch_object($query_result);
	
	$sql1 = "select * from size_price where product_id=".$code;
	$query_result1=mysql_query($sql1);
	$res1 = mysql_fetch_object($query_result1);
	
		
	$rdo2=mysql_fetch_object(mysql_query("select * from subcategory where subcat_id=".$res->subcat_id));
    $rdo3=mysql_fetch_object(mysql_query("select * from category where cat_id=".$rdo2->cat_id));
	
	$_SESSION['select_cat_update']=$rdo3->cat_id ;
	$_SESSION['select_subcat_update']=$res->subcat_id ;
	
	$mode="edit";
	}
    else
	{
	$mode="add";
	}

$mode1=$_POST['mode'];

if($mode1!='')
{
  if(isset($_POST['save'])&& $_POST['mode']=="add")
	{
		//upload thumbnail image
		$file_name="";
		$file_name=basename($_FILES['t_image']['name']);
		if($file_name!="")
		{
		$target_path = "../product/";
		$file_name='pic_'.str_replace(" ", "", $file_name);
		$target_path = $target_path.$file_name;
	
		copy($_FILES['t_image']['tmp_name'], $target_path);
		}
		if($file_name=="")
		{
		$file_name="not_available.png";
		}
	   
		$b_name="";
		$b_name=basename($_FILES['b_image']['name']);
		if($b_name!="")
		{
		$target_path = "../big_product/";
		$b_name='pic_'.str_replace(" ", "", $b_name);
		$target_path = $target_path.$b_name;
		
		copy($_FILES['b_image']['tmp_name'], $target_path);
		}
		if($b_name=="")
		{
		$b_name="not_available_b.png";
		}
		
	if($_POST['cat_id']=="")
	{
	  $_SESSION['product_ins_msg']="Category Selection Is Must ! " ;
	}
	else
	{	
	$sql="insert into product(product_id,subcat_id,brand_id,product_name,
	details,image,big_image,qty,discount,weight,status) 
	values(null,'".$_POST['subcat_id']."','".$_POST['brand_id']."','".$_POST['product_name']."',
	'".$_POST['details']."','".$file_name."','".$b_name."','".$_POST['qty']."','".$_POST['discount']."',
	'".$_POST['weight']."','".$_POST['status']."')";
		
		mysql_query($sql,$connection) or die("error");
		$_POST['id1']="";
		
		$last_id=mysql_insert_id() ;
		$sql2="insert into size_price (size_price_id,product_id,size,price) 
			values(null,'".$last_id."','".$_POST['size']."','".$_POST['price']."')";
			mysql_query($sql2,$connection) or die("error");
		
		$currentPage = "adminmain.php?m=".$_GET['m']."&p=".$_GET['p']."&pageNum_Recordset1=".$_GET['pageNum_Recordset1'] ;
		echo "<script>window.location='$currentPage'</script>";
	 }
	}
	
	
	
	
	
	
	if(isset($_POST['save']) && $_POST['mode']=='edit')
	{
		$id=$_POST['id1'];
		
		 $sql="update  product
			set subcat_id='".$_POST['subcat_id']."',
			brand_id='".$_POST['brand_id']."',
			product_name='".$_POST['product_name']."',
			details='".$_POST['details']."',
			qty='".$_POST['qty']."',
			discount='".$_POST['discount']."',
			weight='".$_POST['weight']."',
			status='".$_POST['status']."'
			where product_id=".$id;
		
		mysql_query($sql,$connection);
		
		mysql_query("delete from size_price where product_id=".$id );
		
		
		$sql2="insert into size_price (size_price_id,product_id,size,price) 
			values(null,'".$id."','".$_POST['size']."','".$_POST['price']."')";
		mysql_query($sql2,$connection) or die("error");
		
		$file_name="";
		$file_name=basename($_FILES['t_image']['name']);
		if($file_name!="")
		{
		$target_path = "../product/";
		$file_name='pic_'.str_replace(" ", "", $file_name);
		$target_path = $target_path.$file_name;
		
		copy($_FILES['t_image']['tmp_name'], $target_path);
		$sql="update  product set image='".$file_name."' where product_id=".$id;
		mysql_query($sql,$connection);
		 }

		$b_name="";
		$b_name=basename($_FILES['b_image']['name']);
		if($b_name!="")
		{
		$target_path = "../big_product/";
		$last_id=mysql_insert_id();
		$b_name='pic_'.str_replace(" ", "", $b_name);
		$target_path = $target_path.$b_name;
		
		copy($_FILES['b_image']['tmp_name'], $target_path);
		
		$sql="update  product set big_image='".$b_name."' where product_id=".$id;
		mysql_query($sql,$connection);
		}
		$currentPage = "adminmain.php?m=".$_GET['m']."&p=".$_GET['p']."&pageNum_Recordset1=".$_GET['pageNum_Recordset1'] ;
        echo "<script>window.location='$currentPage'</script>";
		
	}
		
			

	if(isset($_POST['delete']))
	{
		$id=$_POST['id1'];
		$sql="delete from product where product_id=".$id;
		mysql_query($sql,$connection);
		$_POST['id1']="";
		
		$sql="delete from size_price where product_id=".$id;
		mysql_query($sql,$connection);
		
		$currentPage = "adminmain.php?m=".$_GET['m']."&p=".$_GET['p']."&pageNum_Recordset1=".$_GET['pageNum_Recordset1'] ;
		echo "<script>window.location='$currentPage'</script>";
		
	}

}   
?>
 <div id="addeddit2" style="display:<?PHP echo $new_dis;?> ">
   <h3 align="center">PHOTO GALLARY </h3>
   <?php
   if($_SESSION['product_ins_msg']!="")
   {
   echo "<font color='red'>".$_SESSION['product_ins_msg']."</font><br>" ;
   $_SESSION['product_ins_msg']="" ;
   }
   ?>
	<table width="100%" id="gradient-style">
		<tr>
			<th width="23%">About  </th>
			<th width="23%"> Name </th>
			<th width="21%">Images</th>
			<th width="12%">&nbsp;</th>
		  <th width="21%" align="center">
		  <form action="" method="post">
		  <input type="hidden" name="ss" value="add"/>
		  <input type="submit" name="Add" value="" class="add_btn"/>
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
	$query_Recordset1 = "select * from product where status='photo' order by product_name ";
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
			
			<td height="50" valign="top">
			<?php 
			$rdo=mysql_fetch_object(mysql_query("select * from subcategory where subcat_id=".$qdata->subcat_id));
			
			$rdo1=mysql_fetch_object(mysql_query("select * from category where cat_id=".$rdo->cat_id));
			
			$rdo2=mysql_fetch_object(mysql_query("select * from brands where brand_id=".$qdata->brand_id));
			
			echo "<b>Category</b> : ".$rdo1->cat_name; 
			echo "<br><b>Sub-Category</b> : ".$rdo->subcat_name;
			echo "<br><b>Brand</b> : ".$rdo2->brand_name;  
			?>			</td>
			<td valign="top"><?PHP echo $qdata->product_name;?></td>
			<td align="center">
			<a rel="sexylightbox[group1]" 
			href="<?PHP echo "../product/".$qdata->image ;?>"  title="">
			<img src="<?PHP echo "../product/".$qdata->image;?>" width="40" height="40"/>
			</a>
			&nbsp;&nbsp;&nbsp;&nbsp;
			<a rel="sexylightbox[group1]" 
			href="<?PHP echo "../big_product/".$qdata->big_image ;?>"  title="">
			<img src="<?PHP echo "../big_product/".$qdata->big_image;?>" width="40" height="40"/>
			</a>
			</td>
			<td valign="top">&nbsp;</td>
			<td align="center">
			<form action="" method="post">
			<input type="hidden" value="<?PHP echo $qdata->product_id;?>" name="id">
			    <input name="Update" type="submit" value="" class="update_btn"/>
				<?php /*?><a href="<?php echo "adminmain.php?m=".$_GET['m']."&p=25&product_id=".$qdata->product_id ; ?>" >
				<input name="Price" type="button" value="" class="price"/>
				</a><?php */?>
			  </form></td>
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
	<form id="formID" name="formID" class="formular" method="post" action="" enctype="multipart/form-data">
	<input type="hidden" name="brand_id" value=""/>
	
	<p align="center"><strong><?php echo strtoupper($mode)." " ; ?></strong></p>
	<table width="100%" id="hor-minimalist-b">
		<tr>
		<td width="32%">Category</td>
	    <td width="68%">
		
		<select name="cat_id" id="cat_id" onchange="dynamic_subcat('subcat',this.value)">
		<?php
		if($mode=="add")
		{
		?>
		<option value="">Select Category</option>
		<?php
		}
		?>
		 <?php
		 $sql_sel_id=mysql_query("select * from category order by cat_id ") ;
		 while($res_sel_id=mysql_fetch_object($sql_sel_id))
		 {
		 ?>
		 <option value="<?php echo $res_sel_id->cat_id ; ?>" 
		 <?php if($_SESSION['select_cat_update']==$res_sel_id->cat_id){echo "selected" ; } ?>  >
		 <?php echo $res_sel_id->cat_name ; ?></option>
		 <?php
		 }
		  ?>
		  </select>
		  </td>
		</tr>
		
		
		
		
		<tr>
			<td width="32%">Subcategory
			  <input type="hidden"  name="mode" value="<?PHP echo $mode;?>"/>
              <input type="hidden" name="id1" value="<?PHP echo $code;?>"/>
			  
			  
			  </td>
		    <td width="68%">
			<div id="dynamic_subcat">
			<?php
			if($mode=="edit")
			{
			?>
		   <select name="subcat_id" id="subcat_id"> 
		   <?php
		   $sql6 ="select * from subcategory where cat_id='".$_SESSION['select_cat_update']."' ";
		   $result=mysql_query($sql6);
		   while($row6=mysql_fetch_array($result))
		   {
		   ?>
		   <option  value="<?PHP echo $row6['subcat_id'];?>" 
		   <?php if($row6['subcat_id']==$_SESSION['select_subcat_update']){echo "selected" ; } ?> >
		  <?PHP echo $row6['subcat_name'];?></option>
		  <?php  }?>
		  </select>	  
		  <?php
		  }
		  ?>
		  </div>
		  </td>
		</tr>
		
		<?php /*?><tr>
			<td width="32%">Brand</td>
		    <td width="68%">
			<select name="brand_id" id="brand_id"> 
		   <?php
		   $sql7 ="select * from brands ";
		   $result7=mysql_query($sql7);
		   while($row7=mysql_fetch_array($result7))
		   {
		   ?>
		<option  value="<?PHP echo $row7['brand_id'];?>" <?php if($row7['brand_id']==$res->brand_id){echo "selected" ; } ?> >
		<?PHP echo $row7['brand_name'];?></option>
		  <?php  }?>
		  </select>	
			</td>
		</tr><?php */?>
		
		<tr>
			<td width="32%"> Name </td>
		    <td width="68%">
			<input   name="product_name" id="product_name"  value="<?PHP echo $res->product_name;?>" /></td>
		</tr>
		<tr>
			<td width="32%">Video url </td>
		    <td width="68%">
			<input  name="details" id="details"  value="<?PHP echo $res->details;?>" />
			</td>
		</tr>
		<tr>
			<td width="32%">Thumbnail Image</td>
	      <td width="68%"><input type="file" id="t_image"  name="t_image"></td>
		</tr>
		<tr>
			<td width="32%">Large Image (For Image gallery) </td>
		    <td width="68%">
			<input name="b_image" id="b_image" type="file" />			</td>
		</tr>
		<!--<tr>
			<td width="32%">Size</td>
		    <td width="68%"><input  class="validate[required,length[0,10]]" name="size" id="size"  value="" /></td>
		</tr>-->
		<input type="hidden"  name="qty" id="qty"  value="<?PHP echo $res->qty;?>" />
		<input type="hidden" name="size" value="XL"/>
		<input type="hidden"  name="price" id="price"  value="<?PHP echo $res1->price;?>" />
		<input type="hidden"  name="discount" id="discount"  value="<?PHP echo $res->discount;?>" />
		<input type="hidden"  name="weight" id="weight"  value="<?PHP echo $res->weight;?>" />
		
		<?php /*?><tr>
			<td width="32%">Quantity</td>
		    <td width="68%"><input name="qty" id="qty"  value="<?PHP echo $res->qty;?>" /></td>
		</tr>
		<tr>
		<td width="32%">
		Price
		<input type="hidden" name="size" value="XL"/></td>
		<td width="68%"><input  name="price" id="price"  value="<?PHP echo $res1->price;?>" /></td>
			
		</tr>
		<tr>
		<td width="32%">
		Discount<font color='red'>(Give in percentage, like 10.50)</font>
		</td>
		<td width="68%"><input  name="discount" id="discount"  value="<?PHP echo $res->discount;?>" /></td>
			
		</tr>
		
		<tr>
		<td width="32%">
		Weight<font color='red'>(Give in gram, like 100)</font>
		</td>
		<td width="68%"><input  name="weight" id="weight"  value="<?PHP echo $res->weight;?>" /></td>
			
		</tr><?php */?>
		
		
		<tr>
		<td width="32%">Status</td>
	    <td width="68%">
		
		<select name="status" id="status" >
	    <option value="photo"<?php if($res->status=="photo"){echo "selected" ; } ?> >Photo</option>
	   <?php /*?> <option value="video"<?php if($res->status=="video"){echo "selected" ; } ?> >Video</option><?php */?>
	    </select>
		  </td>
		</tr>
		
		
		<tr>
		<td colspan="2" align="center">
		<input type="submit" name="save" class="save_btn" value="">
		<input type="submit" name="delete" class="del_btn" value="">
		</tr>
	</table>
	
	
	
	</form>
	</div>