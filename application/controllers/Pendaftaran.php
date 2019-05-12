<?php


class Pendaftaran extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('Pendaftaran_model');
	}

    public function index(){
    	$data['judul'] = 'Pendaftaran | MAS Khazanah Kebajikan';
        $this->load->view('templates/header', $data);
        $this->load->view('pendaftaran/index');
        $this->load->view('templates/footer');

    }

    public function tambah(){
    	$this->Pendaftaran_model->tambahDataSiswa();
    	$this->session->set_flashdata('flash', 'Ditambahkan');
    	redirect('pendaftaran');
    }

}