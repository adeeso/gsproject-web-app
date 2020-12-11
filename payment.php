<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Order for your project material</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="animate4.min.css">


<script src="js/jquery.js" type="text/javascript"></script>
<script src="popper.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>




<style type="text/css">
h4{text-align: center;}  
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
  color:purple;
  }
a{
  color: white}
h2{ 
  color: #000080}  
.footer{
  background-color:#000000; 
  text-align: center; 
  color:white}      

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

.style1{color: red;}
.style2{color: #FF8C00;}
.style3{display: block; line-height:30px}
p{font-family: verdana;}
ol,li{font-family: verdana;}
</style>
</head>
<body >

<?php
// create object of report class

include('gsproject.php');

if ($_SERVER['REQUEST_METHOD']=='POST' && $_POST['submit']=='send') {
  //var_dump($_POST)

  $objpay=new Payment('localhost','root','','gsprojectdbm');
  $output=$objpay->initialisepaystack($_POST['fullname'], $_POST['email'],$_POST['amount'],$_POST['project_topic']);

  var_dump($output->data->authorization_url);

  $authorization_url=$output->data->authorization_url;

  header("Location:$authorization_url");
}

?>










   
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



<div class="container-fluid">
<div class="row" style="height:40px">
  <div class="col-md-12"></div>
</div>



<li class="list-group-item">
<div class="row">
  <div class="col-md-2" ></div>
  <div class="col-md-8">
    <h2>How to order for the complete project materials</h2>
  </div>
  <div class="col-md-2"></div>
</div>


<div class="row">
  <div class="col-md-2"></div>
  <div class="col-md-8">
    <h6 class="style1"><em>Please note that any payment method is accepted</em></h6>
  </div>
  <div class="col-md-2"></div>
</div>



<div class="row">
  <div class="col-md-2"></div>
  <div class="col-md-8">
    <p>The complete project materials is available after confirmation of your payment of N3000. You can make your payment through debit card or through deposit/transfer.</p>
 </div>
  <div class="col-md-2"></div>
</div>



<div class="row" style="height: 30px">
  <div class="col-md-12"></div>
</div>



<div class="row">
  <div class="col-md-2" ></div>
  <div class="col-md-8">
    <h5>You can click below to pay with your debit card</h5>
    
    <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  <img src="pic/payment1.png" alt="payment">
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Payment</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">

      <div class="modal-body">
        <div class="form-group">

    <label for="fullname">Fullname</label>

    <input type="" id="name" name="fullname" value=""  required class="form-control" />
        
      </div>
  <div class="form-group">

    <label for="email">Email Address</label>
    <input type="email" id="email" name="email" value="" class="form-control" required />

  </div>

  <div class="form-group">

    <label for="amount">Amount</label>

    <input type="tel" id="amount" name="amount" value="" class="form-control" required />

  </div>

  <div class="form-group">

    <label for="project_topic">Project Topic</label>

    <input type="tel" id="project_topic" name="project_topic" value="" class="form-control" required />

  </div>

  
      <div class="form-submit">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="submit"  value="send" class="btn btn-secondary"> Pay </button>
      </div>
    </div>

</form>


  </div>
</div>
  </div>
</div>



  <div class="col-md-2"></div>
</div>




<div class="row" style="height: 80px">
  <div class="col-md-12" style="height: 80px"></div>
</div>


<div class="row">
  <div class="col-md-2"></div>
  <div class="col-md-8">
    <h5>Deposit or transfer to our bank detail below</h5>
    <p><img src="pic/GTBank-plc.jpg" alt="gtbank"></p>
    <p>ACCOUNT NAME: ADEESO ADEYEMI. O</p>
    <P class="style2">GUARANTY TRUST BANK: 0175850210</P>
    <p class="style3">After successful payment, send your payment details via sms/whatsapp to the numbers +234(0)9028196095
     or call +234(0)7043883750. The message should contain:</p>
      <ol class="style3">
        <li class="style3">Depositor FullName</li>
        <li class="style3">Date of Payment</li>
        <li class="style3">Email Address</li>
        <li class="style3">Phone number</li>
        <li class="style3">Project Topic</li>
      </ol>
  </div>
  <div class="col-md-2"></div>
</div>





<div class="row">
  <div class="col-md-2" ></div>
  <div class="col-md-8">
    <p>
      Projects are sent in Microsoft format instantly to your email address or to your WhatsApp for download and printing after payment confirmation. For Enquires, contact our customer care @ (+234) 09028196095, 07043883750 or Email us @ gspoject@gmail.com
    </p>
    </div>
  <div class="col-md-2"></div>
</div>






<div class="row">
  <div class="col-md-2" ></div>
  <div class="col-md-8">  
    <h5><strong>Quality Assurance</strong></h5>
    <p>All research project on this website are well researched and suitable for all students in their various
    field of study</p>

    <h5><strong>Delivery Assurance</strong></h5>
    <p>We are trustworthy and can never SCAM you. Our success story is based on the love and fear of God plus constant referrals from students who have benefited from this website. We deliver complete project materials instantly on how fast your payment is acknowledged by us.</p>
    </div>
  <div class="col-md-2"></div>
</div>






</li>


<div class="row" style="height:40px">
  <div class="col-md-12"></div>
</div>



    <div class="row">
    <div class=" col-md-12 footer">
      <p>www.gsproject.com 2020 All rights Reserved</p>
    </div>
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