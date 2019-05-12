<?php


class Ekstrakurikuler extends CI_Controller{
    public function index(){
    	$data['judul'] = 'Ekstrakurikuler | MAS Khazanah Kebajikan';
        $this->load->view('templates/header', $data);
        $this->load->view('ekstrakurikuler/index');
        $this->load->view('templates/footer');

    }

}