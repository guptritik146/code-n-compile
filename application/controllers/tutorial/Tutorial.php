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
}
