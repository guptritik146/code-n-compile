<?php
class LoginFilter extends CI_Controller {

	function __construct() {
		parent::__construct();
		//$currentURL = uri_string();
		if(!$this->session->userdata('logged_in')){
			$this->session->set_userdata('post_login_url', uri_string());
			redirect('/login', 'location');
		}
	}
}


class AdminLoginFilter extends LoginFilter {

	function __construct() {
		parent::__construct();
		if(!(get_user_role() == 'ADMIN' || get_user_role() == 'APPROVER')){
		   redirect('/no-permission', 'location'); 
		} 
	}
}


class ApproverLoginFilter extends LoginFilter {

	function __construct() {
		parent::__construct();
		if(get_user_role() !== 'APPROVER'){
		 	redirect('/no-permission', 'location'); 
		} 
	}
}


class AnalyticsLoginFilter extends LoginFilter {

	function __construct() {
		parent::__construct();
		if(get_user_role() !== 'ANALYTICS'){
		 	redirect('/no-permission', 'location'); 
		} 
	}
}