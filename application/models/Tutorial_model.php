<?php 
    class Tutorial_model extends CI_Model {

        const TABLE_NAME = 'tutorial';
        const TABLE_ID = 'tutorial_id'; 
        const TABLE_COLUMN_TUTORIAL_TITLE = 'tutorial_title';
        const TABLE_COLUMN_TUTORIAL_BODY = 'tutorial_body';
        const TABLE_COLUMN_TUTORIAL_TOPIC_ID = 'tutorial_topic_id';
        const TABLE_COLUMN_TUTORIAL_STATUS = 'tutorial_status';
        const TABLE_COLUMN_TUTORIAL_DESC = 'tutorial_desc';
        const TABLE_COLUMN_TUTORIAL_CODE = 'tutorial_code'; 
        const TABLE_COLUMN_TUTORIAL_ADDED_BY = 'tutorial_added_by';
        const TABLE_COLUMN_TUTORIAL_MODIFIED_BY = 'tutorial_modified_by';
        const TABLE_COLUMN_TUTORIAL_APPROVED_BY = 'tutorial_approved_by';
        const TABLE_COLUMN_TUTORIAL_CREATION_DATE = 'tutorial_creation_date';
        const TABLE_COLUMN_TUTORIAL_MODIFICATION_DATE = 'tutorial_modification_date';
        const TABLE_COLUMN_TUTORIAL_APPROVAL_DATE = 'tutorial_approval_date';
       

        public function __construct()
        {
            parent::__construct();
        }

        public function getTutorialById($tutorialId)
        {       
            $result = $this->db->where(self::TABLE_ID, $tutorialId)->get(self::TABLE_NAME)->result();
            return $result;
        }
        
        public function getTutorialByTutorialTopicId($tutorialTopicId)
        {       
            $result = $this->db->where(self::TABLE_COLUMN_TUTORIAL_TOPIC_ID, $tutorialTopicId)->get(self::TABLE_NAME)->result();
            return $result;
        }

}
?>