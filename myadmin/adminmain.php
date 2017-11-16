<?php
ob_start();
include "Common/session.php";
require "check.php";
include ("Common/connection.php");
$connection = db_connect();
ob_end_flush();

	$menu=$_GET['m'];
	$page=$_GET['p'];

    $id="";
	if($id=="")
	{ $id=$_GET['id']; }
	
	$mode="";
	if($mode=="")
	{ $mode=$_GET['mode']; }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
	<title>Admin Panel</title>
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
	<?php include("admin_script.php") ; ?>
	<link href="css/all.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
<div id="main">
	<div id="header">
		<a href="#" class="logo">
		<h1>ADMIN PANEL </h1>
	  </a>
		<ul id="top-navigation">
			<?php include("header.php");  ?>
		</ul>
  </div>
	<div id="middle">
		    <div id="left-column">
			<h3><?php echo $header_text ; ?></h3>
			<?php include("leftsidebar.php"); ?>	
		</div>
		<div id="center-column">
		<?php include("body_admin.php");  ?>
	  </div>
	</div>
	<div id="footer"></div>
</div>


</body>
</html>
