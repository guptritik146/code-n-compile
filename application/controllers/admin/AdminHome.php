<?php
class AdminHome extends AdminLoginFilter {

        public function index()
        {
			$header['pageTitle'] = 'Admin Home';
			$header['pageDescription'] = 'Admin Home';
			$header['pageKeyWords'] = 'Admin Home';
			$data['pageType'] = 'ADMIN-HOME';
			$this->load->view('admin/common/header', $header);
			$this->load->view('admin/admin-home/admin-home-top', $data);
			$this->load->view('admin/admin-home/admin-home-question-answers', $data);
			$this->load->view('admin/admin-home/admin-home-buttom', $data);
			$this->load->view('admin/common/footer', $data);
        }

}