    <div id="reg_lft" style="padding-left:30px;">
	<p><font color="#333333" size="+2"><em>Transaction No. : </em></font> 
	<font color="#00CC99" size="+2">
	<?php echo $_GET['pur_id'] ;  ?>
	</font>
	<br /><br />
		 <a href="adminmain.php?m=4&p=45&pur_id=<?php echo $_GET['pur_id'] ; ?>" >
		 <input name="stp" type="button" value="" class="detail_btn" />
		 </a>
	<br />
			        <table width="100%" id="gradient-style">
					    <tr align="center">
						<th width="4%">Sl.</th>
						<th width="22%">Sub Category</th>
						<th width="16%">Product</th>
						<th width="10%">MRP</th>
						<th width="9%">Discount</th>
						<th width="5%">Qty</th>
						<!--<th width="7%">Size</th>-->
						<!--<th width="8%">Service Tax/Unit</th>
						<th width="9%">Shipping charge</th>-->
						<th width="9%">Price</th>
					  </tr>
				   <?php
				   $sql = "select * from purchase_details where purchase_id='".$_GET['pur_id']."'";
					$result = mysql_query($sql);
					$rows = mysql_num_rows($result);
					$i=1;
					while($qdata=mysql_fetch_array($result))
					{
					
						$rdo=mysql_query("select * from product where product_id=".$qdata['product_id']);
						while($RRR=mysql_fetch_array($rdo))
						{
						 $sbctid=$RRR['subcat_id'];
						}
						$drdo=mysql_query("select * from subcategory where subcat_id=".$sbctid);
						while($dRRR=mysql_fetch_array($drdo))
						{
						 $sbctnm=$dRRR['subcat_name'];
						}
				     ?>
					    <tr align="center">
						<td><?PHP echo $i ;?></td>
						<td><?PHP echo $sbctnm;?></td>
						<td><?PHP echo $qdata['product_name'] ;?></td>
						<?php /*?><td><?PHP echo $qdata['size'];?></td><?php */?>
						<td><?PHP echo $qdata['mrp'];?></td>
						<td><?PHP echo $qdata['discount'];?></td>
						<td><?PHP echo $qdata['quantity'];?></td>
						<?php /*?><td width="8%"><?PHP echo $qdata['service_tax_per_unit'];?></td>
						<td width="8%"><?PHP echo $qdata['shipping_charge'];?></td><?php */?>
						<td width="9%"><?PHP echo $qdata['total_price_row'];?></td>
						<?php
						$i++;
						}
						?>
				       </table>
</div>