<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
	
<?php 
include('adminheader.php');
//include('../gsproject.php');

$init= new Project("localhost", "root", "", "gsprojectdbm");
	$project= $init->getUsersproject();
	if(count($project)>0){
	foreach($project as $key => $values){
?>
<div class="container-fluid">
	<div class="col">
	<a href=""><embed src="userfiles/<?php echo $values['project_file'] ?>" >

		<div>
			<span><?php echo $values['dept_id'] ?></span>
			<span><?php echo $values['project_topic'] ?></span>

		</div>
	</a>
		</div>

	
	
<?php 
}
}
 ?>


</div>

<?php 
include('adminfooter.php');
?>
</body>
</html>