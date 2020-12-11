<?php session_start();
include('../gsproject.php');
$users=new Users('localhost', 'root', '', 'gsprojectdbm');

$result= $users->deleteUser($_GET['user_id']);
var_dump($result);
exit();

//header('Location:../admin/dashboard.php?$msg= successfully deleted');

?>
