<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FacebookOAuthRequest extends CI_Controller {
	public function index()
	{
		$endpoint = "https://www.facebook.com/v3.2/dialog/oauth?";
		 $client_id = "1581333345332863";
		 $redirect_uri = base_url()."facebook-oauth-response";
		 $state = $this->session->userdata('login_state');
		 $oauth_url = $endpoint."&redirect_uri=".$redirect_uri.'&client_id='.$client_id.'&state='.$state.'&scope=email';
		 header('Location: '.$oauth_url);
		 //echo "Manjesh";
	}
}
