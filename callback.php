<?php

include ('adminheader.php'); // start session
?>
<div class="container-fluid">
	<h2>Payment Status</h2>
<div class="row">
	<div class="col-md-3">
		<?php include ('leftsidebar.php'); ?>
	</div>
<div class="col-md-9">
<?php 
   var_dump($_REQUEST);
   $userid=1;

   // create object of payment class and reference verifyPaystack
   $obj = new Payment;
   $output = $obj->verifyPaystack($_REQUEST['trxref'],$userid);

echo "<pre>";
print_r($output);
echo "</pre>";
   ?>
</div>
</div>

</div>





<?php
include('adminfooter.php')
?>