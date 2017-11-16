<?php

ob_start();
include ("Common/session.php");
include ("Common/connection.php");
$connection = db_connect();
ob_end_flush();

$userid=$_POST['adminuserid'];
$password=$_POST['adminpwd'];

//echo $userid;
//echo $password;

?>
<!doctype html public "-//w3c//dtd html 3.2//en">

<html>

<head>
<title>Login </title>
<meta name="GENERATOR" content="Arachnophilia 4.0">
<meta name="FORMATTER" content="Arachnophilia 4.0">
</head>

<body bgcolor="#ffffff" text="#000000" link="#0000ff" vlink="#800080" alink="#ff0000">
<?php
$userid=mysql_real_escape_string($userid);
$password=mysql_real_escape_string($password);
//$userid=="admin";
	if($userid=="" or $password==""){
	session_unset();
	$_SESSION['msg']="Wrong Login. Use your correct  Userid and Password and Try";
	echo'<script>window.location="index.php";</script>';
	exit;
	}
	
	  
	  //echo "<img src='img/loading.gif'>" ;
	  //sleep(10);
	 $rec=mysql_fetch_array(mysql_query("SELECT * FROM admin_login WHERE user_name='$userid' AND pass_word = '$password'"));
	 
		if(($rec['user_name']==$userid)&&($rec['pass_word']==$password)){
			 
		include "Common/newsession.php";
		
		$tm=date("Y-m-d H:i:s");
		
		//$ip=@$REMOTE_ADDR; 
		// The above line is commented and the line below is used for the servers where register_global=Off
		$ip=$_SERVER['REMOTE_ADDR'];
		
		//echo $ip;
		$rt=mysql_query("insert into plus_login(id,userid,ip,tm) values('$_SESSION[id]','$_SESSION[userid]','$ip','$tm')");
		
		echo mysql_error();
		
		  // print "self.location='admin_main.php';"; // Comment this line if you don't want to redirect
			//   $url = "adminmain.php";
			  // header("Location:$url");
		      //include "adminmain.php";
			 
			 echo'<script>window.location="adminmain.php?m=2&p=24";</script>';
		}
		
		else
		{
		session_unset();
		$_SESSION['msg']="Wrong Login. Use your correct  Userid and Password and Try";
		echo'<script>window.location="index.php";</script>';

	//	echo "<font face='Verdana' size='2' color=red>Wrong Login. Use your correct  Userid and Password and Try <br><center><input// type='button' value='Retry' onClick='history.go(-1)'></center>";
		
		
		
		}




?>

</html>
