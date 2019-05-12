<?php 

class Siswa extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('Siswa_model');
		if(!isset($_SESSION['login'])){
			redirect('login');
		} else {
			if ($this->session->userdata('level')!="kepsek") {
			redirect('login');

		}
		}

	}

	
	public function index(){
    	$data['judul'] = 'Kepala Sekolah | Siswa';


    	$data['siswa'] = $this->Siswa_model->getAllSiswa(); 
        if ($this->input->post('keyword')) {
            $data['siswa'] = $this->Siswa_model->cariDataSiswa();
        }


        $this->load->view('templates/headerKepsek', $data);
        $this->load->view('siswa/index', $data);
        $this->load->view('templates/footer');

    }

    public function hapus($id){
    	$this->Siswa_model->hapusDataSiswa($id);
    	$this->session->set_flashdata('flash', 'Dihapus');
    	
    	redirect('siswa');
    }

    public function detail($id){
    	$data['judul'] = 'Detail Data Siswa';

    	$data['siswa'] = $this->Siswa_model->getSiswaById($id);

    	$this->load->view('templates/headerKepsek', $data);
        $this->load->view('siswa/detail', $data);
        $this->load->view('templates/footer');
    }

    public function ubah($id){
    	$data['judul'] = 'Ubah Data Siswa';


    	$data['jenisKelamin'] = ['Laki-laki', 'Perempuan'];
    	$data['agama'] = ['Islam', 'Katolik', 'Kristen', 'Hindu', 'Budha'];
    	$data['statusSosial'] =['Yatim Piatu', 'Yatim/Piatu', 'Fakir/Miskin', 'Biasa/Mampu'];
    	$data['jurusan'] = ['IPA', 'IPS'];

    	$this->Siswa_model->ubahDataSiswa($id);
    	$data['siswa'] = $this->Siswa_model->getSiswaById($id);
    	

    	$this->load->view('templates/headerKepsek', $data);
        $this->load->view('siswa/ubah', $data);
        $this->load->view('templates/footer');

     
    }

    // public function viewUbah($id){
    // 	$data['judul'] = 'Ubah Data Siswa';
    // 	$data['jenisKelamin'] = ['Laki-laki', 'Perempuan'];
    // 	$data['agama'] = ['Islam', 'Katolik', 'Kristen', 'Hindu', 'Budha'];
    // 	$data['statusSosial'] =['Yatim Piatu', 'Yatim/Piatu', 'Fakir/Miskin', 'Biasa/Mampu'];
    // 	$data['jurusan'] = ['IPA', 'IPS'];

    // 	// $data['siswa'] = $this->Siswa_model->ubahDataSiswa($id);
    // 	$data['siswa'] = $this->Siswa_model->getSiswaById($id);

    // 	$this->load->view('templates/headerKepsek', $data);
    //     $this->load->view('siswa/ubah', $data);
    //     $this->load->view('templates/footer');
    // }

}