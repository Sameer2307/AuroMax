<?php
$currentPage = "adminmain.php?m=".$_GET['m']."&p=".$_GET['p']."&pageNum_Recordset1=".$_GET['pageNum_Recordset1'] ;

$code=$_POST['id'];
if($_POST['ss']!=''){
	$dis='';
	$new_dis="none";
}
else{
	$dis="none";
	$new_dis='';
}
if($code!=""){
	$dis='';
	$new_dis="none";
	$sql = "select * from admin_login where id=".$code;
	$query_result=mysql_query($sql);
	$res = mysql_fetch_object($query_result);
	$mode="edit";
	}
else{
	$mode="add";
	}
$mode1=$_POST['mode'];
if($mode1!=''){
	if(isset($_POST['save']) && $_POST['mode']=="add"){
		
	$sql12=mysql_fetch_object(mysql_query("select count(*) cnt2 from admin_login where user_name='".$_POST['user_name']."' ")) ;
		if($sql12->cnt2>0)
		{
		
		}
	    else
		{
		$sql="insert into admin_login (id,user_name,pass_word,LOGINNAME) 
			values(null,'".$_POST['user_name']."','".$_POST['pass_word']."','".$_POST['LOGINNAME']."')";
		
		mysql_query($sql,$connection) or die("error");
		}
		$currentPage = "adminmain.php?m=".$_GET['m']."&p=".$_GET['p']."&pageNum_Recordset1=".$_GET['pageNum_Recordset1'] ;
		echo "<script>window.location='$currentPage'</script>";
	}
	if(isset($_POST['save']) && $_POST['mode']=='edit'){
		$id=$_POST['id1'];
		
		  $sql="update  admin_login 
			set pass_word='".$_POST['pass_word']."',
			LOGINNAME='".$_POST['LOGINNAME']."'
			where id=".$id;
		
		mysql_query($sql,$connection);
		
	$sql12=mysql_fetch_object(mysql_query("select count(*) cnt2 from admin_login where user_name='".$_POST['user_name']."' ")) ;
		if($sql12->cnt2==0)
		{
		    $sql="update  admin_login 
			set user_name='".$_POST['user_name']."'
			where id=".$id;
		
		mysql_query($sql,$connection);
		}
		$currentPage = "adminmain.php?m=".$_GET['m']."&p=".$_GET['p']."&pageNum_Recordset1=".$_GET['pageNum_Recordset1'] ;
		echo "<script>window.location='$currentPage'</script>";
		
	}
	if(isset($_POST['delete']))
	{
		$id=$_POST['id1'];
		$sql="delete from admin_login where id=".$id;
		mysql_query($sql,$connection);
	}
}
?>
<div class="middle_back">
	<h3 align="center">WEB MASTER</h3>
		<?php
					
			    $currentPage = $_SERVER["PHP_SELF"]."?m=".$_GET['m']."&p=".$_GET['p'] ;
				$maxRows_Recordset1 = 7;
				$pageNum_Recordset1 = 0;
				if (isset($_GET['pageNum_Recordset1']))
				{
				$pageNum_Recordset1 = $_GET['pageNum_Recordset1'];
                }
				
				$startRow_Recordset1 = $pageNum_Recordset1 * $maxRows_Recordset1;
				$query_Recordset1 = "select * from admin_login ";
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
	<div id="addeddit2" style="display:<?PHP echo $new_dis;?> ">	
	<table width="100%" id="gradient-style">
		<tr>
			<th width="30%" >Admin Name</th>
			<th width="19%" >Login Id </th>
			<th width="26%" >Password</th>
			<th width="25%" align="center" >
			<form action="" method="post"><input type="hidden" name="ss" value="add"/>
			<input type="submit" name="Add" value="" class="add_btn"/>
			</form>
			</th>
		</tr>
		<?php
		
		$result = mysql_query($query_limit_Recordset1);
		$rows=mysql_num_rows($result) ;
		while($qdata=mysql_fetch_object($result))
		{
		?>
		<tr>
			<td><?PHP echo $qdata->LOGINNAME;?></td>
			<td><?PHP echo $qdata->user_name;?></td>
			<td><?PHP echo $qdata->pass_word;?></td>
			<td align="center"><form action="" method="post">
			<input type="hidden" value="<?PHP echo $qdata->id;?>" name="id">
			 <input name="Update" type="submit" value="" class="update_btn"/>
			 </form></td>
		</tr>
		<?php } ?>
	</table>
	<!-- PAGINATION -->

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
	 <img src="images/First.gif" border="0" />
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
	  <img src="images/Previous.gif" border="0" />
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
	  <img src="images/Next.gif" border="0" />
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
		<img src="images/Last.gif" border="0" />
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
	<table width="100%" id="hor-minimalist-b">
		
		<tr>
			<td width="32%">User Name</td>
		<td width="68%"><input  class="validate[required,length[0,10]]" name="LOGINNAME" id="LOGINNAME"  value="<?PHP echo $res->LOGINNAME;?>" /></td>
			
		</tr>
		
		<tr>
			<td>User Id</td>
			<td><input name="user_name"  class="validate[required,length[0,10]]" type="text" id="user_name"  value="<?PHP echo $res->user_name	;?>" /></td>
			
		</tr>
		
<tr>
	<td>Password</td>
<input type="hidden"  name="mode" value="<?PHP echo $mode;?>"/>
<input type="hidden" name="id1" value="<?PHP echo $code;?>"/>
	
	<td><input type="text" class="validate[required,length[0,10]]" name="pass_word" id="pass_word"  value="<?PHP echo $res->pass_word;?>" />
	
	</td>
</tr>
		
		
		<tr>
			<td colspan="4" align="center">
			<input type="submit" name="save" class="save_btn" value="">
		
			<?php
			if($rows>1)
			{
			?>
			<input type="submit" name="delete" class="del_btn" value="">
			<?php
			}
			?>
			</td>
		</tr>
	</table>
	
	
	
	</form>
	</div>
</div>