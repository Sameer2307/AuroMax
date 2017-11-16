    <div id="reg_lft" style="padding-left:30px;">
	<p><font color="#333333" size="+2"><em>Transaction No. : </em></font> 
	<font color="#00CC99" size="+2">
	<?php echo $_GET['pur_id'] ;  ?>
	</font>
	<br /><br />
      <table width="998" border="0" align="center" cellpadding="0" cellspacing="0">
      	  
	 <tr>
          <td align="left" valign="top" class="bodyshadow">
		 <?php
		$sql=mysql_query("select * from  shipping_billing where purchase_id='".$_GET['pur_id']."'");
		$row_detail=mysql_fetch_array($sql);
		 ?>    
       <div id="reg_lft" style="padding-left:30px;">
       <br /><br />                       
	   <p><font color="#00CC99" size="+2">Shipping Address</font></p>
	   <table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="50%" valign="top"><strong class="style9">Recipient's First Name</strong></td>
        <td width="2%" valign="top"><strong>:</strong></td>
        <td width="63%" valign="top"><label>
          <?php echo $row_detail['ship_first_name']; ?>
        </label></td>
      </tr>
     
      <tr>
        <td height="15" valign="top"><img src="images/sp.png" height="8" width="1" /></td>
        <td valign="top"></td>
        <td valign="top"></td>
      </tr>
     
     
      <tr>
        <td width="35%" valign="top"><strong class="style9">Recipient's Last Name</strong>
		
		<strong><!--<img src="images/mandatory.png" width="5" height="6" />--></strong></td>
        <td width="2%" valign="top"><strong>:</strong></td>
        <td width="63%" valign="top"><label>
        <?php echo $row_detail['ship_last_name']; ?>
        </label></td>
      </tr>
     
     <tr>
        <td height="15" valign="top"><img src="images/sp.png" height="8" width="1" /></td>
        <td valign="top"></td>
        <td valign="top"></td>
      </tr>
     
     
      <tr>
        <td width="35%" valign="top"><strong class="style9">Address </strong></td>
        <td width="2%" valign="top"><strong>:</strong></td>
        <td width="63%" valign="top"><label>
       <?php echo $row_detail['ship_addr_1']; ?>
        </label></td>
      </tr>
     
      <tr>
        <td height="15" valign="top"><img src="images/sp.png" height="8" width="1" /></td>
        <td valign="top"></td>
        <td valign="top"></td>
      </tr>
     
     
      <tr>
      <tr>
        <td valign="top"><strong class="style9">City</strong></td>
        <td valign="top"><strong>:</strong></td>
        <td valign="top"><?php echo $row_detail['ship_city']; ?></td>
      </tr>
      
      
      
      <tr>
        <td height="15" valign="top"><img src="images/sp.png" height="8" width="1" /></td>
        <td valign="top"></td>
        <td valign="top"></td>
      </tr>
      
      
      
      <tr>
        <td valign="top"><strong class="style9">PIN</strong></td>
        <td valign="top"><strong>:</strong></td>
        <td valign="top"><?php echo $row_detail['ship_pin']; ?></td>
      </tr>
     
     
      <tr>
        <td height="16" valign="top"><img src="images/sp.png" height="8" width="1" /></td>
        <td valign="top"></td>
        <td valign="top"></td>
      </tr>
     
      <tr>
        <td valign="top"><strong class="style9">State</strong></td>
        <td valign="top"><strong>:</strong></td>
        <td valign="top"><?php echo $row_detail['ship_state']; ?></td>
      </tr>
      
     
      <tr>
        <td height="18" valign="top"><img src="images/sp.png" height="8" width="1" /></td>
        <td valign="top"></td>
        <td valign="top"></td>
      </tr>
	  <tr>
        <td valign="top"><strong class="style9">Country</strong></td>
        <td valign="top"><strong>:</strong></td>
        <td valign="top">
		<?PHP echo $row_detail['ship_country'] ;?>		</td>
      </tr>
      
     
      <tr>
        <td height="18" valign="top"><img src="images/sp.png" height="8" width="1" /></td>
        <td valign="top"></td>
        <td valign="top"></td>
      </tr>
	  
      <tr>
        <td valign="top"><strong class="style9">Phone</strong></td>
        <td valign="top"><strong>:</strong></td>
        <td valign="top"><?php echo $row_detail['ship_phone']; ?></td>
      </tr>
    </table>
                               
                               
                        </p>
                               
                        <span class="mandatory"></span></div>
                      <!--end form!-->      
                    <div id="regline"></div>
                    
                    <div id="reg_lft" style="padding-left:30px;">
          <br /><br />                       
	   <p><font color="#00CC99" size="+2">Billing Address</font></p>
	   <table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="50%" valign="top"><strong class="style9">Recipient's First Name</strong></td>
        <td width="2%" valign="top"><strong>:</strong></td>
        <td width="63%" valign="top"><label>
	 <?php echo $row_detail['bill_first_name']; ?>
        </label></td>
      </tr>
     
      <tr>
        <td height="15" valign="top"><img src="images/sp.png" height="8" width="1" /></td>
        <td valign="top"></td>
        <td valign="top"></td>
      </tr>
     
     
      <tr>
        <td width="35%" valign="top"><strong class="style9">Recipient's Last Name</strong>
		
		<strong><!--<img src="images/mandatory.png" width="5" height="6" />--></strong></td>
        <td width="2%" valign="top"><strong>:</strong></td>
        <td width="63%" valign="top"><label>
        <?php echo $row_detail['bill_last_name']; ?>
        </label></td>
      </tr>
     
     <tr>
        <td height="15" valign="top"><img src="images/sp.png" height="8" width="1" /></td>
        <td valign="top"></td>
        <td valign="top"></td>
      </tr>
     
     
      <tr>
        <td width="35%" valign="top"><strong class="style9">Address </strong></td>
        <td width="2%" valign="top"><strong>:</strong></td>
        <td width="63%" valign="top"><label>
       <?php echo $row_detail['bill_addr_1']; ?>
        </label></td>
      </tr>
     
      <tr>
        <td height="15" valign="top"><img src="images/sp.png" height="8" width="1" /></td>
        <td valign="top"></td>
        <td valign="top"></td>
      </tr>
     
     
      <tr>
	  
      <tr>
        <td valign="top"><strong class="style9">City</strong></td>
        <td valign="top"><strong>:</strong></td>
        <td valign="top"><?php echo $row_detail['bill_city']; ?></td>
      </tr>
      
      
      
      <tr>
        <td height="15" valign="top"><img src="images/sp.png" height="8" width="1" /></td>
        <td valign="top"></td>
        <td valign="top"></td>
      </tr>
      
      
      
      <tr>
        <td valign="top"><strong class="style9">PIN</strong></td>
        <td valign="top"><strong>:</strong></td>
        <td valign="top"><?php echo $row_detail['bill_pin']; ?></td>
      </tr>
     
     
      <tr>
        <td height="16" valign="top"><img src="images/sp.png" height="8" width="1" /></td>
        <td valign="top"></td>
        <td valign="top"></td>
      </tr>
     
      <tr>
        <td valign="top"><strong class="style9">State</strong></td>
        <td valign="top"><strong>:</strong></td>
        <td valign="top"><?php echo $row_detail['bill_state']; ?></td>
      </tr>
      
     
      <tr>
        <td height="18" valign="top"><img src="images/sp.png" height="8" width="1" /></td>
        <td valign="top"></td>
        <td valign="top"></td>
      </tr>
	  
	  <tr>
        <td valign="top"><strong class="style9">Country</strong></td>
        <td valign="top"><strong>:</strong></td>
        <td valign="top">
		<?PHP echo $row_detail['bill_country'] ;?>
		</td>
      </tr>
      
     
      <tr>
        <td height="18" valign="top"><img src="images/sp.png" height="8" width="1" /></td>
        <td valign="top"></td>
        <td valign="top"></td>
      </tr>
	  
      <tr>
        <td valign="top"><strong class="style9">Phone</strong></td>
        <td valign="top"><strong>:</strong></td>
        <td valign="top"><?php echo $row_detail['bill_phone']; ?></td>
      </tr>
    </table>
                               
                               
                        </p>
                               
                        <span class="mandatory"></span></div>
					 <?php
					// }
					 ?>
					 <div align="right" style="padding-right:50px;" >
					<!--<input name="cont" type="submit" value="Continue" class="signup" style="cursor:pointer;"/> -->
					 </div>
                   
				
			   </td>
                    </tr>
                    
                    
                  </table>