<?php

/*$dbhost = 'localhost';
$dbusername ='hartline_ecomm';
$dbuserpassword = 'hartline#@!';
$default_dbname = 'mysql';
$dbname = 'hartline_ecommerce';*/

$dbhost = 'mysql';
$dbusername ='agarwal';
$dbuserpassword = 'INDIA2013';
$default_dbname = 'mysql';
$dbname = 'gallary';


$MYSQL_ERRNO ='';
$MYSQL_ERROR ='';



$num_recs_per_page=30;


//$base_url="http://www.ebluesoft.com/projects/webcron";


function db_connect()
{
	global $dbhost, $dbusername, $dbuserpassword, $default_dbname, $dbname, $MYSQL_ERRNO, $MYSQL_ERROR;
	
	$link_id = mysql_connect("$dbhost","$dbusername","$dbuserpassword");
	if (!$link_id)
	{
		$MYSQL_ERRNO = 0;
		$MYSQL_ERROR = "Connection Fail to the host $dbhost.";
	}
	else if(empty($dbname) && !mysql_select_db($default_dbname))
	{
		$MYSQL_ERRNO = mysql_errno();
		$MYSQL_ERROR = mysql_error();
		return 0;
	}
	else if(!empty($dbname) && !mysql_select_db($dbname))
	{
		$MYSQL_ERRNO = mysql_errno();
		$MYSQL_ERROR = mysql_error();
		return 0;
	}
	else return $link_id;
}




function sql_error()
{
	global $MYSQL_ERRNO, $MYSQL_ERROR;
	if(empty($MYSQL_ERROR))
	{
		$MYSQL_ERRNO = mysql_erron();
		$MYSQL_ERROR = mysql_error();
	}
	return "$MYSQL_ERRNO : $MYSQL_ERROR";
}
?>