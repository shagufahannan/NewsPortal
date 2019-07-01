<?php 
    class MyNews_model extends CI_Model{
        public function __construct(){  parent::__construct();  }
        function __destruct(){  }
        
        public function setMyNews($username, $title, $content){
            $insert="INSERT INTO News (user_fk, title, details) VALUES ( (SELECT id FROM User WHERE email ='$username'),'$title','$content')";
            $this->db->query($insert);
        }
    }
?>