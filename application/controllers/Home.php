<?php 
    class Home extends CI_Controller{
        public function __construct()
        {  
            parent::__construct(); 
            //$this->load->helper('url');
            $this->load->model('Home_model');
        }

        //public function index(){    echo "hello"; }

        public function index(){
            
            $this->load->view('templates/header');
            $this->load->view('templates/nav');
            $this->load->view('home/home_view');
            $this->load->view('templates/footer');
        }

        function __destruct(){}

        function about(){
            $this->load->view('templates/header');
            $this->load->view('templates/nav');
            echo    "<br><hr><div class='w3-container'>Hi, I'm Shagufa.";
            echo "This is a simple CodeIgniter Project! I can now build cool sites and blogs using CodeIgniter!</div>";
            $this->load->view('templates/footer');
        }

        function contact(){
            $this->load->view('templates/header');
            $this->load->view('templates/nav');
            echo    "<br><hr><div class='w3-container'>";
            echo "email: shagufa.hannan@gmail.com<br>";
            echo "github: shagufahannan<br> </div>";
            $this->load->view('templates/footer');
        }
    }
?>