<style type="text/css">
	li{
		list-style-type: none;
	}
	.nama{
		display: inline-block;
		margin-left: 20px;
	}
	.kiri{
		margin-left:-40px;
	}


/*table {
	position: absolute;
	top: 50%;
	left: 50%;
	width: 600px;
	
	transition: all 0.2s ease;
	
	transform: translateX(-50%) translateY(-50%);
	
	background: #fff;
	
	padding: 20px;
}*/

/*.name {
	font-size: 30px;
	border-bottom: 2px solid #888;
	margin-bottom: 20px;
}
.name:first-letter {
	font-size: 300%;
}

.label {
	width: 70px;
	font-weight: bold;
}

.label, .phone, .mobile, .email {
	display: inline-block;
}

.details-td {
	border-right: 1px solid #eee;
	white-space: nowrap;
	
	padding: 20px;
	padding-right: 30px;
}

.description-td {
	position: relative;
	width: 100%;
	padding: 20px;
	padding-left: 30px;
	padding-right: 30px;
	text-align: justify;
	margin-top: 15px;
}
	.description {
		outline: 0px solid transparent;
		border: 0px solid transparent;
	}
	.edit {
		position: absolute;
		top: 0px;
		right: 0;
		
		width: 13px;
		height: 13px;
		
		cursor: pointer;
	}
	.update {
		display: none;
		position: absolute;
		right: 20px;
		bottom: 0;
		background: #c2e59c;
		border: 0;
		padding: 5px;
		width: 80px;
		color: #333;
		outline: 0px solid transparent;
		border: 0px solid transparent;
	}*/
</style>

