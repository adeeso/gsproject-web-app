<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>edit user account</title>
	<link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>


<?php


if (!empty($_POST)) {
include('../gsproject.php');

	$users=new Users("localhost","root","","gsprojectdbm");


	//var_dump($project);
	//exit();

 	 $userdetails=$users->editAccount($_POST['fullname'],$_POST['email'],$_POST['phone'],$_POST['password'],$_POST['user_id']);
header("location:http://localhost/gsproject/login.php?msg='successfully updated'");


}

?>





	<?php 
   include('adminheader.php');
	?>
	<div class="container-fluid">
		<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
		<div class="row" class="form-group">
			<div class="col-md-3 ml-3 mt-3" style="background-color: #0000a0; border-radius: 20px;text-align: left;">
				<?php 
                include('projectheader.php');
				 ?>
			</div>
			<div class="col-md-8  alert alert-primary ml-4 mt-4">
				<input type="hidden" value="<?php echo $_GET['user_id'] ?>" name="user_id">
				<h5>Change fullname</h5>
				<input type="text" name="fullname" class="form-control" value="" required>
				<h5>Change Email Address</h5>
				<input type="text" name="email" class="form-control" value="" required>
				<h5>Phone Number</h5>
				<input type="number" name="phone" class="form-control" value="" required>
				<h5>Password</h5>
				<input type="text" name="password" class="form-control" value="" required>
				<?php
           $department;
           $conn = new mysqli('localhost', 'root', '', 'gsprojectdbm');
           $query="SELECT * FROM department";
           ($qr=$conn->query($query));

    if($qr->num_rows > 0){
        while($row=$qr->fetch_assoc()){
            $department[$row['dept_name']]=$row['dept_name'];
        }
    }
    ?>
			<h5>Department</h5>
       <select name="dept_name" id="dept_name" class="form-control">
                    <option value='' id="prod" class="form-control">--Select--</option>
                        <?php if(!empty($department)){
                            foreach($department as $id=>$name){
                                echo "<option value='$id'>$name</option>";
                            }
                        } ?>
                    </select><br>
				<button type="submit" name="submit" value="submit" class="btn btn-primary">Update Account</button>
			</div>
			
</form>
	</div>
	
</body>
</html>