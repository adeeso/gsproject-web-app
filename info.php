<?php 
$department=[];
$faculty_id=$_GET['faculty_id'];

$conn = new mysqli('localhost', 'root', '', 'gsprojectdbm');

$query="SELECT * FROM department WHERE faculty_id ='$faculty_id'";

    $qr=$conn->query($query);

    if($qr->num_rows > 0){
        while($row=$qr->fetch_assoc()){
            $department[]=$row;
        }
    }
echo json_encode($department);
?>