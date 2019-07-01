<?php 
    class MyNews extends CI_Controller{
        public function __construct(){    
            parent::__construct();
            $this->load->model('MyNews_model');
        }
        function __destruct(){}

        public function index(){
            $this->load->view('templates/header');
            $this->load->view('templates/nav');
            $this->load->view('mynews/MyNews_view');
            $this->load->view('templates/footer');
        }

        public function setNewMyNews(){
            // get user
            $uname = $this->session->userdata['logged_in']['username'];
            $title = $this->input->post('title');
            $content = $this->input->post('demo1');
            // $category = $this->input->post('category');

            $this->MyNews_model->setMyNews($uname, $title,$content);
            redirect('/MyNews/newCreationSuccess','refresh');
        }

        public function newCreationSuccess(){
            $this->load->view('templates/header');
            $this->load->view('templates/nav');
            echo '<br><hr><div><br>You have created new NEWS successfully!</div>';
            //$this->view->load('');
            $this->load->view('templates/footer');
        }
    }
?>