<?php
//class database connection class
class DatabaseConfig{
//member variables
public $dbcon; //database connection handler

//member function/method

public function __construct(){
//connection by instantiating MYSQLI class
	$this->dbcon=new mysqli('localhost', 'root', '', 'gsprojectdbm');

	//check connection

	if ($this->dbcon->connect_errno) {
		die('connection failed '. $this->dbcon->connect_error);
	}//else{
		//echo "connection successful";
	//}

}

}


// authentication class
class Authentication{
	// member variables
	public $dbobj;  //object handler of DatabaseConfig class

	//member method/function
	
public function __construct(){
		//creating connection of DatabaseConfig
$this->dbobj = new DatabaseConfig;
	}

// public function login($email, $password){
	
// 	$password=md5($password);

// 	//write a query for login
// 	$sql="SELECT users.*, roles.role_name from users left join roles 
// 	on users.role_id = roles.role_id where users.user_email='$email' and users.user_password = '$password' limit 1";
// 	//var_dump($email,$password,$sql);
// 	//exit();
//     //run this query
// 	$result=$this->dbobj->dbcon->query($sql);
// 	//var_dump($this->dbobj->dbcon->error);
// 	//exit();

// 	if ($this->dbobj->dbcon->affected_rows==1) {
//        //check if the number of row is equal to one
// 		$output=$result->fetch_assoc();

// 		//create a session


// 		$_SESSION['userid']=$output['user_id'];
// 		$_SESSION['fullname']=$output['user_fullname'];
// 		$_SESSION['role']=$output['role_name'];
// 		$_SESSION['email']=$output['user_email'];

// 		// redirect to dashboard
// 		header("Location: http://localhost/gsproject/admin/dashboard.php");

		
// 		}else{
// 			$result="<div class='alert alert-danger'>Invalid email address or password!</div>";
// 		}
// 		return $result;
// 	}
}



class Users{

public $conn;
public $servername;
public $username;
public $password;
public $db;

