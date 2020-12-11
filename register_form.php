 <?php
include('gsproject.php'); 
 
        
          if ($_SERVER['REQUEST_METHOD']=='POST' && $_POST['submit']=='send') {
        
          $errors=array();

          $email=$_POST['email'];
          $password=$_POST['password'];
          $fullname=$_POST['fullname'];
          $phone=$_POST['phone'];
        
   
          // to validate fullname

          if (empty($_POST['fullname'])) {
            $errors ['fullname']= "<div class='text-danger'>Fullname field is required!</div>";
             }
          
          // to validate email
            if(empty($email)){
    $errors['email'] = "<div class='text-danger'>Email address field is required!</div>";
  }
  else if (! filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors['email']= "<div class='text-danger'>Invalid email address field </div>";
  }
  // to check for already existing email
  else if (!empty($email)) {
    $conn=new mysqli('localhost', 'root', '', 'gsprojectdbm');
    $query= "SELECT * FROM users WHERE user_email='$email'";
    $result= $conn->query($query);
    if($result->num_rows >= 1){
          $errors['email']= "<div class='text-danger'>Email already exist</div>";
  }
}

       // to validate password
         if (empty($password)) {
    $errors['password']="<div class='text-danger'>Password field is required!</div>";

  }else if (strlen($password)< 6) {
    $errors['password']="<div class='text-danger'>Your password is less than mininum number of 6 character!</div>";
  }     
   // to validate phone number
     if (empty($_POST['phone'])) {
     $errors ['phone']= "<div class='text-danger'>Phone number field is required!</div>";
       }

     // to validate for client
       //if (empty($_POST['client'])) {
     //$errors ['client']= "<div class='text-danger'>Client field cannot be empty</div>";
     //  }


          if (count($errors)==0) {
            //echo "successfully";
               
             
$users=new Users("localhost", "root", "", "gsprojectdbm");
         


       
   $users->register($_POST['fullname'], $_POST['email'], $_POST['phone'],$_POST['password'],$_POST['dept_name'],$_POST['role']);


    header('Location:login.php?msg=successfully registered');

  }
}

         ?>





<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title></title>
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="style1.css">

</head>
<body>



       <?php
       include('header.php');?>
       <div class="row" style="height: 30px">
         <div class="col"></div>
       </div>
         <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
              <h3 class="alert alert-success" style="text-align: center">Registration Form</h3>
              </div>
              <div class="col-md-4"></div>
          </div>

  
  
          


      	<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
          
          <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4 form-group">
			<label for="fullname">Fullname</label>
      <input type="text" name="fullname" value="" id="user" class="form-control" value="
      <?php 
          if(empty($_POST['fullname'])){ 
            echo $_POST['fullname']; } 
          ?>">

              <?php
        if (isset($errors['fullname'])) {
        echo $errors['fullname'];
      }
    ?>
    </div>
    <div class="col-md-4"></div>
    </div>

    <div class="row">
      <div class="col-md-4"></div>
      <div class="col-md-4 form-group">
			<label for="Email">Email Address</label>
			<input type="text" name="email" value="" id="add" class="form-control" value="
      <?php 
          if(empty($_POST['email'])){ 
            echo $_POST['email']; } 
          ?>">
           <?php
         if (isset($errors['email'])) {
        echo $errors['email'];
      }
    ?>
    </div>
    <div class="col-md-4"></div>
  </div>

       <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4 form-group">
      <label for="phone">Phone number</label>
			<input type="number" name="phone" value="" id="pass" class="form-control" value="">
              <?php
        if (isset($errors['phone'])) {
        echo $errors['phone'];
      }
    ?>
    </div>
    <div class="col-md-4"></div>
  </div>

  <div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4 form-group">
      <label for="password">Password</label>
      <input type="password" name="password" value="" id="passworde" class="form-control" value="">
              <?php
        if (isset($errors['password'])) {
        echo $errors['password'];
      }
    ?>
    </div>
    <div class="col-md-4"></div>
  </div>

       <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4 form-group">
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
			<label for="dept" style="display: none;" class="addmore">Department</label>
       <select name="dept_name" id="dept_name" class="form-control addmore" style="display: none;">
                    <option value='' id="prod" class="form-control addmore">--Select--</option>
                        <?php if(!empty($department)){
                            foreach($department as $id=>$name){
                                echo "<option value='$id'>$name</option>";
                            }
                        } ?>
                    </select>
       <?php
        if (isset($cust['dept'])) {
        echo $cust['dept'];
      }
    ?>
 </div>
 <div class="col-md-4"></div>
</div>

         <div class="row">
          <div class="col-md-4"></div>
         <div class="col-md-4 form-group">    
          <label for="researcher">Researcher</label>
      <input type="radio" name="role" value="3" id="cus">
      <label for="donor">Donor</label>
      <input type="radio" name="role" value="2" id="ven">
    </div>
    <div class="col-md-4"></div>
  </div>

<div class="row">
  <div class="col-md-4 form-group"></div>
  <div class="col-md-4">
  <button type="submit" name="submit" value="send" class="btn btn-outline-primary" id="sub" >Submit</button>
		</div>
    <div class="col-md-4"></div>
    </div>
    </form>
  
 
 

<script src="js/jquery.js" type="text/javascript"></script>
<script type="text/javascript">
  //for payment show
  $('#but').mouseenter(function() {
    $('#tooth').show();
  });
  $('#but').mouseleave(function() {
    $('#tooth').hide();
  });
  

// adding to vendor in the modal form
$('#cus').mouseenter(function() {
  $('.addmore').slideDown();
  $('#ven').click(function(){
$('.addmore').slideUp();
  });
});
</script>



<script  type="text/javascript">
//like our page on fb
t=1;
function linkhere() {
if (document.location='https://facebook.com/gsproject/') {
  t++;
  document.getElementById('fb').innerHTML=t+'likes';
} 
}


  //scrollTop button
  mybutton=document.getElementById('button');
// when user scrolls down 20px from the top of the document, show the button
  window.onscroll=function() {
    scrollFunction()
  };
function scrollFunction() {
  
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop>20) {
    button.style.display="block";
  }else{ button.style.display="none";

  }
}
//when user clicks on the button, scroll to the top of the document

function topfunction() {
  document.body.scrollTop=0;

  document.documentElement.scrollTop=0;

  window.scroll(0);
  
}

</script>


     <?php
include('footer.php');
      ?>

</body>
</html>