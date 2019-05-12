<?php

class Login extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('Login_model');
	}


    public function index(){
        if ($this->input->method() === 'get') {
        	$data['judul'] = 'Login | Admin';
            $this->load->view('templates/header', $data);
            $this->load->view('login/index', $data);
            $this->load->view('templates/footer');
        }
        else {
            $user= $this->input->post('username');
            $pass= $this->input->post('password');

            $ceklogin= $this->Login_model->login($user, $pass);

            if ($ceklogin) {
                foreach ($ceklogin as $row);
                $this->session->set_userdata('username', $row->username);
                $this->session->set_userdata('level', $row->level);
                $this->session->set_userdata('login', true);

                if ($this->session->userdata('level')=="kepsek") {
                    redirect('kepsek');
                }elseif ($this->session->userdata('level')=="admin") {
                    redirect('admin');
                    var_dump($_SESSION['username']);
                }
            }else{
                $data['pesan']= "username atau password salah";
                redirect('login');
            }
        }
    }

    public function logout(){
        $this->session->sess_destroy();
        redirect('login');
    }

}