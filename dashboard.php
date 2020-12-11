<?php
//. "<br >How may we help you today?";
include('adminheader.php');

?>
<div class="row">
	<div class="col-md-6"></div>
	<div class="col-md-6" style="color: blue;text-align: left; padding-left: 100px;font-size: 20px">
		
	</div>

</div>
<div class="container-fluid">
	
<div class="row">
	<div class="col-md-3" style="background-color: #0000a0; border-radius: 20px;text-align: left" >
		<?php include ('leftsidebar.php'); ?>
		
	</div>
	
	<div class="col-md-8 alert alert-primary  ml-4 mt-4" style="border-radius: 20px">
	<a href="projectdonor.php"><button type="submit" class="btn btn-primary" name="submit" value="submit">Add Project</button></a>

			<table border="1">
				<thead>
			<tr>
				<th>s/n</th>
				<th>Project topic</th>
				<th>Project year</th>
				<th>Department Id</th>
				<th>Project file</th>
				<th>Project Amount</th>
				<th>Project Abstract</th>
				<th>Action</th>



			</tr>
		</thead>

		<tbody>
			<?php
			$objproject=new Project("localhost", "root", "", "gsprojectdbm");
			$project= $objproject->getUsersproject(); //var_dump($project); exit();
			if (count($project)>1) {
				$kounter=1;
				foreach ($project as $key => $value) {
					
     //  var_dump($value,$key); exit();
			?>
			<tr>
				<td><?php echo $kounter++; ?></td>
				<td><?php echo $value['project_topic']; ?></td>
				<td><?php echo $value['project_year'] ?></td>
				<td><?php echo $value['dept_id'] ?></td>
				<td><embed src="http://localhost/gsproject/admin/userfiles/<?php echo $value['project_file'] ?>" height="120px" type=></td></embed>
				<td><?php echo $value['project_amt'] ?></td>
				<td><?php echo $value['project_abstract'] ?></td>
                  <td>
					<a href="edit.php?project_id=<?php echo $value['project_id'];?>">Edit</a>
					<a href="delete.php?project_id=<?php echo $value['project_id'];?>">Delete</a>
				</td>
			</tr>
			<?php
       }
   }
   ?>
		</tbody>

			</table><br>






			<table border="1">
				<thead>
			<tr>
				<th>s/n</th>
				<th>fullname</th>
				<th>Email</th>
				<th>Phone number</th>
				<th>Department</th>
				<th>Roles</th>
				<th>Action</th>



			</tr>
		</thead>

		<tbody>
			<?php
			$objusers=new Users("localhost", "root", "", "gsprojectdbm");
			$users= $objusers->getallUsers(); //var_dump($project); exit();
			if (count($users)>1) {
				$kounter=1;
				foreach ($users as $key => $value) {
					
     //  var_dump($value,$key); exit();
			?>
			<tr>
				<td><?php echo $kounter++; ?></td>
				<td><?php echo $value['user_fullname']; ?></td>
				<td><?php echo $value['user_email'] ?></td>
				<td><?php echo $value['user_phone'] ?></td>
				<td><?php echo $value['user_dept'] ?></td>
				<td><?php echo $value['role_id'] ?></td>

                  <td>
					<a href="editaccount.php?user_id=<?php echo $value['user_id'];?>">Edit</a>
					<a href="delete.php?user_id=<?php echo $value['user_id'];?>">Delete</a>
				</td>
			</tr>
			<?php
       }
   }
   ?>
		</tbody>

			</table>
		</div>
	</div>


</div>








</div>
</div>
<div class="row">
	<div class="col">
<?php include ('adminfooter.php'); ?>
</div>
</div>

</div>


</body>
</html>