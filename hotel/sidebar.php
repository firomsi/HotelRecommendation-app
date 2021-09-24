<div style="width:10%;background:#34495e;min-height: 1000px;color:white;padding:50px;float:left;">

<?php
	if($_SESSION['role']!='admin'){?><a style="color:white;background:red;display: block;width:100%;padding:5px 10px;" href="add-new-hotel.php">Add new hotel </a>   <br/><?php }else{
	
	?>
	<a style="color:white;background:red;display: block;width:100%;padding:5px 10px;" href="owners.php">Show Owners </a>  <?php }
	?>
	<br>

<a style="color:white;background:red;display: block;width:100%;padding:5px 10px;" href="all-hotel.php">All Hotels </a> 

 

</div>