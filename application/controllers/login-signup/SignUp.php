<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SignUp extends CI_Controller {

	public function index()
	{
			$header['pageTitle'] = 'Interview Mania: Sign Up Page.';
			$header['pageDescription'] = 'Interview Mania: Sign Up Page.';
			$header['pageKeyWords'] = 'Sign Up';
			$data['pageType'] = 'SIGN-UP';
			$this->load->view('common/header', $header);
			$this->load->view('login-signup/sign-up-form');
			$this->load->view('common/footer', $data);

	}
}