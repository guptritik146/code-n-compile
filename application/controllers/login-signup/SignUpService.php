<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SignUpService extends CI_Controller {

	public function signUp()
	{
		$fullName = $_POST['full-name'];
		$emailId = $_POST['email-id'];
		$mobileNumber = $_POST['mobile-number'];
		$password = $_POST['password'];
		$mobileRegex = "/^[6-9][0-9]{9}$/" ;  
		$responseArray = array();
		if ( !filter_var($emailId, FILTER_VALIDATE_EMAIL)){
			$responseArray['error'] = 'YES';
			$responseArray['message'] = 'Invalid email id';
			$responseArray['inputFieldId'] = 'email-id';
		}else if( (preg_match($mobileRegex, $mobileNumber) != 1) || strlen($mobileNumber)!=10){
		   	$responseArray['error'] = 'YES';
			$responseArray['message'] = 'Invalid mobile number';
			$responseArray['inputFieldId'] = 'mobile-number';
		}else{	
			$userData =  array(
				'full_name' => $fullName,
				'email_id'	=> $emailId,
             	'mobile_number' => $mobileNumber,
				'password' => $password
			);
			$this->load->model('user_model');
			if(count($this->user_model->getUserbyEmail($emailId)) != 0){
			  	$responseArray['error'] = 'YES';
				$responseArray['message'] = 'An account with same email id exist.';
				$responseArray['inputFieldId'] = 'email-id';
			}else if(count($this->user_model->getUserbyMobileNumber($mobileNumber)) != 0){
			  	$responseArray['error'] = 'YES';
				$responseArray['message'] = 'An account with same mobile number exist.';
				$responseArray['inputFieldId'] = 'mobile-number';
			}else{
			    $this->user_model->createUser($userData);
				$responseArray['error'] = 'NO';
				//$responseArray['message'] = 'Wow! Your account has been created.';
			}
			
		}
		echo json_encode($responseArray);	 
	}
}