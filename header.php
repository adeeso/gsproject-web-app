<?php 
    ?> 
 <div class="container-fluid">
		
		<div class="row" id="header">
			<div class="col-md-8" style="color: white">
				<p><span>Call Us:</span><span> +2349 028 196 095 ,</span><span>  +2347 043 126 523  </span></p>
			</div>



			<div class="col-md-4 pt-1">
				
			<form action="" method="post" class="form-inline">
    <input type="text" name="search" value="" placeholder="what are you looking for.." class="btn btn-primary form-control" onkeypress="showResult(this.value)" style="width: 450px; color: white">
    
    </form>
	
			

			</div>
		</div>
		
		
		<div class="row" id="menu">
	<div class="col-md-7 pt-1">
		<a href="#" id='top'>
			<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-envelope" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2zm13 2.383l-4.758 2.855L15 11.114v-5.73zm-.034 6.878L9.271 8.82 8 9.583 6.728 8.82l-5.694 3.44A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.739zM1 11.114l4.758-2.876L1 5.383v5.73z"/>
</svg><span> support@gsproject.com</span>
		</a>
			</div>
			

			<div class="col-md-4 pt-1"  id="livesearch">
	  
    </div>	
	</div>



		<div class="row" id='bar'>
			<div class="col-md-10">
				<nav class="navbar navbar-expand" id="banner">
  <h2 class="navbar-brand" >GsProject</h2>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown" style='justify-content:center;'>
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" id="hom" href="index.php">Home<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Myproject.php">Project Topics</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Blog</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Department
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Accounting</a>
          <a class="dropdown-item" href="#">Agric Engineering</a>
          <a class="dropdown-item" href="#">Agriculture</a>
          <a class="dropdown-item" href="#">Architecture</a>
          <a class="dropdown-item" href="#">Banking and Finance</a>
          <a class="dropdown-item" href="#">Biochemistry</a>
          <a class="dropdown-item" href="#">Biology</a>
          <a class="dropdown-item" href="#">Buiding Technology</a>
          <a class="dropdown-item" href="#">Business Administration</a>
          <a class="dropdown-item" href="#">Chemical Engineering</a>
          <a class="dropdown-item" href="#">Chemistry</a>
          <a class="dropdown-item" href="#">Civil Engineering</a>
          <a class="dropdown-item" href="#">Computer Engineering</a>
          <a class="dropdown-item" href="#">Computer Science</a>
          <a class="dropdown-item" href="#">Economics</a>
          <a class="dropdown-item" href="#">Electrical Electronic Engineering</a>
          <a class="dropdown-item" href="#">Estate Management</a>
          <a class="dropdown-item" href="#">Food Science and Technology</a>
          <a class="dropdown-item" href="#">Hotel Management and Tourism</a>
          <a class="dropdown-item" href="#">Industrial Chemistry</a>
          <a class="dropdown-item" href="#">Information Technology</a>
          <a class="dropdown-item" href="#">Mechanical Engineering</a>
          <a class="dropdown-item" href="#">Office Technology</a>
          <a class="dropdown-item" href="#">Public Administration</a>
          <a class="dropdown-item" href="#">Urban and Regional Planning</a>
          
       </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="payment.php">Download Project</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contactUs.php">Contact Us</a>
      </li>
    </ul>
  </div>
</nav>
	</div>
	
  <div class="col-md-1 pt-3">
<a href="register_form.php" class="reg">Register</a>
 </div>
 
<div class="col-md-1 pt-3">

<a href="login.php" class="reg">Login</a>
</div>
</div>
       
  
</div>


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


<script type="text/javascript">
function showResult(str) {
  if (str.length==0) {
    document.getElementById("livesearch").innerHTML="";
    document.getElementById("livesearch").style.border="0px";
    return;
  }
  var xmlhttp=new XMLHttpRequest();
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("livesearch").innerHTML=this.responseText;
      document.getElementById("livesearch").style.border="1px solid #A5ACB2";
    }
  }
  xmlhttp.open("GET","livesearch.php?q="+str,true);
  xmlhttp.send();
}
</script>













  <script src="js/jquery.js" type="text/javascript"></script>
  <script src="popper.js" type="text/javascript"></script>
  <script src="js/bootstrap.min.js" type="text/javascript"></script>




