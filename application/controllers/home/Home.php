<?php
class Home extends CI_Controller {

        public function index()
        {
            $this->load->view('common/header');
            $this->load->view('home/top-banner'); 
        	$this->load->view('common/footer');
        }

}