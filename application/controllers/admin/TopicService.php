<?php
class TopicService extends CI_Controller {

        public function index()
        {
			
        }
        
       
        public function getChildTopics($primaryTopicId){
            $this->load->model('topic_model');
            $childTopics = $this->topic_model->getChildTopics($primaryTopicId);
            $result = array();
        	foreach ($childTopics as $childTopic){
				$result[$childTopic->topic_id] = $childTopic->topic_name;
			}
			echo json_encode($result);	
        }

}