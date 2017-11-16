<?php
ob_start();
include ("database_connect.php"); 
ob_end_flush();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Auromax</title>
<link rel="stylesheet" href="css/style.css" type="text/css">
<link rel="stylesheet" type="text/css" href="css/ddsmoothmenu.css" />

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/ddsmoothmenu.js"></script>
<script type="text/javascript">
ddsmoothmenu.init({
	mainmenuid: "smoothmenu1", //menu DIV id
	orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
	classname: 'ddsmoothmenu', //class added to menu's outer DIV
	//customtheme: ["#1c5a80", "#18374a"],
	contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
})

function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}
//-->
</script>


<link rel="stylesheet" href="jsgallary/prettyPhoto/css/prettyPhoto.css" type="text/css" media="screen" />
		<!--[if IE 6]>
			<link rel="stylesheet" type="text/css" media="screen" href="css/ie-hacks.css" />
			<script type="text/javascript" src="js/DD_belatedPNG.js"></script>
			<script>
          		/* EXAMPLE */
          		DD_belatedPNG.fix('*');
        	</script>
		<![endif]-->
		<!-- ENDS CSS -->
				
		
		
		<!-- JS -->
		<script type="text/javascript" src="jsgallary/jquery_1.3.2.js"></script>
		<script type="text/javascript" src="jsgallary/jqueryui.js"></script>
		<script type="text/javascript" src="jsgallary/easing.js"></script>
		<script type="text/javascript" src="jsgallary/jquery.cycle.all.js"></script>
		<script type="text/javascript" src="jsgallary/filterable.pack.js"></script>
		<script type="text/javascript" src="jsgallary/prettyPhoto/js/jquery.prettyPhoto.js"></script>
		<script type="text/javascript" src="jsgallary/custom.js"></script>
		<!-- ENDS JS -->
		
		
		
		<!-- superfish -->
		<link rel="stylesheet" type="text/css" media="screen" href="css/superfish-custom.css" /> 
		<script type="text/javascript" src="jsgallary/superfish-1.4.8/js/hoverIntent.js"></script> 
		<script type="text/javascript" src="jsgallary/superfish-1.4.8/js/superfish.js"></script> 
		<!-- ENDS superfish -->


		
		<!-- Cufon -->
		<script src="jsgallary/cufon-yui.js" type="text/javascript"></script>
		<script src="jsgallary/bebas_400.font.js" type="text/javascript"></script>
		<script type="text/javascript">
			Cufon.replace('.custom', { fontFamily: 'bebas', hover: true });
		</script>
        <!-- /Cufon -->
        
        
		
		<!-- Prettyphotos -->
		<script type="text/javascript" charset="utf-8">
			$(document).ready(function(){
				$("a[rel^='prettyPhoto']").prettyPhoto();
			});
		</script>
		<!-- ENDS  Prettyphotos -->

<script type="text/javascript">
function fnsubcategory(f)
{
	var d;
	//alert(f);
	d="photo_gallery.php?subcat_id="+f;
	document.subcat_form.action=d;
	document.subcat_form.submit();
}
</script>



<style type="text/css">
<!--
.style1 {
	font-size: 16px;
	font-weight: bold;
}
-->
</style>
</head>

