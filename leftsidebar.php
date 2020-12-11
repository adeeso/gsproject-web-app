

<div>

  <ul style="line-height: 60px;">
    <!-- <div><li><a class="net" href="dashboard.php" style="color: white;text-decoration: none"><img src="pic/dashboard.png" alt="clock" width="30px" height="30px"> Dashboard</a></li></div>
    <div><li><a class="net" href="projectdonor.php" style="color: white;text-decoration: none"><img src="pic/product.png" alt="bag" height="30px" width="30px"> Donor</a></li></div>
   <div> <li><a class="net" href="projectresearcher.php"style="color: white;text-decoration: none"><img src="pic/shopping_cart.png" alt="cart" width="40px" height="40px"> Researcher</a></li></div>
   <div><li><a href="editaccount.php"style="color: white;text-decoration: none"><img src="pic/user.png" alt="user" id="user"> Edit Account</a></li></div> -->
    <?php
		$privs=$_SESSION['privileges'];
		if (count($privs)>0) {
			foreach ($privs as $key => $value) {
				//var_dump($value['task']);exit();
		
		?>
		<li>
			<a href="<?php echo $value['task']; ?>" style="text-decoration: none; list-style-type: none;color: white">
				<?php echo $value['label'] ?>

		</a>
	</li>
<?php


			}
		}
?>
	



    
   
  </ul>
</div>
