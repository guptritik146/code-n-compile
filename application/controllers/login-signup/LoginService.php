<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginService extends CI_Controller {

	public function loginWithPassword()
	{
		$emailOrMobile = $_POST['email-id-or-mobile-number'];
		$password = $_POST['password'];
		$rememberMe = $_POST['remember-me'];
		$this->load->model('user_model');
		//$responseArray = array();
		$users = array();
		if (filter_var($emailOrMobile, FILTER_VALIDATE_EMAIL)){
			$users = $this->user_model->getUserbyEmail($emailOrMobile);
		}else{
			$users = $this->user_model->getUserbyMobileNumber($emailOrMobile);
		}
		foreach($users as $user)
		 {
			$sess_array = array(
				'user_id' => $user->user_id,
			 	'user_name' => $user->user_name,
				'email_id' => $user->email_id,
				'full_name' => $user->full_name,
			 	'facebook_id' => $user->facebook_id,
				'twitter_id' => $user->twitter_id,
				'google_id' => $user->google_id,
				'profile_pic' => $user->profile_pic,
				'user_sex' => $user->user_sex,
				'user_role' => $user->user_role
			  );
			if($password === $user->password){
				$this->session->set_userdata('logged_in', $sess_array);
				$responseArray['error'] = 'NO';
				$postLoginURL = $this->session->userdata('post_login_url');
				$postLoginURL = base_url().$postLoginURL;
				$responseArray['post_login_url'] = $postLoginURL;
			}else{
				$responseArray['error'] = 'YES';
				$responseArray['error-message'] = 'Invalid Login Credentials.';
			}
			echo json_encode($responseArray);			
        }		 
	}
	
	public function changePassword(){
		$password = $_POST['password'];
		$cpassword = $_POST['cpassword'];
		$this->load->model('user_model');
		$data = array(
			 	'password' => $password,
			  );
		$this->user_model->updateUserForUserId(1, $data);
	}
}