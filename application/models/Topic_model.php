<?php
class Topic_model extends CI_Model
{
    
    const TABLE_NAME = 'topic';
    const TABLE_ID = 'topic_id';
    const TABLE_COLUMN_TOPIC_CODE = 'topic_code';
    const TABLE_COLUMN_STATUS = 'status';
    const TABLE_COLUMN_ORDER = 'order';
    const TABLE_COLUMN_PARENT_ID = 'parent_id';
	const TABLE_COLUMN_SUPER_PARENT = 'super_parent';
	const TABLE_COLUMN_TOPIC_TYPE = 'topic_type';
    
    
    public function __construct()
    {
        parent::__construct();
    }
    
    public function getTopicById($id)
    {
        $result = $this->db->where(self::TABLE_ID, $id)->get(self::TABLE_NAME)->result();
        return $result;
    }
    
    public function getTopicByTopicCode($topicCode)
    {
        $result = $this->db->where(self::TABLE_COLUMN_TOPIC_CODE, $topicCode)->get(self::TABLE_NAME)->result();
        return $result;
    }
    
    public function getChildTopics($parentId)
    {
        $result = $this->db->where(self::TABLE_COLUMN_PARENT_ID, $parentId)->where(self::TABLE_COLUMN_STATUS, 'APPROVED')->get(self::TABLE_NAME)->result();
        return $result;
    }
	
    public function addTopic($topic)
    {
		$this->db->insert(self::TABLE_NAME, $topic); 
		return $this->db->insert_id();
    }
    public function updateTopic($id, $data)
    {
        
        $this->db->where(self::TABLE_ID, $id);
        $query = $this->db->update(self::TABLE_NAME, $data);
        return $query;
    }
    
    public function getAllTopics()
    {
        $result = $this->db->get(self::TABLE_NAME)->result();
        return $result;
    }
    
    public function getAllTopicsByStatus($status)
    {
        $result = $this->db->where(self::TABLE_COLUMN_STATUS, $status)->get(self::TABLE_NAME)->result();
        return $result;
    }
    public function getPrimaryTopicsByStatus($status)
    {
        $result = $this->db->where(self::TABLE_COLUMN_STATUS, $status)->where(self::TABLE_COLUMN_PARENT_ID, 0)->get(self::TABLE_NAME)->result();
        return $result;
    }
	
	public function getFirstSubtopicForPrimaryTopic($primaryTopic){
		$result = $this->db->where(self::TABLE_COLUMN_SUPER_PARENT, $primaryTopic)->where(self::TABLE_COLUMN_TOPIC_TYPE, 'SUB_TOPIC')->order_by(self::TABLE_COLUMN_ORDER,'asc')->limit(1)->get(self::TABLE_NAME)->result();
        return $result;
	}
	
	public function getChildTopicAndSubTopic($topicId){
		$this->db->where(self::TABLE_COLUMN_SUPER_PARENT, $topicId);
        $query = $this->db->get(self::TABLE_NAME);
        return $query->result();
	}
	
}
?>