<?php

class Notification{
	// member properties

	public $user_email;
	public $user_phone;

	//member variables

	public function __construct($user_email, $user_phone){

		$this->user_email=$user_email;
		$this->user_phone=$user_phone;
	}
}
?>