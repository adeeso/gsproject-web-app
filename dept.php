<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Department Category</title>
	<link rel="stylesheet" href="css/bootstrap.css">

<style type="text/css">
	#bar{
  background-color:rgb(0,128,255);
   }
#top{
  text-align: center;
   }
ul li{
  display: inline; 
  line-height: 60px; 
  margin: 8px
}
.mid:hover{text-decoration-line: none;
  color:purple;
  }
.mid{
  color: white;
}
  
  .footer{
  background-color:#000000; 
  text-align: center; 
  color:white}

  .dept{
  	display:block; 
  	color:blue;
  }

  .dept:hover{
  	text-decoration-line: none;
  }
h5{font-family:verdana;
}
 
#button{

          display: none;
          position: fixed;
          bottom: 20px;
          right: 10px;
          z-index: 99;
          border:none;
          background-color:#0000ff;
          outline: none;
          color: white;
          cursor: pointer;
          padding: 15px;
          border-radius: 10px;
          font-size: 18px;

       }
            #button:hover{
          background-color:#555;

       }

 
</style>
</head>
<body>
<div class="container-fluid">	

<div class="row" id="bar">
      <div class="col-md-2 pt-3" id='top'>
        <h3>Gsproject</h3>
      </div>
      <div class="col-md-6">
        <ul style="color: white">
          <li><a class="mid" href="index.php">Home</a></li>
          <li><a class="mid" href="Myproject.php">Project Topic</a></li>
          <li><a class="mid" href="#">Blog</a></li>
          <li><a class="mid" href="payment.php">Download Project</a></li>
          <li><a class="mid" href="contactUs.php">Contact Us</a></li>
        </ul>
      </div>
      <div class="col-md-4 pt-3">
        <form action="intro_submit" method="post" class="form-inline">
          <input type="text" name="search" value="" placeholder="what are you looking for.." class="form-control">
          <button class="btn btn-success">search</button>   
        </form>
      </div>
    </div>


<div class="row">
	<div class="col mt-3">
		<h4>List of free Research Project Materials by Department</h5>
	</div>
</div>


<div class="row">
	<div class="col-6 pl-5">
	
		<a class="dept" href="#"><h5>Accounting</h5></a>
          <a class="dept" href="#"><h5>Agric Engineering</h5></a>
          <a class="dept" href="#"><h5>Agriculture</h5></a>
          <a class="dept" href="#"><h5>Architecture</h5></a>
          <a class="dept" href="#"><h5>Banking and Finance</h5></a>
          <a class="dept" href="#"><h5>Biochemistry</h5></a>
          <a class="dept" href="#"><h5>Biology</h5></a>
          <a class="dept" href="#"><h5>Buiding Technology</h5></a>
          <a class="dept" href="#"><h5>Business Administration</h5></a>
          <a class="dept" href="#"><h5>Chemical Engineering</h5></a>
          <a class="dept" href="#"><h5>Chemistry</h5></a>
          <a class="dept" href="#"><h5>Civil Engineering</h5></a>
          <a class="dept" href="#"><h5>Computer Engineering</h5></a>
          <a class="dept" href="#"><h5>Computer Science</h5></a>
          <a class="dept" href="#"><h5>Economics</h5></a>
          <a class="dept" href="#"><h5>Electrical Electronic Engineering</h5></a>
          <a class="dept" href="#"><h5>Estate Management</h5></a>
          <a class="dept" href="#"><h5>Food Science and Technology</h5></a>
          <a class="dept" href="#"><h5>Hotel Management and Tourism</h5></a>
          <a class="dept" href="#"><h5>Industrial Chemistry</h5></a>
          <a class="dept" href="#"><h5>Information Technology</h5></a>
          <a class="dept" href="#"><h5>Mechanical Engineering</h5></a>
          <a class="dept" href="#"><h5>Public Administration</h5></a>
          <a class="dept" href="#"><h5>Urban and Regional Planning</h5></a>
	</div>
	<div class="col-md-6">
		<img src="pic/intro3.jpg" class="img-fluid">
	</div>
</div>







<div class="row">
    <div class=" col-md-12 footer">
      <p>www.gsproject.com 2020 All rights Reserved</p>
    </div>
  </div>



<button id="button" onclick="topfunction()"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-double-up" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M7.646 2.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1-.708.708L8 3.707 2.354 9.354a.5.5 0 1 1-.708-.708l6-6z"/>
  <path fill-rule="evenodd" d="M7.646 6.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1-.708.708L8 7.707l-5.646 5.647a.5.5 0 0 1-.708-.708l6-6z"/>
</svg></button>



<script  type="text/javascript">
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
</div>
</body>
</html>