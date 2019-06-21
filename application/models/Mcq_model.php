<?php
class Mcq_model extends CI_model
{
    
    
    const TABLE_NAME = 'mcq';
    const TABLE_ID = 'mcq_Id';
    const TABLE_COLUMN_MCQ_LEVEL = 'mcq_level';
    const TABLE_COLUMN_MCQ_APPROVED_BY = 'mcq_approved_by';
    const TABLE_COLUMN_MCQ_ADDED_BY = 'mcq_added_by';
    const TABLE_COLUMN_CREATED_DATE = 'created_date';
    const TABLE_COLUMN_MCQ_ORDER = 'mcq_order';
    const TABLE_COLUMN_MCQ_STATUS = 'mcq_status';
    
    
    
    
    public function getMcqByMcqId($mcqId)
    {
        $this->db->where(self::TABLE_ID, $mcqId);
        $query = $this->db->get(self::TABLE_NAME);
        return $query->result();
    }
    
    
    public function getMcqByMcqLevel($mcqLevel)
    {
        $this->db->where(self::TABLE_COLUMN_MCQ_LEVEL, $mcqLevel);
        $query = $this->db->get(self::TABLE_NAME);
        return $query->result();
    }
    
    
    public function getMcqByMcqAddedBy($mcqAddedBy)
    {
        $this->db->where(self::TABLE_COLUMN_MCQ_ADDED_BY, $mcqAddedBy);
        $query = $this->db->get(self::TABLE_NAME);
        return $query->result();
    }
    
    public function getMcqByMcqApprovedBy($mcqApprovedBy)
    {
        $this->db->where(self::TABLE_COLUMN_MCQ_APPROVED_BY, $mcqApprovedBy);
        $query = $this->db->get(self::TABLE_NAME);
        return $query->result();
    }
    
    
    public function getMcqBycreatedDate($mcqCreatedDate)
    {
        $this->db->where(self::TABLE_COLUMN_CREATED_DATE, $mcqCreatedDate);
        $query = $this->db->get(self::TABLE_NAME);
        return $query->result();
    }
    
    
    public function getMcqByMcqOrder($McqOrder)
    {
        $this->db->where(self::TABLE_COLUMN_MCQ_ORDER, $McqOrder);
        $query = $this->db->get(self::TABLE_NAME);
        return $query->result();
    }
    
    
    public function getMcqByMcqStatus($McqStatus)
    {
        $this->db->where(self::TABLE_COLUMN_MCQ_STATUS, $McqStatus);
        $query = $this->db->get(self::TABLE_NAME);
        return $query->result();
    }

    
    public function updateMCQ($id, $data)
    {  	
		$this->db->where(self::TABLE_ID, $id);
		$this->db->update(self::TABLE_NAME, $data);
		//echo $this->db->last_query();
    }
    
    public function addMcq($data)
    {   	
		$this->db->insert(self::TABLE_NAME, $data); 
		return $this->db->insert_id();
    }
	
	
    
    
    
}
?>