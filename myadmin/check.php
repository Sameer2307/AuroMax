<?php
if(!isset($_SESSION['userid'])){
echo "<center><font face='Verdana' size='2' color=red>Sorry, Please login and use this page </font></center>";
$_SESSION['msg']="Sorry, Please login and use this page";
exit;
}
?>