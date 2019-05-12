<?php


class Galeri extends CI_Controller{
    public function index(){
    	$data['judul'] = 'Galeri | MAS Khazanah Kebajikan';
        $this->load->view('templates/header', $data);
        $this->load->view('galeri/index');
        $this->load->view('templates/footer');

    }

}