 public function __construct($servername, $username, $password, $db)
{
	$this->servername=$servername;
	$this->username=$username;
	$this->password=$password;
	$this->db=$db;

	$this->conn=new mysqli($this->servername, $this->username, $this->password, $this->db);
// to check connection error and may not be neccessary if no error
      
      if(!empty($this->conn->connect_errorno)){
       die($this->conn->connect_error);
}

}
function register($user_fullname,$user_email,$user_phone,$user_password,$user_dept,$role){
	$result=$this->conn->query("INSERT INTO users SET user_fullname='$user_fullname', user_email='$user_email',user_phone='$user_phone', user_password=md5('$user_password'),user_dept='$user_dept',role_id='$role'");

	if (empty($this->conn->insert_id)) {
		// show if there is error
		die($this->conn->error);
	}
    return $this->conn->insert_id;
}


//to create login function
  
public function login($email, $password){
	
	$password=md5($password);

	//write a query for login
	$sql="SELECT users.*, roles.role_name from users left join roles 
	on users.role_id = roles.role_id where users.user_email='$email' and users.user_password = '$password' limit 1";
	//var_dump($email,$password,$sql);
	//exit();
    //run this query
	$result=$this->conn->query($sql);
	//var_dump($this->dbobj->dbcon->error);
	//exit();

	if ($this->conn->affected_rows==1) {
       //check if the number of row is equal to one
		$output=$result->fetch_assoc();

		//create a session


		$_SESSION['userid']=$output['user_id'];
		$_SESSION['fullname']=$output['user_fullname'];
		$_SESSION['role']=$output['role_name'];
		$_SESSION['email']=$output['user_email'];
		$_SESSION['roleid']=$output['role_id'];
		$_SESSION['project_topic']=$output['project_topic'];

		//call getprivilege function

		$this->getPrivileges($output['role_id']);



		// redirect to dashboard
		header("Location: http://localhost/gsproject/admin/dashboard.php");

		
		}else{
			$result="<div class='alert alert-danger'>Invalid email address or password!</div>";
		}
		return $result;
	}

public function getprivileges($roleid){

switch ($roleid) {
	case '1':
		# code...superadmin
	$privileges[]= array('task'=>'dashboard.php', 'label'=>'dashboard', 'roleid'=>$roleid, 'ismenu'=>'yes', 'sort'=>'1');
	$privileges[]= array('task'=>'projectdonor.php', 'label'=>'Donor', 'roleid'=>$roleid, 'ismenu'=>'yes', 'sort'=>'2');
	$privileges[]= array('task'=>'projectresearcher.php', 'label'=>'Researcher', 'roleid'=>$roleid, 'ismenu'=>'yes', 'sort'=>'3');
	$privileges[]= array('task'=>'editaccount.php', 'label'=>'Edit Account', 'roleid'=>$roleid, 'ismenu'=>'yes', 'sort'=>'6');
	$privileges[]= array('task'=>'../payment.php', 'label'=>'payment', 'roleid'=>$roleid, 'ismenu'=>'yes', 'sort'=>'5');
	$privileges[]= array('task'=>'listofproject.php', 'label'=>'List of project', 'roleid'=>$roleid, 'ismenu'=>'yes', 'sort'=>'7');
	 $privileges[]= array('task'=>'edit.php', 'label'=>'Update project', 'roleid'=>$roleid, 'ismenu'=>'no', 'sort'=>'4');


//		break;


		case '2':
		// donor
	$privileges[]= array('task'=>'projectdonor.php', 'label'=>'Donor', 'roleid'=>$roleid, 'ismenu'=>'yes', 'sort'=>'2');
	$privileges[]= array('task'=>'editaccount.php', 'label'=>'Edit Account', 'roleid'=>$roleid, 'ismenu'=>'yes', 'sort'=>'6');
	$privileges[]= array('task'=>'listofproject.php', 'label'=>'List of project', 'roleid'=>$roleid, 'ismenu'=>'yes', 'sort'=>'7');
		

		break;



		case '3':
		//researcher
	$privileges[]= array('task'=>'projectresearcher.php', 'label'=>'Researcher', 'roleid'=>$roleid, 'ismenu'=>'yes', 'sort'=>'3');
	$privileges[]= array('task'=>'editaccount.php', 'label'=>'Edit Account', 'roleid'=>$roleid, 'ismenu'=>'yes', 'sort'=>'6');
	$privileges[]= array('task'=>'../payment.php', 'label'=>'payment', 'roleid'=>$roleid, 'ismenu'=>'yes', 'sort'=>'3');
	$privileges[]= array('task'=>'listofproject.php', 'label'=>'List of project', 'roleid'=>$roleid, 'ismenu'=>'yes', 'sort'=>'7');
		
	

		break;
	
}
$_SESSION['privileges']=$privileges;


}


// To get all users
  public function getallUsers(){
  	//write you query function
  	$sql="SELECT * from users" ;
  	//run the query
  	if ($result=$this->conn->query($sql)) {
  		   $output=$result->fetch_all(MYSQLI_ASSOC);
  }else{
    echo "Error: ", $this->dbobj->dbcon->error;
}return $output;

  }


//this is use for editing
  public function editAccount($fullname,$email,$phone,$password,$user_id){
//write your query

   	$query=("UPDATE users set user_fullname='$fullname', user_email='$email',user_phone='$phone',user_password=md5('$password') WHERE user_id='$user_id,' ");

	if ($this->conn->query($query)===TRUE) {
		// show if there is error
		$msg ="<div class='alert alert-success'>project updated</div>";

}else{
	die($this->conn->error);
}

}


function deleteUser($user_id){
	
$query= "DELETE FROM users WHERE user_id='$user_id'";

if($this->conn->query($query)===TRUE){

	$msg= "<div class='alert alert-success'>User details successfully deleted</div>";
}else{
	// $myerror= $this->conn->error;
	// $result= "Error while deleting".$myerror;
    die($this->conn->error);
}

}


// get a specific landlord details

