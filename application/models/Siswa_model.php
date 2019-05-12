<?php

/**
 * methode chaining
 */
class Siswa_model extends CI_model
{

	public function getAllSiswa(){
		$query = $this->db->get('datasiswa');
		return $query->result_array();

		

	}

	public function hapusDataSiswa($id){
		// cara pertama
		$this->db->where('id', $id);
		$this->db->delete('datasiswa');

		// cara kedua
		// $this->db->delete('siswa', ['id' => $id ]);

		
	}

	public function getSiswaById($id){
		$query = $this->db->get_where('datasiswa', ['id' => $id]);
		return $query->row_array();
	}


	public function ubahDataSiswa(){
		$data = [
			"statusPembayaran" => $this->input->post('statusPembayaran', true),
			"nama" => $this->input->post('nama', true),
			"tahunDaftar" => $this->input->post('tahunDaftar', true),
			"nisnMts" => $this->input->post('nisnMts', true),
			"noIjazah" => $this->input->post('noIjazah', true),
			"noSkhun" => $this->input->post('noSkhun', true),
			"noUn" => $this->input->post('noUn', true),
			"nomerAkte" => $this->input->post('nomerAkte', true),
			"jenisKelamin" => $this->input->post('jenisKelamin', true),
			"agama" => $this->input->post('agama', true),
			"tempatLahir" => $this->input->post('tempatLahir', true),
			"tanggalLahir" => $this->input->post('tanggalLahir', true),
			"anakKe" => $this->input->post('anakKe', true),
			"dari" => $this->input->post('dari', true),
			"alamatSekarang" => $this->input->post('alamatSekarang', true),
			"statusSosial" => $this->input->post('statusSosial', true),
			"email" => $this->input->post('email', true),
			"noHp" => $this->input->post('noHp', true),
			"asalSekolah" => $this->input->post('asalSekolah', true),
			"npsnAsal" => $this->input->post('npsnAsal', true),
			"jurusan" => $this->input->post('jurusan', true),
			"prestasiDalam" => $this->input->post('prestasiDalam', true),
			"prestasiLuar" => $this->input->post('prestasiLuar', true),
			"noKK" => $this->input->post('noKK', true),
			"namaAyah" => $this->input->post('namaAyah', true),
			"noKtpAyah" => $this->input->post('noKtpAyah', true),
			"pekerjaanAyah" => $this->input->post('pekerjaanAyah', true),
			"namaIbu" => $this->input->post('namaIbu', true),
			"noKtpIbu" => $this->input->post('noKtpIbu', true),
			"pekerjaanIbu" => $this->input->post('pekerjaanIbu', true),
			"alamatWali" => $this->input->post('alamatWali', true),
			"handphoneWali" => $this->input->post('handphoneWali', true)
			
		];


		$this->db->where('id', $this->input->post('id'));
		$this->db->update('datasiswa', $data);
		// $this->session->set_flashdata('bukti', 'Diubah');


	}


	public function cariDataSiswa(){
		$keyword = $this->input->post('keyword', true);
		$this->db->like('nama', $keyword);
		$this->db->or_like('jurusan', $keyword);
		$this->db->or_like('nisnMts', $keyword);
		$this->db->or_like('statusPembayaran', $keyword);
		$this->db->or_like('tahunDaftar', $keyword);
		return $this->db->get('datasiswa')->result_array();
	}

}