<section>
	<div class="body-kontak">
	  	<div class="row">
	    	<div class="col s12 l10 offset-l1">
	    		<div class="card-panel col s12 #8bc34a light-green">
	        		<h5 class="center">Detail Data Siswa</h5>
	        		<div class="collection-item">


	

	        			<div class="col s12 m6 l6">
	        				<div class="card white hoverable">
        					<div class="card-content">
        						<span class="card-title">
        							<div class="container left">
			        					<h6 class="titik">Data Siswa</h6>
			        				</div>
        						</span>
			        			<table class="highlight">

					              <tr>
					                <td><strong>Status Pembayaran</strong></td>
					                <td><?= $siswa['statusPembayaran']; ?></td>
					              </tr>
					              <tr>
					                <td><strong>Nama</strong></td>
					                <td><?= $siswa['nama']; ?></td>
					              </tr>
					              <tr>
					              	<td><strong>Tahun Daftar</strong></td>
					                <td><?= $siswa['tahunDaftar']; ?></td>
					              </tr>
					              <tr>
					                <td><strong>NISN MTs/SMP</strong></td>
					                <td><?= $siswa['nisnMts']; ?></td>
					              </tr>
					              <tr>
					                <td><strong>Nomer Ijazah</strong></td>
					                <td><?= $siswa['noIjazah']; ?></td>
					              </tr>
					              <tr>
					                <td><strong>Nomer SKHUN</strong></td>
					                <td><?= $siswa['noSkhun']; ?></td>
					              </tr>
					              <tr>
					                <td><strong>Nomer Peserta UN</strong></td>
					                <td><?= $siswa['noUn']; ?></td>
					              </tr>
					              <tr>
					                <td><strong>Nomer Akte Kelahiran</strong></td>
					                <td><?= $siswa['nomerAkte']; ?></td>
					              </tr>
					              <tr>
					                <td><strong>Jenis Kelamin</strong></td>
					                <td><?= $siswa['jenisKelamin']; ?></td>
					              </tr>
					              <tr>
					                <td><strong>Agama</strong></td>
					                <td><?= $siswa['agama']; ?></td>
					              </tr>
					              <tr>
					                <td><strong>Tempat Lahir</strong></td>
					                <td><?= $siswa['tempatLahir']; ?></td>
					              </tr>
					              <tr>
					                <td><strong>Tanggal Lahir</strong></td>
					                <td><?= $siswa['tanggalLahir']; ?></td>
					              </tr>
					              <tr>
					                <td><strong>Anak Ke</strong></td>
					                <td><?= $siswa['anakKe']; ?></td>
					              </tr>
					              <tr>
					                <td><strong>dari</strong></td>
					                <td><?= $siswa['dari']; ?></td>
					              </tr>
					              <tr>
					                <td><strong>Alamat Sekarang</strong></td>
					                <td><?= $siswa['alamatSekarang']; ?></td>
					              </tr>
					              <tr>
					                <td><strong>Status</strong></td>
					                <td><?= $siswa['statusSosial']; ?></td>
					              </tr>
					              <tr>
					                <td><strong>Email</strong></td>
					                <td><?= $siswa['email']; ?></td>
					              </tr>
					              <tr>
					                <td><strong>Telephone</strong></td>
					                <td><?= $siswa['noHp']; ?></td>
					              </tr>
					              <tr>
					                <td><strong>Nama</strong></td>
					                <td><?= $siswa['nama']; ?></td>
					              </tr>
					              <tr>
					                <td><strong>Asal Sekolah</strong></td>
					                <td><?= $siswa['asalSekolah']; ?></td>
					              </tr>
					              <tr>
					                <td><strong>NPSN Asal Sekolah</strong></td>
					                <td><?= $siswa['npsnAsal']; ?></td>
					              </tr>
					              <tr>
					                <td><strong>Jurusan</strong></td>
					                <td><?= $siswa['jurusan']; ?></td>
					              </tr>
					              <tr>
					                <td><strong>Prestasi di sekolah</strong></td>
					                <td><?= $siswa['prestasiDalam']; ?></td>
					              </tr>
					              <tr>
					                <td><strong>Prestasi di luar Sekolah</strong></td>
					                <td><?= $siswa['prestasiLuar']; ?></td>
					              </tr>



					            </table>
					        </div>
					    	</div>
			            </div>

			            <div class="col s12 m6 l6">
			            	<div class="card white hoverable">
        					<div class="card-content">
        						<span class="card-title">
        							<div class="container left">
			        					<h6 class="titik">Data Orang Tua</h6>
			        				</div>
        						</span>
			        			<table class="highlight">
					              <tr>
					                <td><strong>Nomer Kartu Keluarga</strong></td>
					                <td><?= $siswa['noKK']; ?></td> 
					              </tr>
					              <tr>
					                <td><strong>Nama Ayah</strong></td>
					                <td><?= $siswa['namaAyah']; ?></td> 
					              </tr>
					              <tr>
					                <td><strong>Nomer KTP Ayah</strong></td>
					                <td><?= $siswa['noKtpAyah']; ?></td> 
					              </tr>
					              <tr>
					                <td><strong>Pekerjaan Ayah</strong></td>
					                <td><?= $siswa['pekerjaanAyah']; ?></td> 
					              </tr>
					              <tr>
					                <td><strong>Nama Ibu</strong></td>
					                <td><?= $siswa['namaIbu']; ?></td> 
					              </tr>
					              <tr>
					                <td><strong>Nomer KTP Ibu</strong></td>
					                <td><?= $siswa['noKtpIbu']; ?></td> 
					              </tr>
					              <tr>
					                <td><strong>Pekerjaan Ibu</strong></td>
					                <td><?= $siswa['pekerjaanIbu']; ?></td> 
					              </tr>
					              <tr>
					                <td><strong>Alamat</strong></td>
					                <td><?= $siswa['alamatWali']; ?></td> 
					              </tr>
					              <tr>
					                <td><strong>Telephone Wali</strong></td>
					                <td><?= $siswa['handphoneWali']; ?></td> 
					              </tr>

					            </table>
						    </div>
						    </div>
						</div>

				        
				    </div>
				    
				    
				</div>
			</div>
		</div>
	</div>
</section>
