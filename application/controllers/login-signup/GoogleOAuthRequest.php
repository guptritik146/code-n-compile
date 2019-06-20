<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class GoogleOAuthRequest extends CI_Controller {
	public function index()
	{
		 $endpoint = "https://accounts.google.com/o/oauth2/v2/auth?";
		 $client_id = "296749714937-2njoaqn2s9vru2pnqcrab6osea4e0in8.apps.googleusercontent.com";
		 $redirect_uri = base_url()."google-oauth-response";
		 $scope =  "profile+email";
		 $state = $this->session->userdata('login_state');
		 $oauth_url = $endpoint."&response_type=code&redirect_uri=".$redirect_uri.'&client_id='.$client_id.'&state='.$state.'&scope='.$scope;
		 header('Location: '.$oauth_url);
	}
}
