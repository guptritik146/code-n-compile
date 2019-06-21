<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class ErrorHandling extends CI_Controller{
	public function index()
	{
		
	}
	
	public function noPermissionPage(){
		$header['pageDescription'] = "You Don't have permission to view this web page.";
		$header['pageKeyWords'] = "No Permission";
		$header['pageTitle'] = "You Don't have permission to view this web page.";
		$data['pageType'] = "ERROR";
		$this->load->view('common/header', $header);
		$this->load->view('errors/permission-error');
		$this->load->view('common/footer', $data);
		$this->output->set_status_header(401);		
	}
	
	public function pageNotFound(){
		/*$header['pageDescription'] = "You Don't have permission to view this web page.";
		$header['pageKeyWords'] = "No Permission";
		$header['pageTitle'] = "You Don't have permission to view this web page.";
		$data['pageType'] = "ERROR";
		$this->load->view('common/header', $header);
		$this->load->view('errors/404-error');
		$this->load->view('common/footer', $data);
		$this->output->set_status_header(404);
*/
echo "Manjesh";		
	}
	
}