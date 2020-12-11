<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Login</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="style1.css">

</head>
<body>
	<?php session_start();
include('gsproject.php');
       


$gsoul=array();

if ($_SERVER['REQUEST_METHOD']=='POST' && $_POST['submit']=='send') {
  
  $email=$_POST['email'];
  $password=$_POST['password'];
   
        // to vaildate email

  if(empty($email)){
    $gsoul['email'] = "<div class='text-danger'>Email address field is required!</div>";
  }else if (! filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $gsoul['email']= "<div class='text-danger'>Invalid email address field </div>";
  }

  // to validate password field

  if (empty($password)) {
    $gsoul['password']="<div class='text-danger'>password field is required!</div>";

  }else if (strlen($password)< 6) {
    $gsoul['password']="<div class='text-danger'>your password is less than mininum number of 6 character!</div>";
  }

  // to check if there is no validate error

  if (count($gsoul)==0) {
    
    // create object of authentication class
    $obj =new Users('localhost', 'root', '', 'gsprojectdbm');
    $output=$obj->login($email, $password);
 
  }

} 
    ?>


<!-- <?php

//$users=new Users('localhost', 'root', '', 'gsprojectdbm');

//checking for error
//if (!empty($_POST)) {
	//if (empty($_POST['email']) || empty($_POST['password'])) {
	//	$errormsg="email and password are both required to login";
		//to login successfully to our dashboard.php
	//}else{
		//$userdetail=$users->login($_POST['email'], $_POST['password']);

		//if (empty($userdetail)) {
			//if (isset($_COOKIE['regd_user'])) {
				//echo $_COOKIE['regd_user']." it seems you are having difficulty logging in. Sorry about that.";
	//		}
			//else{
				//$errormsg="invalid credentials.please retry";
		//}

		//}else{
		//$_SESSION['userid']=$userdetail['user_id'];
		//$_SESSION['roleid']=$userdetail['role_id'];
    //$_SESSION['useremail']=$userdetail['user_email'];
    //$_SESSION['project_id']=$userdetail['project_id'];


  
			// redirect to dashboard
    //header("Location: http://localhost/gsproject/admin/dashboard.php");
      // exit();
		//}
	//}
//}
//?>
 -->




	

<?php
include('header.php');
?>



          <div class="row">
          	<div class="col-md-4"></div>
          	<div class="col-md-4">
          		<?php 
             //to successfully registered
              if (!empty($_GET['msg'])) {
 	          echo "<div class='alert alert-success'>".$_GET['msg']."</div>";
                  }
                  ?>
              </div>
              <div class="col-md-4"></div>
          </div>
			<div class="row" style="height: 60px">
            <div class="col-md-4"></div>
            <div class="col-md-4">
            	<?php
                if (isset($output)) {
				echo $output;
			}
            	?>
            </div>
            <div class="col-md-4"></div>

        </div>


        <div class="row">
        	<div class="col-md-4"></div>
        	<div class="col-md-4">
        		<h5 class="alert alert-primary" style="text-align: center;">LOGIN FORM</h5>
        	</div>
        	<div class="col-md-4"></div>

        </div>



      	<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
          <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4 form-group">
              <label for="email">Email Address</label>
              <input type="text" name="email" value="" id="email" class="form-control">

              <?php

      if (isset($gsoul['email'])) {
        echo $gsoul['email'];
      }

      ?>  
            </div>
            <div class="col-md-4"></div>
          </div>

          <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4 form-group">
              <label for="Password">Password</label>
              <input type="password" name="password" value="" id="password" class="form-control">

              <?php
              if (isset($gsoul['password'])) {
                echo $gsoul['password'];
              }

              ?>
            </div>
            <div class="col-md-4"></div>
          </div>

               <div class="row">
               	<div class="col-md-4"></div>
               	<div class="col-md-4 form-group">
			<p><span><input type="checkbox" name=""></span><span> Remember me</span></p>
            <a href="#">forgot your password ?</a>
        </div>
            <div class="col-md-4"></div>
    </div>

      <div class="row">
      	<div class="col-md-4"></div>
      	<div class="col-md-4 form-group">
        <button type="submit" name="submit" value="send" class="btn btn-outline-primary form-control">Submit</button>
      </div>
      <div class="col-md-4"></div>
  </div>

</form>

<div class="row" style="height: 100px">
	<div class="col">
	</div>
</div>

<?php
include('footer.php');
?>



</body>
</html>