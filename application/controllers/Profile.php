<?php


class Profile extends CI_Controller{
    public function index(){
    	$data['judul'] = 'Profile | MAS Khazanah Kebajikan';
        $this->load->view('templates/header', $data);
        $this->load->view('profile/index');
        $this->load->view('templates/footer');

    }

}