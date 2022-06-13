<?php session_start();
error_reporting (E_ALL & ~ E_NOTICE);
include "textlocal.class.php";

class Controller {
	
	function  __construct() {
		$this->processVerification();
	}
	
	function processVerification(){
		if(isset($_POST['number'])){
			$number=$_POST['number'];
			$apikey=urlencode('YOUR_API_KEY');
			$Textlocal=new Textlocal(false, false, $apikey);
			$mobile_no=array(
			$number
			);
		
		$sender= 'Tottenham Hotspur';
		$otp=rand(100000, 999999);
	    $_SESSION['otp']=$otp;
		$message='Your Confirmation Code is '.$otp;
		
		try{
			$response=$Textlocal->sendSms($mobile_no, $message, $sender);
		     include "verify.php";
			 exit;
		}
		catch(Exception $e){
			die('Error: '.$e->getMessage());
		}
		
		}
		
	}
}

$ob = new Controller();