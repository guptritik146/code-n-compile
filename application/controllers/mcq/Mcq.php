<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mcq extends CI_Controller {

	
	public function index()
	{
		
	}
	
	public function showMcqHome(){
	   
	}
	
	public function showMcqForTopic($topicCode){
		$this->load->model('topic_model');
		$data['topics'] = $this->topic_model->getTopicByTopicCode($topicCode);
        $data['primaryTopics'] = $this->topic_model->getPrimaryTopicsByStatus('APPROVED'); 
		if(count($data['topics']) == 0){
		  $this->show404Page($data);
		  return;
		}
		
		$data['subtopics'] = $this->topic_model->getFirstSubtopicForPrimaryTopic($data['topics'][0]->topic_id);
	    $this->load->model('mcq_model');
		$data['questions'] = $this->mcq_model->getMcqByTopicId($data['topics'][0]->topic_id);
		if(count($data['questions']) == 0){
			 $this->show404Page($data);
		  	return;
		}else{
		     
			$this->load->view('common/header',$data);
			$this->load->view('mcq/mcq-for-topic', $data);
			$this->load->view('common/footer');
		}
	 	
	}
	
	
	
	
	public function showTutorialsForSubTopic($topicCode, $subtopicCode){
		$this->load->model('topic_model');
		$data['topics'] = $this->topic_model->getTopicByTopicCode($subtopicCode);
		if(count($data['topics']) == 0){
		  //TODO
		  echo "Page Not Found";
		  return;
		}
		
	    $this->load->model('tutorial_model');
		$data['tutorials'] = $this->tutorial_model->getTutorialByTutorialTopicId($data['topics'][0]->topic_id);
		if(count($data['tutorials']) == 0){
			echo "Comming soon";
		  return;
		}else{
		
			$this->load->view('common/header');
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
