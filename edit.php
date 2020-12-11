<?php
// echo "<pre>";
// print_r($_POST);
// echo "</pre>";

// echo "<pre>";
// print_r($_GET);
// echo "</pre>";

//if ($_SERVER['REQUEST_METHOD']=='POST' && $_POST['submit']=='submit') {
	


if (!empty($_POST)) {
include('../gsproject.php');

	$project=new Project("localhost","root","","gsprojectdbm");


	//var_dump($project);
	//exit();

 	 $userdetails=$project->editProject($_POST['project_topic'],$_POST['project_year'],$_POST['dept_name'],$_POST['project_amount'],$_POST['project_abstract'],$_POST['project_id']);
header("location:http:../admin/dashboard.php?msg='successfully updated'");


}

 
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>edit</title>
	<link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
	<?php
   include('adminheader.php')
	?>

	<div class="container-fluid">
		<div class="row">
			<div class="col-md-2 ml-3 mt-3"style="background-color: #0000a0; border-radius: 20px;text-align: left;">
				<?php
               include('leftsidebar.php.')
				?>
			</div>
			<div class="col-md-9 alert alert-success ml-4 mt-4" style="border-radius: 20px">
				<form action=" <?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">

		<input type="hidden" value="<?php echo $_GET['project_id'] ?>"  name="project_id">
	
	<div class="form-group">
<label for="topic">Topic</label>
<input type="text" name="project_topic" placeholder=" project topic" value="" class="form-control">
</div>

	<div class="form-group">
	<label for="year">Project Year</label>
	<select name="project_year" >
						<option>---selected---</option>
						<?php
						for ($i=1990; $i<=2020; $i++) { 
						echo "<option value='$i'>$i</option>";
						}

						?>
					</select>
	</div>


<div class="form-group">
	<label for="department">Department</label>
			<?php
           $department;
           $conn = new mysqli('localhost', 'root', '', 'gsprojectdbm');
           $query="SELECT * FROM department";
           ($qr=$conn->query($query));

    if($qr->num_rows > 0){
        while($row=$qr->fetch_assoc()){
            $department[$row['dept_id']]=$row['dept_name'];
        }
    }
    ?>

    <select name="dept_name" id="dept_name">
                    <option value='<?php echo $userdetail['dept_name']; ?>' id="prod">--Select--</option>
                        <?php if(!empty($department)){
                            foreach($department as $id=>$name){
                                echo "<option value='$id'>$name</option>";
                            }
                        } ?>
                    </select>
                    
	
</div>

<div class="form-group">
	<label for="amount">Project Amount</label>
	<input type="text" name="project_amount" placeholder="0.00" value="" class="form-control"><br>
</div>

<div class="form-group">
	<label for="abstract">Project Abstract</label>
	<textarea name="project_abstract" placeholder="abstract" value="" class="form-control"></textarea><br>
</div>


	<button type="submit" name="submit" class="btn btn-primary">Update</button>

</form>


			</div>
		</div>
	
</div>
</body>
</html>