<?php


class Kontak extends CI_Controller{
    public function index(){
    	$data['judul'] = 'MAS Khazanah Kebajikan';
        $this->load->view('templates/header', $data);
        $this->load->view('kontak/index');
        $this->load->view('templates/footer');

    }

}