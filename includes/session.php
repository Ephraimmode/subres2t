<?php 

class Session {

	private $signed_id = false;
	public $user_id;
	public $message;
	public $count;

function __construct(){

	session_start();
	$this->visitor_count();
	$this->check_message();

}

public function visitor_count(){

	if (isset($_SESSION['count'])) {
	
	return $this->count = $_SESSION['count']++;

	}
	else {
		return $_SESSION['count'] = 1;
	}

}




public function message($msg=""){

	if (!empty($msg)) {
		
		$_SESSION['message'] = $msg;

	}
	else{

		return $this->message;
	}

}

private function check_message(){

	if (isset($_SESSION['message'])) {
		$this->message = $_SESSION['message'];
		unset($_SESSION['message']);
	}
	else{
		$this->message = "";
	}
}


}

$session = new Session();









?>