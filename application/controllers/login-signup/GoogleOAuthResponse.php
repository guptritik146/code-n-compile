<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class GoogleOAuthResponse extends CI_Controller {
	public function index()
	{
		if(!isset($_GET['state']) ||(isset($_GET['state']) && $_GET['state'] != $this->session->userdata('login_state'))){
		  $this->display_msg('Invalid login request');
		  return;
		}
		
		if(isset($_GET['code'])) {
		$code = $_GET['code'];
		$url = 'https://www.googleapis.com/oauth2/v4/token';
		$redirect_uri = base_url()."google-oauth-response";
		$data = array(
			"code" => $code,
			"client_id" => "296749714937-2njoaqn2s9vru2pnqcrab6osea4e0in8.apps.googleusercontent.com",
			"client_secret" => "JfkS8m3z6YT0-rKfld_SCP7E",
			"redirect_uri" => $redirect_uri, 
			"grant_type" => "authorization_code"
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
		$profileInfo = file_get_contents("https://oauth2.googleapis.com/tokeninfo?id_token=".$json_response->id_token);
		$profileInfoJson = json_decode($profileInfo);
		//print_r($profileInfoJson);
		$fullName = $profileInfoJson->name;
		$userSex = 'NONE';
		$userEmail = $profileInfoJson->email;
		$googleId = $profileInfoJson->sub;
		$profilePicURL = $profileInfoJson->picture;
		$this->load->model('user_model');
		$dbUser = $this->user_model->getUserbyEmail($userEmail);
		if(count($dbUser) > 0){	
			$updatedData = array(
               'google_id' => $googleId,
               'full_name' => $fullName,
			   'user_sex' => strtoupper($userSex)
            );
			if($dbUser[0]->google_id != $googleId){
				$this->user_model->updateUserForEmail($userEmail, $updatedData);
			}	
		}else{
		    $data = array(
               'google_id' => $googleId,
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
  }