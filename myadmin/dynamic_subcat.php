<?php  

ob_start();
include "Common/session.php";
require "check.php";
include ("Common/connection.php");
$connection = db_connect();
ob_end_flush();
  
$type=$_GET["type"];
$val=$_GET["val"];
?>


           <select name="subcat_id" id="subcat_id"> 
		   <?php
		   $sql6 ="select * from subcategory where cat_id='".$val."' ";
		   $result=mysql_query($sql6);
		   while($row6=mysql_fetch_array($result))
		   {
		   ?>
		   <option  value="<?PHP echo $row6['subcat_id'];?>" 
		   <?php if($row6['subcat_id']==$_SESSION['select_subcat_update']){echo "selected" ; } ?> >
		  <?PHP echo $row6['subcat_name'];?></option>
		  <?php  }?>
		  </select>	  