<style type="text/css">
  .titik{
    margin-top: 20px;
    border-bottom: 1px dotted green !important;
  }
  .spasi{
    margin-bottom: 40px;
  }
  .menjorong{
    margin-left: -12px;
  }
  .menjorong-keatas{
    margin-top: -15px;
  }
  .msg {
    width:100%;
    border: 1px solid;
    padding:10px;
    margin: 20px;
    color: grey;
  }
  .msg-info{
    border-color: #0288d1;
    background-color: #29b6f6;
    color: white;
  }

  .pembatasCard {
    
    margin-bottom: 60px;
  }
  .pembatas{
    margin-top: 10px;
    border-bottom: 1px dotted white !important; 
    margin-bottom: 10px;
  }
  .rek{
    margin-left: 20px;
    margin-top: -20px !important;
  }
  
</style>

<section>
<div class="body-pendaftaran">
  <div class="row pendaftaran">
    <div class="col s12 l8 offset-l2">
      <div class="card-panel hoverable">
        <h5 class="center">FORMULIR Ubah Data</h5>




        <div class="container left">
          <?php if ($this->session->flashdata('bukti')) : ?>
          <div class="msg msg-info z-depth-3">
            Data <strong>Berhasil!</strong> <?= $this->session->flashdata('bukti'); ?>
          </div>
          <br>
        <br>
        
        <?php endif; ?>
        <?= var_dump($this->session->flashdata('bukti')); ?>
          <h6 class="titik">A. Identitas Calon Siswa</h6>
        </div>
        <br>
        <br>
        <br>
        <br>
        
        <form action="" method="POST">

        <input type="hidden" name="id" value="<?= $siswa['id']; ?>">

        <div class="input-field">
          <i class="material-icons prefix">account_circle</i>
          <input type="text" name="statusPembayaran" id="statusPembayaran" value="<?= $siswa['statusPembayaran']; ?>" >
          <label for="statusPembayaran">Status Pembayaran</label>
        </div>
        <div class="input-field">
          <i class="material-icons prefix">account_circle</i>
          <input type="text" name="nama" id="nama" value="<?= $siswa['nama']; ?>" required class="validate">
          <label for="nama">*Nama</label>
        </div>
        <div class="input-field">
          <i class="material-icons prefix">account_circle</i>
          <input type="number" name="tahunDaftar" id="tahunDaftar" value="<?= $siswa['tahunDaftar']; ?>">
          <label for="tahunDaftar">*Tahun daftar</label>
        </div>
        <div class="input-field">
          <i class="material-icons prefix">looks_one</i>
          <input type="number" name="nisnMts" id="nisnMts" value="<?= $siswa['nisnMts']; ?>">
          <label for="nisnMts">NISN MTs / SMP</label>
        </div>
        <div class="input-field">
          <i class="material-icons prefix">looks_two</i>
          <input type="number" name="noIjazah" id="noIjazah" value="<?= $siswa['noIjazah']; ?>">
          <label for="noIjazah">Nomer Ijazah</label>
        </div>
        <div class="input-field">
          <i class="material-icons prefix">looks_3</i>
          <input type="number" name="noSkhun" id="noSkhun" value="<?= $siswa['noSkhun']; ?>">
          <label for="noSkhun">Nomer SKHUN</label>
        </div>
        <div class="input-field">
          <i class="material-icons prefix">looks_4</i>
          <input type="number" name="noUn" id="noUn" value="<?= $siswa['noUn']; ?>">
          <label for="noUn">Nomer Peserta UN</label>
        </div>
        <div class="input-field">
          <i class="material-icons prefix">child_care</i>
          <input type="number" name="nomerAkte" id="nomerAkte" value="<?= $siswa['nomerAkte']; ?>">
          <label for="nomerAkte">Nomer Akte Kelahiran</label>
        </div>
        <div class="spasi"></div>
        <div class="input-field">
          <i class="material-icons prefix">wc</i>
          <select name="jenisKelamin">
            <?php foreach ($jenisKelamin as $jk) : ?>
              <?php if( $jk == $siswa['jenisKelamin'] ) : ?>  
                <option value="<?= $jk; ?>" selected><?= $jk; ?></option>
              <?php else : ?>
                <option value="<?= $jk; ?>"><?= $jk; ?></option>
              <?php endif; ?>
            <?php endforeach; ?>
          </select>
          <label>*Jenis Kelamin</label>
        </div>
        <div class="spasi"></div>
        <div class="input-field">
          <i class="material-icons prefix">stars</i>
          <select name="agama">
            <?php foreach ($agama as $a) : ?>
              <?php if( $a == $siswa['agama'] ) : ?>  
                <option value="<?= $a; ?>" selected><?= $a; ?></option>
              <?php else : ?>
                <option value="<?= $a; ?>"><?= $a; ?></option>
              <?php endif; ?>
            <?php endforeach; ?>
          </select>
          <label>*Agama</label>
        </div>
        <div class="input-field">
          <i class="material-icons prefix">pin_drop</i>
          <input type="text" name="tempatLahir" id="tempatLahir" value="<?= $siswa['tempatLahir']; ?>" required class="validate">
          <label for="tempatLahir">*Tempat Lahir</label>
        </div>
        <div class="input-field">
          <i class="material-icons prefix">date_range</i>
          <input type="text" class="datepicker validate" name="tanggalLahir" id="tanggalLahir" value="<?= $siswa['tanggalLahir']; ?>" required>
          <label for="tanggalLahir">*Tanggal Lahir</label>
        </div>
        <div class="menjorong">
          <div class="input-field col s6 left-align">
            <i class="material-icons prefix">person</i>
            <input type="number" name="anakKe" id="anakKe" value="<?= $siswa['anakKe']; ?>" required class="validate">
            <label for="anakKe">*Anak ke</label>
          </div>
          <div class="input-field col s6">
            <i class="material-icons prefix">people</i>
            <input type="number" name="dari" id="dari" value="<?= $siswa['dari']; ?>" required class="validate">
            <label for="dari">*dari</label>
          </div>
        </div>
        <br>
        <br>
        <br>
        <div class="input-field">
          <i class="material-icons prefix">place</i>
          <textarea name="alamatSekarang" id="alamatSekarang" required class="materialize-textarea validate"><?= $siswa['alamatSekarang']; ?></textarea>
          <label for="alamatSekarang">*Alamat Sekarang</label>
        </div>
        <div class="input-field">
          <i class="material-icons prefix">stars</i>
          <select name="statusSosial">   
            <option value="Yatim Piatu">Yatim Piatu</option>
            <?php foreach ($statusSosial as $ss) : ?>
              <?php if( $ss == $siswa['statusSosial'] ) : ?>  
                <option value="<?= $ss; ?>" selected><?= $ss; ?></option>
              <?php else : ?>
                <option value="<?= $ss; ?>"><?= $ss; ?></option>
              <?php endif; ?>
            <?php endforeach; ?>
          </select>
          <label>*Status</label>
        </div>
        <div class="input-field">
          <i class="material-icons prefix">drafts</i>
          <input type="email" name="email" id="email" value="<?= $siswa['email']; ?>">
          <label for="email">Email</label>
        </div>
        <div class="input-field">
          <i class="material-icons prefix">phone</i>
          <input type="text" name="noHp" id="noHp" value="<?= $siswa['noHp']; ?>">
          <label for="noHp">Telephone</label>
        </div>
        <div class="input-field">
          <i class="material-icons prefix">school</i>
          <textarea name="asalSekolah" id="asalSekolah" class="materialize-textarea validate" required><?= $siswa['asalSekolah']; ?></textarea>
          <label for="asalSekolah">*Asal Sekolah</label>
        </div>
        <div class="input-field">
          <i class="material-icons prefix">account_circle</i>
          <input type="number" name="npsnAsal" id="npsnAsal" value="<?= $siswa['npsnAsal']; ?>">
          <label for="npsnAsal">NPSN Asal Sekolah</label>
        </div>
        <div class="input-field">
          <i class="material-icons prefix">person_outline</i>
          <select name="jurusan">   
            <?php foreach ($jurusan as $ju) : ?>
              <?php if( $ju == $siswa['jurusan'] ) : ?>  
                <option value="<?= $ju; ?>" selected><?= $ju; ?></option>
              <?php else : ?>
                <option value="<?= $ju; ?>"><?= $ju; ?></option>
              <?php endif; ?>
            <?php endforeach; ?>
          </select>
          <label>*Jurusan</label>
        </div>
        <div class="input-field">
          <i class="material-icons prefix">star</i>
          <input type="text" name="prestasiDalam" id="prestasiDalam" value="<?= $siswa['prestasiDalam']; ?>">
          <label for="prestasiDalam">Prestasi di Sekolah</label>
        </div>
        <div class="input-field">
          <i class="material-icons prefix">redeem</i>
          <input type="text" name="prestasiLuar" id="prestasiLuar" value="<?= $siswa['prestasiLuar']; ?>">
          <label for="prestasiLuar">Prestasi di Luar Sekolah</label>
        </div>
         <!-- <form action="#" class="">
          <div class="file-field input-field">
            <div class="btn">
              <i class="material-icons left">file_upload</i>
              <span>Upload Foto</span>
              <input type="file">
            </div>
            <div class="file-path-wrapper">
              <input class="file-path validate" type="text">
            </div>
          </div>
          <p class="menjorong-keatas">* Tipe file harus JPG atau PNG dan ukuran maksimal photo 2 MB </p>
        </form>  -->
        <br>
        <br>
        <div class="container left">
          <h6 class="titik">A. Identitas Orang Tua/Wali</h6>
        </div>
        <br>
        <br>
        <br>
        <div class="input-field">
          <i class="material-icons prefix">child_care</i>
          <input type="number" name="noKK" id="noKK" value="<?= $siswa['noKK']; ?>">
          <label for="noKK">Nomer Kartu Keluarga</label>
        </div>
        <div class="input-field">
          <i class="material-icons prefix">person</i>
          <input type="text" name="namaAyah" id="namaAyah" value="<?= $siswa['namaAyah']; ?>" required class="validate">
          <label for="namaAyah">*Nama Ayah</label>
        </div>
        <div class="input-field">
          <i class="material-icons prefix">looks_one</i>
          <input type="number" name="noKtpAyah" id="noKtpAyah" value="<?= $siswa['noKtpAyah']; ?>">
          <label for="noKtpAyah">Nomer KTP Ayah</label>
        </div>
        <div class="input-field">
          <i class="material-icons prefix">business_center</i>
          <input type="text" name="pekerjaanAyah" id="pekerjaanAyah" value="<?= $siswa['pekerjaanAyah']; ?>" required class="validate">
          <label for="pekerjaanAyah">*Pekerjaan Ayah</label>
        </div>
        <div class="input-field">
          <i class="material-icons prefix">person</i>
          <input type="text" name="namaIbu" id="namaIbu" value="<?= $siswa['namaIbu']; ?>" required class="validate">
          <label for="namaIbu">*Nama Ibu</label>
        </div>
        <div class="input-field">
          <i class="material-icons prefix">looks_one</i>
          <input type="number" name="noKtpIbu" value="<?= $siswa['noKtpIbu']; ?>" id="noKtpIbu">
          <label for="noKtpIbu">Nomer KTP Ibu</label>
        </div>
        <div class="input-field">
          <i class="material-icons prefix">card_travel</i>
          <input type="text" name="pekerjaanIbu" id="pekerjaanIbu" value="<?= $siswa['pekerjaanIbu']; ?>">
          <label for="pekerjaanIbu">Pekerjaan Ibu</label>
        </div>
        <div class="input-field">
          <i class="material-icons prefix">place</i>
          <textarea name="alamatWali" id="alamatWali" required class="validate materialize-textarea"><?= $siswa['alamatWali']; ?></textarea>
          <label for="alamatWali">*Alamat</label>
        </div>
        <div class="input-field">
          <i class="material-icons prefix">phone</i>
          <input type="number" name="handphoneWali" id="handphoneWali" value="<?= $siswa['handphoneWali']; ?>" required class="validate">
          <label for="handphoneWali">*Telephone Wali</label>
        </div>



        <br>
        <br>
        <br>
        <br>
        <div class="center-align">
          <button type="submit" name="Ubah" class="btn blue">Ubah</button>
        </div>
        </form>
      </div>
    </div>
  </div>
</div>
</section>

