<ul class="nav">
<?php
	if ($menu==1) 
	{ 		
	?>
	<li><a href="adminmain.php?m=1&p=11" <?php if($_GET['p']==11){ ?> style="font-weight:bold;" <?php } ?> class="last" >Password</a></li>
	<?php
	} 
?>

    <?php 
	if($menu==2) 
	{ 
	?>				
	<?php /*?><li><a href="adminmain.php?m=2&p=21" <?php if($_GET['p']==21){ ?> style="font-weight:bold;" <?php } ?> >Brand</a></li>
	<li><a href="adminmain.php?m=2&p=22" <?php if($_GET['p']==22){ ?> style="font-weight:bold;" <?php } ?> >Category</a></li><?php */?>
	<li><a href="adminmain.php?m=2&p=23" <?php if($_GET['p']==23){ ?> style="font-weight:bold;" <?php } ?> >Category</a></li>
	<li><a href="adminmain.php?m=2&p=24" <?php if($_GET['p']==24 || $_GET['p']==25)
	{ ?> style="font-weight:bold;" <?php } ?> class="last" >PHOTO GALLARY</a></li>
	
	<li><a href="adminmain.php?m=2&p=27" <?php if($_GET['p']==27 || $_GET['p']==25)
	{ ?> style="font-weight:bold;" <?php } ?> class="last" >VIDEO GALLARY</a></li>
	<?php /*?><li><a href="adminmain.php?m=2&p=26" <?php if($_GET['p']==26){ ?> style="font-weight:bold;" <?php } ?> >Shipping</a></li><?php */?>
	<?php
	} 
	
	
	?>
	
	<?php 
	if($menu==3) 
	{ 
	?>
	<?php /*?><li><a href="adminmain.php?m=3&p=31" <?php if($_GET['p']==31){ ?> style="font-weight:bold;" <?php } ?> >Registered</a></li><?php */?>
	<?php /*?><li><a href="adminmain.php?m=3&p=32" class="last" <?php if($_GET['p']==32){ ?> style="font-weight:bold;" <?php } ?> >
	Guest</a></li><?php */?>
	<?php
	if($_GET['p']==33)
	{
	?>
	<?php /*?><li><a href="#" <?php if($_GET['p']==33){ ?> style="font-weight:bold;" <?php } ?> >Transaction</a></li><?php */?>
	<?php
	}
	?>
	<?php
	} 
	?>
	
	<?php 
	if($menu==4) 
	{ 
	?>
	<li><a href="adminmain.php?m=4&p=43" <?php if($_GET['p']==43){ ?> style="font-weight:bold;" <?php } ?> >All</a></li>
	<li><a href="adminmain.php?m=4&p=41" <?php if($_GET['p']==41){ ?> style="font-weight:bold;" <?php } ?> >Delivered</a></li>
	<li><a href="adminmain.php?m=4&p=42" <?php if($_GET['p']==42){ ?> style="font-weight:bold;" <?php } ?> >Not Delivered</a></li>
	<?php
	} 
	?>
</ul>
            
			<?php
			if($_GET['p']==33 || $_GET['p']==34)
			{
			?>
			<a href="adminmain.php?m=3&p=33&id=<?php echo $_GET['id'] ; ?>"  
			<?php 
			if ($_GET['p']==33) { echo 'class="notlink"' ; }
			else {  echo 'class="link"' ; } 
			?> >Delivered</a>
			<a href="adminmain.php?m=3&p=34&id=<?php echo $_GET['id'] ; ?>" 
			<?php 
			if ($_GET['p']==34) { echo 'class="notlink"' ; }
			else {  echo 'class="link"' ; } 
			?>>Not Delivered</a>
			
			<?php
			}
			?>
			
			<?php /*?>
			<?php
			if($_GET['p']==11 || $_GET['p']==12 || $_GET['p']==13)
			{
			?>
			<a href="mainmenu.php?m=1&p=11" 
			<?php 
			if ($_GET['p']==11) { echo 'class="notlink"' ; }
			else {  echo 'class="link"' ; } 
			?>>New Agent</a>
			<a href="mainmenu.php?m=1&p=12" 
			<?php 
			if ($_GET['p']==12) { echo 'class="notlink"' ; }
			else {  echo 'class="link"' ; } 
			?>>Agent List</a>
			<a href="#" 
			<?php 
			if ($_GET['p']==13) { echo 'class="notlink"' ; }
			else {  echo 'class="link"' ; } 
			?>>Update Agent</a>
			<?php
			}
			?>
			
			<?php
			if($_GET['p']==24 || $_GET['p']==21 || $_GET['p']==25)
			{
			?>
			<a href="mainmenu.php?m=2&p=24" 
			<?php 
			if ($_GET['p']==24) { echo 'class="notlink"' ; }
			else {  echo 'class="link"' ; } 
			?>>New Branch</a>
			<a href="mainmenu.php?m=2&p=21" 
			<?php 
			if ($_GET['p']==21) { echo 'class="notlink"' ; }
			else {  echo 'class="link"' ; } 
			?>>Branch List</a>
			<a href="#" 
			<?php 
			if ($_GET['p']==25) { echo 'class="notlink"' ; }
			else {  echo 'class="link"' ; } 
			?>>Update Branch</a>
			<?php
			}
			?>
			
			<?php
			if($_GET['p']==26 || $_GET['p']==22 || $_GET['p']==27)
			{
			?>
			<a href="mainmenu.php?m=2&p=26" 
			<?php 
			if ($_GET['p']==26) { echo 'class="notlink"' ; }
			else {  echo 'class="link"' ; } 
			?>>New User</a>
			<a href="mainmenu.php?m=2&p=22" 
			<?php 
			if ($_GET['p']==22) { echo 'class="notlink"' ; }
			else {  echo 'class="link"' ; } 
			?>>User List</a>
			<a href="#" 
			<?php 
			if ($_GET['p']==27) { echo 'class="notlink"' ; }
			else {  echo 'class="link"' ; } 
			?>>Update User</a>
			<?php
			}
			?><?php */?>