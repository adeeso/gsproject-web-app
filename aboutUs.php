<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>About Us</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="animate4.min.css">


<script src="js/jquery.js" type="text/javascript"></script>
<script src="popper.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>




<style type="text/css">
  
#bar{background-color:rgb(0,128,255);}
#top{text-align: center;}
ul li{display: inline; line-height: 60px; margin: 8px}
a:hover{color:purple;}
a{color: white}
h2{text-align: center; color: #000080}  
.footer{height: 40px; background-color:#000000; text-align: center; color:white}      
p{color: white}


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
       h5{color: #000080}
       .pb{display: block; color: #ffffff; line-height: 40px}
.tot{display: block; color: #ffffff; line-height: 40px}
       .container-fluid{background-image: url('pic/aboutUs.jpg');background-size:cover; background-attachment: fixed;}
.wrapper-fluid{background-color: rgba(0,0,0,0.5);}
</style>
</head>
<body >
	
  <div class="container-fluid">
    <div class="wrapper-fluid">
    
   
    <div class="row" id="bar">
      <div class="col-md-2 pt-3" id='top'>
        <h3>Gsproject</h3>
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



<div class="row">
  <div class="col-md-12" style="height: 30px"></div>
</div>


<div class="row mx-2">
  <div class="col-md-12">
  <h2>Welcome</h2>  
  <p> Gsproject is a conducive platform where students of various degree can search for lists of their various
project topic and material(s).The platform also gives you an all inclusive package to sell and earn on your products.</p>

<h5>How to sell your project on Gsproject</h5>
<ul class="tot">
  <li class="tot">Upload your Project Materials</li>
    <li class="tot">Flexible pricing mechanism to suit your needs</li>
  <li class="tot">Be in total control with over 60% gains on every product sold</li>
  <li class="tot"> Get instant email/sms notifications and lots more.</li>

</ul>


<p> Many undergraduate students goes through a lot of stress in getting their project topic, so this is why gsproject provide an educational services such as project writing and research analysis</p>

<h5>How to get your complete project instantly</h5>
<ul class="pb">
     <li class="pb"> Select 3 Project Topics of your choice from your Department.</li>
    <li class="pb">Submit the 3 project topics to your Supervisor for Approval.</li>
    <li class="pb">Call Our Instant Help Desk on 0902-819-6095 and get your complete project material instantly or check through our available project topics for download.
   <li class="pb"> You can download complete project topics and research materials at anytime at affordable price.</li>
<li class="pb"> After payment confirmation, we deliver the material to your provided email or whatsapp within 10-20mins</li>
<li class="pb">Also, If going for the option of bank transfer or deposit, please provide all the necessary contact details to us so that we can reach you. And your complete project material will be sent to your email or whatsapp in the next 10-20 minutes after the payment has been confirmed.</li>



  <h5>We provide undergraduate students with quality research materials to excel in their various field of study.
    <a href="contactUs.html" style="color: #000000">For more information, contact us.</a></h5>

  </div>
</div>

<div class="row">
  <div class="col-md-12" style="height: 40px"></div>
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
    

</div>
</div>











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