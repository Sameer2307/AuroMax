			<li <?php if ($menu==2) { echo 'class="active"'; } ?>><span><span><a href="adminmain.php?m=2">Gallary</a></span></span></li>
			<?php /*?><li <?php if ($menu==3) { echo 'class="active"'; } ?>><span><span><a href="adminmain.php?m=3">Customers</a></span></span></li>
			 <li <?php if ($menu==4) { echo 'class="active"'; } ?>><span><span><a href="adminmain.php?m=4">Reports</a></span></span></li>
			<li <?php if ($menu==1) { echo 'class="active"'; } ?>><span><span><a href="adminmain.php?m=1&p=11">Setting</a></span></span></li><?php */?>
			<li ><span><span><a href="logout.php">Logout</a></span></span></li>
			
			
			<?php
			if($menu==1)
			$header_text="Setting" ;
			if($menu==2)
			$header_text="Product" ;
			if($menu==3)
			$header_text="Customers" ;
			if($menu==4)
			$header_text="Reports" ;
			?>