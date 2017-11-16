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
	$sql = "select * from shipping_charge where id=".$code;
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
	     $sql_search=mysql_query("select * from shipping_charge where country='".$_POST['country']."' ") ;
		 $row_search=mysql_num_rows($sql_search);
		 
		 
	   if(($_POST['first_500']=="") || ($_POST['next_500']==""))
	      {?>
	    <SCRIPT LANGUAGE="JAVASCRIPT"> 
		alert("Enter Charges !"); 
		</SCRIPT>
		<?php 
		   }
		   else if($row_search>0)
		   {
		    ?>
	    <SCRIPT LANGUAGE="JAVASCRIPT"> 
		alert("This Country Already Added ! "); 
		</SCRIPT>
		<?php
		   }
		   else if($row_search==0)
		   {
		$sql="insert into shipping_charge (id,country,first_500,next_500) 
			values(null,'".$_POST['country']."','".$_POST['first_500']."','".$_POST['next_500']."')";
		
		mysql_query($sql,$connection) or die("error");
		
		$currentPage = "adminmain.php?m=".$_GET['m']."&p=".$_GET['p']."&pageNum_Recordset1=".$_GET['pageNum_Recordset1'] ;
		echo "<script>window.location='$currentPage'</script>";
		}
	}
	if(isset($_POST['save']) && $_POST['mode']=='edit')
	{
	    $sql_search=mysql_query("select * from shipping_charge where country='".$_POST['country']."' ") ;
		 $row_search=mysql_num_rows($sql_search);
		 
		$id=$_POST['id1'];
		if(($_POST['first_500']=="") || ($_POST['next_500']==""))
		{
		?>
	    <SCRIPT LANGUAGE="JAVASCRIPT"> 
		alert("Enter Charges !"); 
		</SCRIPT>
		<?php
		}
		else
	    {
		    if($row_search==0)
			{
			 $sql="update  shipping_charge
			set country='".$_POST['country']."'
			where id=".$id;
			
			mysql_query($sql,$connection);
			}
			
		    $sql="update  shipping_charge
			set first_500='".$_POST['first_500']."',
			next_500='".$_POST['next_500']."'
			where id=".$id;
		
		mysql_query($sql,$connection);
		$currentPage = "adminmain.php?m=".$_GET['m']."&p=".$_GET['p']."&pageNum_Recordset1=".$_GET['pageNum_Recordset1'] ;
		echo "<script>window.location='$currentPage'</script>";
		
		}
		
	}
		
			

	if(isset($_POST['delete']))
	{
		$id=$_POST['id1'];
		$sql="delete from shipping_charge where id=".$id;
		mysql_query($sql,$connection);
			
	}
}
?>
<div id="addeddit2" style="display:<?PHP echo $new_dis;?> ">
	<h3 align="center">SHIPPING CHARGE</h3>
	
	<table width="100%" id="gradient-style">
		<tr>
			<th width="39%">Country</th>
			<th width="34%">Charge</th>
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
	$query_Recordset1 = "select * from shipping_charge order by id desc ";
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
	<td><?PHP echo $qdata->country;?></td>
	<td>
	<?PHP 
	echo "<b>First 500gm :</b> ".$qdata->first_500 ;
	echo "<br><b>Next 500gm :</b> ".$qdata->next_500 ;
	?>
	</td>
	<td align="center">
	<form action="" method="post">
	<input type="hidden" value="<?PHP echo $qdata->id;?>" name="id">
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
	<form id="formID" class="formular" method="post" action="">
	<p align="center"><strong><?php echo strtoupper($mode)." SHIPPING CHARGE" ; ?></strong></p>
	<table width="100%" id="hor-minimalist-b">
		
		<tr>
			<td width="32%">Country
			</td>
	        <td width="68%">
		<select name="country" id="country">
		<?php
		if($mode=="add")
		{
		//
		}
		else
		if($mode=="edit")
		{
		?>
		<option value="<?PHP echo $res->country;?>" selected="selected"><?PHP echo $res->country;?></option>
		<?php
		}
		?>
		
		<option value="Afghanistan">Afghanistan</option>
		<option value="Albania">Albania</option>
		<option value="Algeria">Algeria</option>			
		<option value="American Samoa">American Samoa</option>			
		<option value="Andorra">Andorra</option>			
		<option value="Angola">Angola</option>			
		<option value="Anguilla">Anguilla</option>			
		<option value="Antigua And Barbuda">Antigua And Barbuda</option>			
		<option value="Argentina">Argentina</option>
		<option value="Armenia">Armenia</option>			
		<option value="Aruba">Aruba</option>
		<option value="Australia">Australia</option>			
		<option value="Austria">Austria</option>			
		<option value="Azerbaijan">Azerbaijan</option>			
		<option value="Bahamas">Bahamas</option>			
		<option value="Bahrain">Bahrain</option>			
		<option value="Bangladesh">Bangladesh</option>			
		<option value="USA">USA</option>			
		<option value="India">India</option>			
		  </select>
		</td>
		</tr>
		
		<tr>
			<td width="32%">First 500 gm 
			  <input type="hidden"  name="mode" value="<?PHP echo $mode;?>"/>
              <input type="hidden" name="id1" value="<?PHP echo $code;?>"/>
			</td>
		    <td width="68%">
			<input  name="first_500" id="first_500"  value="<?PHP echo $res->first_500;?>" /></td>
		   </tr>
		   <tr>
			<td width="32%">Next 500 gm 
			</td>
	        <td width="68%">
		 <input  name="next_500" id="next_500"  value="<?PHP echo $res->next_500;?>" />
		</td>
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
		<?php 
		if($res->country!="Other")
		{
		?>
		<input type="submit" name="delete" class="del_btn" value="">
		<?php
		}
		?>
		</tr>
	</table>
	
	
	
	</form>
	</div>