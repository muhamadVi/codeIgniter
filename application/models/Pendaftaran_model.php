<?php

/**
 * methode chaining
 */
class Pendaftaran_model extends CI_model
{

	public function tambahDataSiswa(){
		// $defaultPembayaran = "Belum";
		// $statusPembayaran = $this->input->post('statusPembayaran');
			// if(empty($statusPembayaran))?$statusPembayaran = $defaultPembayaran : $this->input->post('statusPembayaran'));

		// if(empty($statusPembayaran)){
		// 	$statusPembayaran = $defaultPembayaran;

		// }

		$data = [
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
			"handphoneWali" => $this->input->post('handphoneWali', true),
			"statusPembayaran" => 'Belum'

			
		];

		// $this->db->update('datasiswa' ,array('statusPembayaran' => 'Belum'));
		$this->db->insert('datasiswa', $data);


	}





}