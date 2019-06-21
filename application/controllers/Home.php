<?php
class Home extends CI_Controller {

        public function index()
        {
        
            $this->load->model('topic_model');
            $data['primaryTopics'] = $this->topic_model->getPrimaryTopicsByStatus('APPROVED'); 
            
            $this->load->model('question_model');
            $data['questions'] = $this->question_model->getNLatesteQuestions(10); 
            $data['questionCount']  = $this->question_model->getTotalQuestionCount(); 
            
			$this->load->view('common/header', $data);
            $this->load->view('home/top-banner');       
            $this->load->view('home/question-list', $data); 
        	$this->load->view('common/footer');
        }

}