 <?php
$roleid=2; //$_SESSION['roleid'];

$privileges=arrays();

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

?> 