<body>
	<div class="wrapper">
		<table width="900" border="0" cellspacing="0" cellpadding="0">
		  <tr>
			<td align="left" valign="top">
				<table width="900" border="0" cellspacing="0" cellpadding="0">
				  <tr>
					<td height="20" align="left" valign="top">&nbsp;</td>
				  </tr>
				  <tr>
					<td align="left" valign="top">	</td>
				  </tr>
				  <tr>
					<td align="left" valign="top">
						<table width="900" border="0" cellspacing="0" cellpadding="0">
						  <tr>
							<td width="700" align="left" valign="top"><a href="index.html"><img src="images/logo.jpg" alt="" width="301" height="64" border="0" /></a></td>
							<td width="210" align="right" valign="top">
								<table width="210" border="0" cellspacing="0" cellpadding="0">
								  <tr>
									<td  width="50"height="20" align="left" valign="top">&nbsp;</td>
									<td width="130" align="left" valign="top">&nbsp;</td>
								  </tr>
								  <tr>
									<td width="60" align="left" valign="top"><img src="images/mail.jpg" alt=""  /></td>
									<td width="150" align="left" valign="top" class="mailb">Mail :<br/><span class="mail"><a href="mailto:info@auromaxadvertising.in">info@auromaxadvertising.in</a></span> </td>
								  </tr>
								</table>							</td>
						  </tr>
					  </table>					</td>
				  </tr>
				  <tr>
					<td height="16" align="left" valign="top">&nbsp;</td>
				  </tr>
				  <tr>
					<td align="left" valign="top">
						<table width="900" border="0" cellspacing="0" cellpadding="0">
						  <tr>
							<td width="900" align="left" valign="top">
								<div id="smoothmenu1" class="ddsmoothmenu">
                        <ul>
                        <?php include("header.php"); ?>
                        </ul>
    <br style="clear: left" />
    </div>							</td>
						  </tr>
						</table>					</td>
				  </tr>
				  <tr>
				    <td height="4" align="left" valign="top"></td>
			      </tr>
				  <tr>
				    <td align="left" valign="top"><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="900" height="355" title="bnr">
                      <param name="movie" value="bnr.swf" />
                      <param name="quality" value="high" />
                      <embed src="bnr.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="900" height="355"></embed>
			        </object></td>
				  </tr>
				   <tr>
				    <td height="4" align="left" valign="top"></td>
			      </tr>

				</table>

			</td>
		  </tr>
		  <tr>
			<td align="left" valign="top">
				<table width="900" border="0" cellspacing="0" cellpadding="0">
				  <tr>
					<td align="left" valign="top">
						<table width="900" border="0" cellspacing="0" cellpadding="0">
						  <tr>
							<td align="center" valign="top" class="tbba style1" >VIDEO GALLERY</td>
						  </tr>
						  <tr>
							<td align="center" valign="top" class="tbbb">
								<table width="880" border="0" cellspacing="0" cellpadding="0">
  <tr>
                                <td align="center" valign="top">
								
								  
								    <!-- gallary portion start -->
								  								    
								   <table width="837" border="0" align="center" cellpadding="0" cellspacing="0">
					
					<tr><td width="887">
					
	<div align="center">
	
	<form action="" method="post" name="subcat_form" id="subcat_form">
	
	<input name="select_cat" type="hidden" value="All" />
	<?php /*?><table width="485" border="0">
  <tr>
    
    <td width="307"><select name="select_cat" id="select_cat" onChange="fnsubcategory(this.value)">
	  <option value="" <?php if($_GET['subcat_id']==""){ echo "selected" ; }?> >All</option> 
	  <?php
	  $sql2=mysql_query("select * from subcategory");
	  while($row2=mysql_fetch_array($sql2))
	  {
	  ?>
	  <option value="<?php echo $row2['subcat_id']?>"
	   <?php if($row2['subcat_id']==$_GET['subcat_id']){ echo "selected" ; }?> > <?php echo $row2['subcat_name']?>
	  </option>
	  <?php
	  }
	  ?>  
	  </select></td>
  </tr>
</table><?php */?>

	  
		<p>&nbsp;</p>
	</form>
					</div>
					</td></tr>
					
					
					<tr>
                      <td align="left" valign="top">
				<?php	
				$currentPage = $_SERVER["PHP_SELF"]."?subcat_id=".$_GET['subcat_id'] ;
				$maxRows_Recordset1 = 9;
				$pageNum_Recordset1 = 0;
				if (isset($_GET['pageNum_Recordset1']))
				{
				$pageNum_Recordset1 = $_GET['pageNum_Recordset1'];
				}
				
				$startRow_Recordset1 = $pageNum_Recordset1 * $maxRows_Recordset1;
				if($_GET['subcat_id']=="")
				{
				//and qty>0 
				$query_Recordset1 = "select * from product where status='video' order by product_id desc ";
				}
				else if($_GET['subcat_id']!="")
				{
				//and qty>0 
				$query_Recordset1 = "select * from product where subcat_id='".$_GET['subcat_id']."' and 
				status='video' order by product_id desc ";
				}
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
						if($totalRows_Recordset1 == 0)
						{
						 echo "<font size='+2' color='red'>No Data Available !</font>";
						}
			 			?>  
					    
					  
					  <table width="88%" border="0" cellspacing="0" cellpadding="0" align="center">
                      <tr>
						<?php
						$j=0;
						while($qdata = mysql_fetch_object($result))
	                    { 
						?>
							
							<td align="left" valign="top" width="813">
							<table width="160" border="0" cellspacing="0" cellpadding="0">
							<tr>
							  <td width="160" align="left" valign="top">
							    
							        <a href="<?php echo $qdata->details; ?>" rel="prettyPhoto[videos]">
							          
							<img src="<?php 
							  
							  $url = $qdata->details;
							  parse_str( parse_url( $url, PHP_URL_QUERY ) );
							  //echo $v;
							  echo "http://img.youtube.com/vi/".$v."/3.jpg";
							  //$img1="http://img.youtube.com/vi/".$qdata->details."/maxresdefault.jpg";
							  //echo $img1;
							   ?>" width="159" height="124" />						   
								<!-- <embed width="194" height="181"	src="http://www.youtube.com/v/XGSy3_Czz8k"
type="application/x-shockwave-flash"></embed>-->
							   </a>
							   
							   
							      <?php /*?> <a href="<?php echo $qdata->details; ?>" rel="prettyPhoto[videos]">
							  
							  <img src="<?php echo "product/".$qdata->image; ?>" alt="" class="productsimg" 
							  style="width:272px;height:148px;border-radius:10px;" /></a><?php */?>
							   
							   
							   </td>
							</tr>
                                <tr>
                                  <td align="center" valign="top">
								  
								  <span class="fs style2" ><?php echo $qdata->product_name ; ?></span>
                                   			<br />			
									<?php 
									
									$sql1 = "select * from size_price where product_id=".$qdata->product_id;
									$query_result1=mysql_query($sql1);
									$res1 = mysql_fetch_object($query_result1);
									
									/*echo       "Discounted Price             : $".
									$res1->price  ; */
									$originalprice=$res1->price;
									$discount=($res1->price*$qdata->discount)/100;			
									if($discount>0)
									{		
									?>			
									<span class="style83"  >
									<?php
									}
									else
									{
									?>
									<span class="style83" >
									<?php
									}
									?>
									
									<?php 
									
									$sql1 = "select * from size_price where product_id=".$qdata->product_id;
									$query_result1=mysql_query($sql1);
									$res1 = mysql_fetch_object($query_result1);
									
									//echo       "Original Price             : $".$res1->price ; ?>
									</span>
									<br />
									<span class="style82" ><?php 
									
									$sql1 = "select * from size_price where product_id=".$qdata->product_id;
									$query_result1=mysql_query($sql1);
									$res1 = mysql_fetch_object($query_result1);
									
									/*echo       "Discounted Price             : $".
									$res1->price  ; */
									$originalprice=$res1->price;
									$discount=($res1->price*$qdata->discount)/100;
									$net=$originalprice-$discount;
									//echo $originalprice;
									
									if($discount>0)
									{
									//echo       "Discounted Price:$".$net;
									}
									
									
									?>
									</span>
									
									
									</td>
                                </tr>
                                
                              </table>
						    </td>
                            <td align="left" valign="top" width="10">&nbsp;</td>
							<?php
								$j++;
								if($j%3==0)
								{
								echo '<table width="100%" border="0" cellspacing="0" cellpadding="0">
                                      <tr>' ;
								}
							
							}
							?>  
                             
							 
							 
                          </tr>
                        </table>
					  
					  <!-- paging -->
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

	color: #FFFFFF;

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
					  
					  <!-- paging -->
					  </td>
                    </tr>
                    
                    
                  </table>
		

								    
						            <!-- gallary end -->
								    
								    
								    
								    
						            </p></td>
                              </tr>
</table>							</td>
						  </tr>
						  <tr>
							<td align="left" valign="top" class="tbbc">&nbsp;</td>
						  </tr>
					  </table>					</td>
				  </tr>
				  <tr>
					<td height="25" align="left" valign="top">&nbsp;</td>
				  </tr>
			  </table>

			</td>
		  </tr>
		  <tr>
			<td align="left" valign="top" class="ftbg"><table width="900" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="450" align="left" valign="top">				
					<table width="450" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td align="left" valign="top">&copy; 2012, <span class="auro">Auromax Advertising Pvt.Ltd.</span> All Rights Reserved</td>
  </tr>
</table>

				</td>
                <td width="450" align="right" valign="middle" style="padding-top:4px;"><img src="images/m22.jpg" alt="" width="178" height="35" /></td>
              </tr>
            </table>			</td>
		  </tr>
		</table>

	</div>
</body>
</html>
