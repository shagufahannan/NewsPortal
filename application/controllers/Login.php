<?php 
    class Login extends CI_Controller{
        public function __construct(){
            parent::__construct();
            $this->load->helper(array('form', 'url'));
            $this->load->library('form_validation');
            //$this->load->library('session');
            $this->load->model('Login_model');
        }
        public function index(){

            $this->load->view('templates/header');
            $this->load->view('templates/nav');
            $this->load->view('login/Login_view');
            $this->load->view('templates/footer');
        }

        public function user_login_process(){
            $this->form_validation->set_rules('email', 'Email', 'trim|required|xss_clean');
            $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean');

            $res = $this->form_validation->run();
            echo $res."<br>";
            /*if($this->form_validation->run() == FALSE){
                echo "here!3 <br>";
                echo "False block<br>";
                redirect('/Login/','refresh');
            }else*/
            {
                $uemail = $this->input->post('email');
                $upass = $this->input->post('password');

                $is_successful_login = $this->Login_model->getLoginAuth($uemail, $upass);
                if($is_successful_login == TRUE){
                    $session_data = array(
                        'username' => $uemail,
                        );

                    $this->session->set_userdata('logged_in', $session_data);
                    //$this->load->view('home/home_view');
                     redirect('/Home/','refresh');
                    
                } else{
                    redirect('/Login/','refresh');
                }
            }
        }
        public function logout() {

            // Removing session data
            $sess_array = array(
            'username' => ''
            );
            $this->session->unset_userdata('logged_in', $sess_array);
            $data['message_display'] = 'Successfully Logout';
            // $this->load->view('login/Login_view', $data);
            redirect('/Login/','refresh');
        }
        function __destruct(){}
    }
?>