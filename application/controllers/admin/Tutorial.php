<?php
class Tutorial extends CI_Controller {

        public function index()
        {
			
        }
        
        public function showAddTutorialForm(){
            
            $this->load->model('topic_model');
            $data['primaryTopics'] = $this->topic_model->getPrimaryTopicsByStatus('APPROVED');
            
            $this->load->view('common/header');
			$this->load->view('admin/tutorial/add-tutorial-form', $data);
			$this->load->view('common/footer');
        }    

}