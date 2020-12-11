<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Project Topic</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="animate4.min.css">


<script src="js/jquery.js" type="text/javascript"></script>
<script src="popper.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>




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

a:hover{
  text-decoration-line: none;
  color:purple;
}

a{
  color: white
}

h2{
  text-align:center; 
  color: #000080
}

.footer{
  background-color:#000000;
   text-align: center;
    color:white
  }

#page{
  height: 50px
}

#pres{
  height: 80px
}

h3{
  color: #0000ff
}

#pres{
  color: #0000ff
}

.cot{
  color: #0000ff
}

.bot{
  height: 50px
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
<body >
   
    <div class="row" id="bar">
      <div class="col-md-2 pt-3" id='top'>
        <h4>Gsproject</h4>
      </div>
      <div class="col-md-6" id="mid">
        <ul style="color: white">
          <li><a href="index.php">Home</a></li>
          <li><a href="Myproject.php">Project Topic</a></li>
          <li><a href="#">Blog</a></li>
          <li><a href="payment.php">Download Project</a></li>
          <li><a href="contactUs.php">Contact Us</a></li>
        </ul>
      </div>
      <div class="col-md-4 pt-3">
        <form action="intro_submit" method="post" class="form-inline">
          <input type="text" name="search" value="" placeholder="what are you looking for.." class="form-control">
          <button class="btn btn-success">search</button>   
        </form>
      </div>
    </div>

<div class="row" id="page">
  <div class="col-md-12" ></div>
</div>


  
<div class="row">
  <div class="col-md-12 mx-3" >
   <h3> Search through our faculty category to get your various research project topic with us </h3>
  </div>
</div>


<div class="row" id="pres">
  <div class="col-md-12" ></div>
</div>



    
    <div class="row" id="bot" >
  <div class="col"></div>
</div>



<div class="row">
  <div class="col-md-6 animate__animated animate__backInLeft" style="font-family:sans-serif;font-size: 20px;">
    <h2>Search For Your Project Topic</h2>
<h3 class="ml-3"><b>Faculty Category</b></h3>
<ul>
  <li>
<a href="#" class="cot">Faculty of Arts</a>
</li>

<li>
<a href="#" class="cot">Faculty of Commerce</a>
</li>

<li>
  <a href="#" class="cot">Faculty of Economics</a>
</li>

<li>
<a href="#" class="cot">Faculty of Education</a>
</li>

<li>
<a href="#" class="cot">Faculty of Engineering</a>
</li>

<li>
<a href="#" class="cot">Faculty of Graduate Studies</a>
</li>

<li>
<a href="#" class="cot">Faculty of Information Technology</a>
</li>

<li>
<a href="#" class="cot">Faculty of Management Studies</a>
</li>

<li>
<a href="#" class="cot">Faculty of Philosophy</a>
</li>

<li>
<a href="#" class="cot">Faculty of political Science</a>
</li>

<li>
<a href="#" class="cot">Faculty of Science</a>
</li>
</ul>

</div>


<div class="col-md-6" id="moot">
        <img src="pic/footerimage.jpg" class="img-fluid" alt="student">
        
</div>


</div>





 
    <div class="row" style="height: 120px" >
  <div class="col"></div>
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

</body>
</html>