<?php

class Registration extends CI_Controller{
    public function __construct(){
        parent::__construct();

        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        // $this->load->library('session');
        $this->load->model('Registration_model'); // here! done
    }

    public function index(){
        $this->load->view('templates/header');
        $this->load->view('templates/nav');
        $this->load->view('registration/registration_view'); // here //  done
        $this->load->view('templates/footer');
    }

    public function register_new_user(){
        // echo "here!1<br>";
        $this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
        $this->form_validation->set_rules('email_value', 'Email', 'trim|required|xss_clean');
        $this->form_validation->set_rules('phone_value', 'Phone', 'trim|required|xss_clean');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean');
        $this->form_validation->run();

        //if($this->form_validation->run() == FALSE){
        //    echo "here!3 <br>";
        //}else 
        {           
            $uname = $this->input->post('username');
            $uemail = $this->input->post('email_value');
            $uphone = $this->input->post('phone_value');
            $upass = $this->input->post('password');
            echo "here!4 <br>";
            $is_registered = $this->Registration_model->setCredentials($uname,$uemail,$uphone, $upass);
            if($is_registered == TRUE){ 
                redirect('/Registration/newRegistrationSuccess','refresh'); 
            }
            else{ 
                redirect('/Registration/newRegistrationFail','refresh');
            }
        }
    
    }

    public function newRegistrationSuccess(){
        $this->load->view('templates/header');
        $this->load->view('templates/nav');
        echo '<br><hr><div><br>You have signed up successfully!</div>';
        //$this->load->view('<div>You have signed up successfully!</div>');
        $this->load->view('templates/footer');
    }

    public function newRegistrationFail(){
        $this->load->view('templates/header');
        $this->load->view('templates/nav');
        echo '<br><hr><div><br>You have failed to sign up!Please try again!</div>'; 
        //$this->load->view('<div>You have failed to sign up!Please try again!</div>');
        $this->load->view('templates/footer');
    }


    public function __destruct(){}


}

?>