  public function getuser($userid){
  	//write a query

  	$sql="SELECT roles.*, users.user_fullname, users.user_email, users.user_phone, users.user_dept FROM users LEFT JOIN roles on roles.role_id=users.role_id WHERE users.user_id=$userid";

  	//run the query

  	if ($result=$this->conn->query($sql)) {
  		$output=$result->fetch_assoc();

  		$jsondata=json_encode($output);

          
		$result="{
			'status': 'success',
			'message': 'list of users!';
			'data': $jsondata
		}";  		
  	}else{
  		$myerror=$this->dbobj->dbcon->error;
		$result="{
         'status': 'failed',
         'message': 'Oops, something happened! '.$myerror,
         'data':[]
		}";
  	}

        return $result;
  }

}



class Project{
	//member variable
public $conn;
public $servername;
public $username;
public $password;
public $db;

public function __construct($servername, $username, $password, $db)
{
	$this->servername=$servername;
	$this->username=$username;
	$this->password=$password;
	$this->db=$db;

	$this->conn=new mysqli($this->servername, $this->username, $this->password, $this->db);
// to check connection error and may not be neccessary if no error
      
      if(!empty($this->conn->connect_errorno)){
       die($this->conn->connect_error);
}


}

public function uploadProject($project_topic,$project_year,$dept_id,$newfilename,$project_type,$project_amt,$project_abstract){
		
//var_dump($_FILES);exit();
$result=['status'=>false, 'message'=>'unknown error'];
		//check if global $_FILES has a value
		if  ($_FILES['projectfile']['error'] == 0) {
                   
                   //get the extention
			$filename = $_FILES['projectfile']['name'];
		$file_ext=explode('.', $filename);//covert to string array
		$file_ext=end($file_ext);// get last element of array
		$file_ext=strtolower($file_ext);//to lowercase

		//specify the extention allowed
        $extentions=array('doc','pdf');

        //check if file extention is valid

        if (in_array($file_ext, $extentions)===false) {
        	# code...
        }
        $error[]="extention not allowed";



			$filesize=$_FILES['projectfile']['size'];
			if ($filesize > 30000000) {
				$result['message']= 'filesize must not be more than 300kb';

				return $result;
			}

			$name="image".time();
			
			$filename = $_FILES['projectfile']['name'];
			$fileparts=explode('.', $filename); //it will broke the file part into two pick the end part
			$ext=end($fileparts);
            $newfilename=$name. '.'.$ext;
            $newlocation='userfiles/'; //creating a file name for the picture to be uploaded
            $destination=$newlocation.$newfilename;
            //die($destination);
			$filetempname = $_FILES['projectfile']['tmp_name'];
		if(move_uploaded_file($filetempname, $destination)){
			$result['status']=true;
			$result['message']='file sucessfully uploaded'; //to give a feedback
			//return $result;
             }else{
             	$result['message']="error uploading file. please retry";
             }

             }else{
			$result['message']= "no file was selected!";
		}
		//return $result;
	$session=$_SESSION['userid'];

$result=$this->conn->query("INSERT INTO project SET project_topic='$project_topic', project_year='$project_year', dept_id='$dept_id', project_file='$newfilename', project_type='$project_type', project_amt='$project_amt', project_abstract='$project_abstract', user_id='$session'");

	if (empty($this->conn->insert_id)) {
		// show if there is error
		die($this->conn->error);
	}
    return $this->conn->insert_id;
}


 public function getUsersproject(){

// write the query to select all
		$sql="SELECT * FROM project";

		//check if the query() runs the sql statement//to fetch
   
   if($result=$this->conn->query("SELECT * FROM project")){
         
         $output=$result->fetch_all(MYSQLI_ASSOC);
  }else{
    echo "Error: ", $this->dbobj->dbcon->error;
}return $output;


}




function deleteProject($project_id){
$query= "DELETE FROM project WHERE project_id='$project_id'";
if($this->conn->query($query)===TRUE){
	$msg= "<div class='alert alert-success'>Project details successfully deleted</div>";
}else{
	// $myerror= $this->conn->error;
	// $result= "Error while deleting".$myerror;
    die($this->conn->error);
}
}


