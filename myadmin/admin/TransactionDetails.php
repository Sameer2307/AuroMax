
<?php
require_once '../CallerService.php';
$transactionID=urlencode($_GET['transactionID']);

/* Construct the request string that will be sent to PayPal.
   The variable $nvpstr contains all the variables and is a
   name value pair string with & as a delimiter 
*/
$nvpStr="&TRANSACTIONID=$transactionID";



/* Make the API call to PayPal, using API signature.
   The API response is stored in an associative array called $resArray */
$resArray=hash_call("gettransactionDetails",$nvpStr);

/* Next, collect the API request in the associative array $reqArray
   as well to display back to the browser.
   Normally you wouldnt not need to do this, but its shown for testing */

$reqArray=$_SESSION['nvpReqArray'];

/* Display the API response back to the browser.
   If the response from PayPal was a success, display the response parameters'
   If the response was an error, display the errors received using APIError.php.
   */
$ack = strtoupper($resArray["ACK"]);

if($ack!="SUCCESS"){
		$_SESSION['reshash']=$resArray;
		$location = "APIError.php";
		//header("Location: $location");
		echo "<script>window.location='$location'</script>";
	}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/style.css" type="text/css" rel="stylesheet" />
<link href="css/cart_style.css" type="text/css" rel="stylesheet" />

<title>Hartline</title>
<style type="text/css">
<!--
.style1 {
	font-size: 16px;
	font-weight: bold;
}
.style4 {color: #000000}
-->
</style>
</head>

<body>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td align="left" valign="top" class="mainbody"><table width="100%" border="0" cellspacing="0" cellpadding="0">
              
        <tr>
          <td align="left" valign="top">
		  
		 <!-- <table width="998" border="0" align="center" cellpadding="0" cellspacing="0">
              <tr>
                <td align="left" valign="top" class="headbanner">
				-->
				<?php //include("bannerhead.php"); ?>
				
			<!--	</td>
              </tr>
            </table>-->
			
			
			
			</td>
        </tr>
        <tr>
          <td align="left" valign="top">
		  
		  
		  
		  <table width="998" border="0" align="center" cellpadding="0" cellspacing="0">
              
			  
			  <tr>
                <td align="center" valign="top" class="bodyshadow">
                
				<!-- Paypal -->
			
			<font size=3 color=yellow face=Verdana><b>Transaction Details</b></font>
		<br><br>

	<table width=400>
	<?php 
	require_once '../ShowAllResponse.php';
	?>
	</table>

	     <?php
		 $tran_ID=$resArray['TRANSACTIONID'];
		 $currency_cd=$resArray['CURRENCYCODE'];
		 $gross_amt=$resArray['AMT'];

		// Build links
		//$do_void_link = 'DoVoid.php?authorization_id='.$tran_ID;
		//$do_authorization_link = 'DoAuthorization.php?order_id='.$tran_ID.'&currency='.$currency_cd.'&amount='.$gross_amt;
		//$do_capture_link = 'DoCapture.php?authorization_id='.$tran_ID.'&currency='.$currency_cd.'&amount='.$gross_amt;
		//$do_refund_link = 'RefundTransaction.php?transaction_id='.$tran_ID.'&currency='.$currency_cd.'&amount='.$gross_amt;
	?>

   <?php /*?> <br> <font size=2 color=black face=Verdana>
    <a id="DoVoidLink" href="<?php echo $do_void_link?>">Void</a>
    <a id="DoAuthorization" href="<?php echo $do_authorization_link?>">Authorization</a>
    <a id="DoCaptureLink" href="<?php echo $do_capture_link?>">Capture</a>
    <a id="RefundTransactionLink" href="<?php echo $do_refund_link?>">Refund</a>
    <a id="BackLink" href="javascript:history.back()">Back</a>
    <br /> </font><?php */?>
		       <!-- Paypal -->
		
				
			   </td>
                    </tr>
                    
                    
                  </table>
				
				
				</td>
			  </tr>
            </table>
		  
		  
		  
        </tr>
      </table></td>
  </tr>
  <tr>
    <td align="left" valign="top" class="footer"></td>
  </tr>
</table>
<?php  //echo "UID : ".$_SESSION['last_user_id_hartline'] ; ?>
</body>
</html>
