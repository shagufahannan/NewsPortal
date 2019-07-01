<?php 
    class Login_model extends CI_Model{
        public function __construct(){  parent::__construct();  }

        public function getLoginAuth($usermail, $pass){
            $condition = "email = '".$usermail."' AND password = '".$pass."'";
            $this->db->select('*');
            $this->db->from('User');
            $this->db->where($condition); 
            $this->db->limit(1);
            $query = $this->db->get();

            if($query->num_rows() == 1){
                return true;
            }else{  return false; }
        }

    }
?>