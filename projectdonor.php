<?php
include('adminheader.php');
// include('../gsproject.php');



 if ($_SERVER['REQUEST_METHOD']=='POST' && $_POST['submit']=='submit') {


          $errors=array();

          $topic=$_POST['topic'];
          $year=$_POST['year'];
          $dept_name=$_POST['dept_name'];
          $amount=$_POST['amount'];
        
   
          // to validate fullname

          if (empty($_POST['topic'])) {
            $errors ['topic']= "<div class='text-danger'>topic field is required!</div>";
             }

             if (empty($_POST['year'])) {
            $errors ['year']= "<div class='text-danger'>year field is required!</div>";
             }

             if (empty($_POST['dept_name'])) {
            $errors ['dept_name']= "<div class='text-danger'>department field is required!</div>";
             }
             


          if (empty($_POST['format'])) {
            $errors ['format']= "<div class='text-danger'>format field is required!</div>";
             }

          if (empty($_POST['amount'])) {
            $errors ['amount']= "<div class='text-danger'>amount field is required!</div>";
             }

          

       
  
                    
                    if (count($errors)==0) {
           // var_dump($errors);
           // exit();
 	$project=new Project("localhost","root","","gsprojectdbm");

    $project->uploadProject($_POST['topic'], $_POST['year'], $_POST['dept_name'],
    	[$filename = $_FILES['newfilename']['name']], $_POST['format'],$_POST['amount'], $_POST['abstract'],$_SESSION['userid']);

 header('Location:dashboard.php?msg=successfully registered');
}
}
?>






<div class="row">
	<div class="col-md-6"></div>
	<div class="col-md-6" style="color: blue;text-align: right; padding-left: 100px;font-size: 20px">
		
	</div>

</div>
<div class="container-fluid">
	
<div class="row">
	<div class="col-md-3 ml-3 mt-3" style="background-color: #0000a0; border-radius: 20px;text-align: left;">
		<?php include ('leftsidebar.php'); ?>
	</div>
<div class="col-md-8 alert alert-primary ml-4 mt-4" style="border-radius: 20px">
                

                <h4>Upload Your Project </h4>
	
	<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post" enctype="multipart/form-data">
		<table border="0" width="100%" cellpadding="8" cellspacing="0">
			<tr>
				<td align="top" width="100">
					<p align="left"><b>Topic:</b></p>
				</td>
				<td align="top" width="400px">
					<input type="text" name="topic" value="" maxlength="100" class="form-control" >

              <?php
        if (isset($errors['topic'])) {
        echo $errors['topic'];
      }
      ?>
				</td>

				<td>
				
					 <span onmouseover="document.getElementById('div1').style.display='block';" onmouseout="document.getElementById('div1').style.display='none';"><img src="pic/icons8_16.png" ></span><span id="div1" style="display: none">Topic of the project you want to submit/edit</span>
				</td>	
			</tr>
		</table>
		<!-- end of naming topic for project -->

		<table border="0" width="100%" cellpadding="8" cellspacing="0">
			<tr >
				<td align="top" width=100px>
					<span align="left"><b>Year</b></span>
				</td>
				<td align="top">
					<select name="year" >
						<option>---selected---</option>
						<?php
						for ($i=1990; $i<=2020; $i++) { 
						echo "<option value='$i'>$i</option>";
						}

						?>
					</select>

              <?php
        if (isset($errors['year'])) {
        echo $errors['year'];
      }
      ?>
				</td>
			</tr>
		</table>
		<!-- end of selecting year -->

		<table border="0" width="100%", cellspacing="0" cellpadding="8">
			<tr >
				<td align="top" width=100px>
				<span align="left"><b>Department</b></span>
				</td>
				<td align="top">
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
                    <option value='' id="prod">--Select--</option>
                        <?php if(!empty($department)){
                            foreach($department as $id=>$name){
                                echo "<option value='$id'>$name</option>";
                            }
                        } ?>
                    </select>
                    

              <?php
        if (isset($errors['dept_name'])) {
        echo $errors['dept_name'];
      }
      ?>
				</td>
				<td align="top" width="580px">
					<a onmouseover="document.getElementById('div2').style.display='block';" onmouseout="document.getElementById('div2').style.display='none';"><img src="pic/icons8_16.png" ></a>
					<div id="div2" style="display: none">Department you enter needs to be recognized department by our system. Please make sure that you choose department that are given as an option.
						</div>
					
				</td>
			</tr>
		</table>
		<!-- end of selecting dept -->


		<table border="0" width="100%", cellspacing="0" cellpadding="8">
			<tr>
				<td align="top" width="100px">
					<span><b>Project File</b></span>	
				</td>

				<td align="top" width="900px">
			     	<input type="file" name="projectfile"  id="projectfile" >

         
			     </td>
			 </tr>
			</table>
			     <!-- end of project file -->
			     <table>
			     	<tr>
			     	<td align="top" width="300px"><b>Project Type</b></td>
			    
			     <td align="top" width="85%">
			     	<label for="pdf"> Pdf</label>
			     	<input type="radio" name="format" value="pdf">
			     	<label for="msword">Ms_word</label>
			     	<input type="radio" name="format" value="Ms_word">
	
				</td>
			</tr>
			
		</table>
		<!-- end of project file -->

		<table border="0" width="100%", cellspacing="0" cellpadding="8">
			<tr>
				<td align="top" width=100px>
					<span><b>Project Amount</b></span>	
				</td>

				<td align="top" width="280px">
			    <div class="input-group mb-3">
             <div class="input-group-prepend">
             <span class="input-group-text alert-secondary">N</span>
              </div>
               <input type="text" name="amount"  placeholder="0.00">
             </div>

              <?php
        if (isset($errors['amount'])) {
        echo $errors['amount'];
      }
      ?>
				</td>
				<td align="top" width="640px">
					<span onmouseover="document.getElementById('div5').style.display='block';" onmouseout="document.getElementById('div5').style.display='none';"><img src="pic/icons8_16.png" ></span><span id="div5" style="display: none">The project amount is already at a fixed 
					price of N3000 naira only</span>
				</td>
			</tr>
			
		</table>
		<!-- end of project amount
 -->

<table border="0" width="100%", cellspacing="0" cellpadding="8">
			<tr>
				<td align="top" width=100px>
					<span><b>Project Abstract</b></span>	
				</td>
				<td>
					<textarea data-autogrow cols="70" rows="6" style="height:auto; overflow:hidden; line-height:1" class="form-control" name="abstract"></textarea>
				</td>

				<td align="top" width="350px">
					<span onmouseover="document.getElementById('div3').style.display='block';" onmouseout="document.getElementById('div3').style.display='none';"><img src="pic/icons8_16.png" ></span><span id="div3" style="display: none">submit your project abstract and chapter one of your project for preview</span>

              <?php
        if (isset($errors['abstract'])) {
        echo $errors['abstract'];
    }
    ?>
				</td>
			</tr>
			
		</table>
		
<input type="submit" name="submit" value="submit" class="btn btn-outline-primary">

	</form>



</div>
</div>

<div class="row">
	<div class="col" style="height: 100px">
		
	</div>
</div>

<div class="row">
	<div class="col">
<?php include ('adminfooter.php'); ?>
</div>
</div>

</div>