  //this is use for editing
  public function editProject($project_topic,$project_year,$dept_id,$project_amt,$project_abstract,$project_id){
//write your query

   	$query=("UPDATE project set project_topic='$project_topic', project_year='$project_year',dept_id='$dept_id',project_amt='$project_amt',project_abstract='$project_abstract' WHERE project_id='$project_id,' ");

	if ($this->conn->query($query)===TRUE) {
		// show if there is error
		$msg ="<div class='alert alert-success'>project updated</div>";

}else{
	die($this->conn->error);
}

}

}

// initialize payment class
class Payment{

// member variables
	public $dbobj;  //object handler of DatabaseConfig class

	//member method/function
	
public function __construct(){
		//creating connection of DatabaseConfig
$this->dbobj = new DatabaseConfig;

}

//initialise paystack

public function initialisepaystack($fullname,$email,$amount,$project_topic){

	$url="https://api.paystack.co/transaction/initialize";
	$callbackurl="http://localhost/gsproject/admin/callback.php";

	//step1: initialize curl session

	$curlsession = curl_init(); // open connection

	$requestdata=array(
		'fullname'=>$fullname,
		'email'=>$email,
		'amount'=>$amount * 100,
		'project_topic'=>$project_topic,
		'callback_url'=>$callbackurl
	);

	$requestdatastr= http_build_query($requestdata);

	//step2: set the url, number of post vars, post data, headers

	curl_setopt($curlsession, CURLOPT_URL, $url);
	curl_setopt($curlsession, CURLOPT_POST, true);
	curl_setopt($curlsession, CURLOPT_POSTFIELDS, $requestdatastr);
	curl_setopt($curlsession, CURLOPT_HTTPHEADER, array(
		"Authorization: Bearer sk_test_faa3417eb2de8efd4afc2c9df3d0d96582d25787",
		"Cache-control: no-cache"
        ));

	curl_setopt($curlsession, CURLOPT_RETURNTRANSFER, true);


	//step 3 execute post

	$result= curl_exec($curlsession);

	//step4: close curl

	curl_close($curlsession);

	//step 5
//do anything you like
	// var_dump($result);
	$output= json_decode($result);
	

	return $output;


}


public function verifyPaystack($transid,$userid){


	$url="https://api.paystack.co/transaction/verify/$transid";
    $callbackurl="http://localhost/gsproject/admin/callback.php";

	//step1: initialize curl session

	$curlsession = curl_init();
	 // open connection

	//step2: set the url, number of post vars, post data, headers

	curl_setopt($curlsession, CURLOPT_URL, $url);
	curl_setopt($curlsession, CURLOPT_CUSTOMREQUEST, 'GET');
	curl_setopt($curlsession, CURLOPT_HTTPHEADER, array(
		"Authorization: Bearer sk_test_faa3417eb2de8efd4afc2c9df3d0d96582d25787",
		"Cache-control: no-cache"
        ));

	curl_setopt($curlsession, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($curlsession, CURLOPT_SSL_VERIFYPEER, False);



	//step 3 execute post

	$result= curl_exec($curlsession);
	$errors= curl_error($curlsession);


	//step4: close curl

	curl_close($curlsession);

	//step 5
//do anything you like
	// var_dump($result);
	//display errors
	if ($errors) {
		echo $errors;
	}else{
	$output= json_decode($result); // var_dump($output);exit();
	$amount=$output->data->amount / 100;
	$reference=$output->data->reference;
	$paidat=$output->data->paid_at;

	//store payment information

	$sql= "INSERT INTO payment (user_id, project_id, payment_amount, transaction_id, payment_method, payment_date) VALUES('$userid', '$project_id',
	'$amount', '$reference', 'Online', '$paidat')";

	if($this->dbobj->dbcon->query($sql)===true){
	//redirect to myhouse.php
$msg="Payment Successful";
	header("location:http://localhost/gsproject/payment.php?$msg");

	exit();

}else{

	echo "Error ". $this->dbobj->dbcon->error;
}
	
}
	 return $output;


}




}



?>