<?php
class Question_model extends CI_model
{
    
    
    const TABLE_NAME = 'question_answer';
    const TABLE_COLUMN_QUESTION_ID = 'question_id';
    const TABLE_COLUMN_QUESTION_LEVEL = 'question_level';
    const TABLE_COLUMN_QUESTION_ADDED_BY = 'question_added_by';
    const TABLE_COLUMN_QUESTION_APPROVED_BY = 'question_approved_by';
    const TABLE_COLUMN_CREATED_DATE = 'created_date';
    const TABLE_COLUMN_QUESTION_ORDER = 'question_order';
    const TABLE_COLUMN_QUESTION_STATUS = 'question_status';
    
    
   /* 
    public function getQuestionByQuestionId($questionId)
    {
        $this->db->where(self::TABLE_COLUMN_QUESTION_ID, $questionId);
        $query = $this->db->get(self::TABLE_NAME);
        return $query->result();
    }
    
    
    public function getQuestionByQuestionLevel($questionLevel)
    {
        $this->db->where(self::TABLE_COLUMN_QUESTION_LEVEL, $questionLevel);
        $query = $this->db->get(self::TABLE_NAME);
        return $query->result();
    }
    
    
    public function getQuestionByQuestionAddedBy($questionAddedBy)
    {
        $this->db->where(self::TABLE_COLUMN_QUESTION_ADDED_BY, $questionAddedBy);
        $query = $this->db->get(self::TABLE_NAME);
        return $query->result();
    }
    
    public function getQuestionByQuestionStatus($questionStatus)
    {
        $this->db->where(self::TABLE_COLUMN_QUESTION_STATUS, $questionStatus);
        $query = $this->db->get(self::TABLE_NAME);
        return $query->result();
    }
    
    public function getQuestionByCreatedDate($createdDate)
    {
        $this->db->where(self::TABLE_COLUMN_CREATED_DATE, $createdDate);
        $query = $this->db->get(self::TABLE_NAME);
        return $query->result();
    }
    
    public function getQuestionByQuestionOrder($questionOrder)
    {
        $this->db->where(self::TABLE_COLUMN_QUESTION_ORDER, $questionOrder);
        $query = $this->db->get(self::TABLE_NAME);
        return $query->result();
    }
    
    public function getQuestionByQuestionApprovedBy($questionApprovedBy)
    {
        $this->db->where(self::TABLE_COLUMN_QUESTION_APPROVED_BY, $questionApprovedBy);
        $query = $this->db->get(self::TABLE_NAME);
        return $query->result();
    }
    */
    
   public function getNLatesteQuestions($questionCount)
    { 
        $this->db->order_by(self::TABLE_COLUMN_QUESTION_ID, 'DESC');
        $query = $this->db->get(self::TABLE_NAME, 10);
        return $query->result();
    }
    
    public function getTotalQuestionCount(){
     	$query = $this->db->get(self::TABLE_NAME);
        return $query->num_rows();
    }
      
    
}
?>