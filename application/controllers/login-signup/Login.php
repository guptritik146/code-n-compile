<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		if($this->session->userdata('logged_in')){
		  redirect('/', 'location');
		}	
		$header['pageTitle'] = 'Interview Mania: Login Page.';
		$header['pageDescription'] = 'Interview Mania: Login Page.';
		$header['pageKeyWords'] = 'Login';
		$data['pageType'] = 'LOGIN';
		$this->session->set_userdata('login_state', rand(9999, 888888));
		$this->load->view('common/header', $header);
		$this->load->view('login-signup/login-form');
		$this->load->view('common/footer', $data);
		$postLoginURL = $this->session->userdata('post_login_url');
	}
	
	public function logout(){
		$this->session->unset_userdata('logged_in');
		//$this->session->sess_destroy();
		redirect(base_url(), 'location');
	}
	
	public function showPermissionErrorPage(){
	
	}
	
	public function viewPasswordChangeForm(){
		$header['pageTitle'] = 'Interview Mania: Login Page.';
		$header['pageDescription'] = 'Interview Mania: Login Page.';
		$header['pageKeyWords'] = 'Login';
		$data['pageType'] = 'LOGIN';
		$this->load->view('common/header', $header);
		$this->load->view('login-signup/password-change-form');
		$this->load->view('common/footer', $data);	
	}
}