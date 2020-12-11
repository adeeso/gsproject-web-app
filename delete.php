<?php session_start();
// echo "<pre>";
// print_r($_GET);
// echo "<pre>";
include('../gsproject.php');
$project=new Project('localhost', 'root', '', 'gsprojectdbm');

$result= $project->deleteProject($_GET['project_id']);
//var_dump($result);
//exit();

header('Location:../admin/dashboard.php?$msg= successfully deleted');

?>
