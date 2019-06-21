<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tutorial extends CI_Controller {

	
	public function index()
	{
		
	}
	
	public function showTutorialsHome(){
	    $data['tutorialList'] = array();
	 	$this->load->view('common/header');
		$this->load->view('tutorial/tutorial-home', $data);
		$this->load->view('common/footer');
	}
	
	public function showTutorialsForTopic($topicCode){
		$this->load->model('topic_model');
		$data['topics'] = $this->topic_model->getTopicByTopicCode($topicCode);
		$data['primaryTopics'] = $this->topic_model->getPrimaryTopicsByStatus('APPROVED'); 
		if(count($data['topics']) == 0){
			$this->show404Page($data);
		}
		
		if($data['topics'][0]->topic_type == 'PRIMARY_TOPIC'){
			$data['currentPrimaryTopic'] = $data['topics'];
			$data['subtopics'] = $this->topic_model->getFirstSubtopicForPrimaryTopic($data['currentPrimaryTopic'][0]->topic_id);
		}else if($data['topics'][0]->topic_type == 'TOPIC'){
			$data['currentPrimaryTopic'] = $this->topic_model->getTopicById($data['topics'][0]->parent_id);
			$data['subtopics'] = $this->topic_model->getFirstSubtopicForPrimaryTopic($data['currentPrimaryTopic'][0]->topic_id);
		}else if($data['topics'][0]->topic_type == 'SUB_TOPIC'){
			$data['currentPrimaryTopic'] = $this->topic_model->getTopicById($data['topics'][0]->super_parent);
			$data['subtopics'] = $data['topics'];
		}
			
	    $this->load->model('tutorial_model');
		$data['tutorials'] = $this->tutorial_model->getTutorialByTutorialTopicId($data['subtopics'][0]->topic_id);
		if(count($data['tutorials']) == 0){
			$this->show404Page($data);
		}else{
			$data['childTopics'] = $this->topic_model->getChildTopicAndSubTopic($data['currentPrimaryTopic'][0]->topic_id);
			$this->load->view('common/header', $data);
			$this->load->view('tutorial/tutorial-for-topic', $data);
			$this->load->view('common/footer');
		}
	}
	
	public function show404Page($data){
			$data['pageDescription'] = "Page Not Found";
			$data['pageKeyWords'] = "Page Not Found";
			$data['pageTitle'] = "Page Not Found";
			$data['pageType'] = "ERROR";
			$this->load->view('common/header', $data);
			$this->load->view('errors/404-error');
			$this->load->view('common/footer', $data);
			$this->output->set_status_header(404);	
	}
}
