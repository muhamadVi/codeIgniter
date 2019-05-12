<?php 

class Kepsek extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('Login_model');
		
		if(!isset($_SESSION['login'])){
			redirect('login');
		} else {
		if ($this->session->userdata('level')!="kepsek") {
			redirect('login');

		}
		}

	}

	
	public function index(){
    	$data['judul'] = 'Login | Kepala Sekolah';
        $this->load->view('templates/headerKepsek', $data);
        $this->load->view('kepsek/index');
        $this->load->view('templates/footer');

    }
}