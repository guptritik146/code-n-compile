m<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class FacebookOAuthResponse extends CI_Controller {
	public function index()
	{
		if(!isset($_GET['state']) ||(isset($_GET['state']) && $_GET['state'] != $this->session->userdata('login_state'))){
		  $this->display_msg('Invalid login request');
		  return;
		}
		
		if(isset($_GET['code'])) {
		$code = $_GET['code'];
		$url = 'https://graph.facebook.com/v3.2/oauth/access_token';
		$redirect_uri = base_url()."facebook-oauth-response";
		$data = array(
			"code" => $code,
			"client_id" => "1581333345332863",
			"client_secret" => "3189cf99b00602dccb28c2b412206589",
			"redirect_uri" => $redirect_uri
		);

		# Create a connection
		$ch = curl_init($url);

		# Form data string
		$postString = http_build_query($data, '', '&');

		# Setting our options
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $postString);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

		# Get the response
		$response = curl_exec($ch);
		$json_response = json_decode($response);
		if(isset($json_response->error)){
            $this->display_msg("Oops Error while Login, Please try again");
		}else{
		curl_close($ch);
		$profileInfo = file_get_contents("https://graph.facebook.com/v3.1/me?fields=email,name,picture.width(800).height(800)&access_token=".$json_response->access_token);
		$profileInfoJson = json_decode($profileInfo);
		//print_r($profileInfoJson->picture->data->url);
		$fullName = $profileInfoJson->name;
		$userSex = 'NONE';
		$userEmail = $profileInfoJson->email;
		$facebookId = $profileInfoJson->id;
		$profilePicURL = $profileInfoJson->picture->data->url;
		$this->load->model('user_model');
		$dbUser = $this->user_model->getUserbyEmail($userEmail);
		if(count($dbUser) > 0){	
			$updatedData = array(
               'facebook_id' => $facebookId,
               'full_name' => $fullName,
			   'user_sex' => strtoupper($userSex)
            );
			if($dbUser[0]->facebook_id != $facebookId){
				$this->user_model->updateUserForEmail($userEmail, $updatedData);
			}	
		}else{
		    $data = array(
               'facebook_id' => $facebookId,
               'full_name' => $fullName,
			   'user_sex' => strtoupper($userSex),
			   'email_id' => $userEmail,         
            );
           $this->user_model->createUser($data);
		}
		
		$userData = $this->user_model->getUserbyEmail($userEmail);
		$userSessData = array();
		foreach($userData as $user){	
			$userSessData = array(
				'user_id' => $user->user_id,
				'user_name' => $user->user_name,
				'email_id' => $user->email_id,
				'facebook_id' => $user->facebook_id,
				'twitter_id' => $user->twitter_id,
				'google_id' => $user->google_id,
				'profile_pic' => $user->profile_pic,
				'user_sex' => $user->user_sex,
				'user_role' => $user->user_role, 
				'mobile_number' => $user->email_id, 
				'full_name' => $user->full_name
			);
			
			$profileImagePath = "/home/y99boiz0p9ii/public_html/websites/interviewmania_v2/content-resources/profile-pics/".$user->user_id.".jpg";
			file_put_contents($profileImagePath, file_get_contents($profilePicURL));
			
			$this->session->set_userdata('logged_in', $userSessData);
			$postLoginURL = $this->session->userdata('post_login_url');
			$postLoginURL = base_url().$postLoginURL;
			header('Location: '.$postLoginURL);
			}
		}
	}

}

	private function display_msg($errorMsg){
		echo $errorMsg;
	}

	private function setSecureCookie($userData){
	  foreach ($userData as $key => $value) {
			$cookie = array(
				'name'   => $key,
				'value'  => $value,
				'expire' => '15552000',
				'domain' => '.interviewmania.in',
				'path'   => '/',
				'prefix' => 'interview_mania_',
			);

			$this->input->set_cookie($cookie);
         }
		   
		}	 
  }