<?php 

class Admin extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('Login_model');
		if(!isset($_SESSION['login'])){
			redirect('login');
		} else {
		if ($this->session->userdata('level')!="admin") {
			redirect('login');

		}
		}

	}

	
	public function index(){
    	$data['judul'] = 'Login | Admin';
        $this->load->view('templates/header', $data);
        $this->load->view('admin/index');
        $this->load->view('templates/footer');

    }
}