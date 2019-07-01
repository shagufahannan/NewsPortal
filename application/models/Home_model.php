<?php 
    class Home_model extends CI_Model{
        public function __construct(){  parent::__construct();   }
        public function __destruct(){}

        function getAllNews(){
            $this->db->select('news_id,title,details,date');
            $this->db->from('News');
            $result = $this->db->get();
            
            return $result;
        }
    }
?>