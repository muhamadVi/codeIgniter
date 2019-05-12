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
    <div class="col s12 l6">
      <div class="card-panel hoverable">
        <h5 class="center">FORMULIR PENDAFTARAN</h5>

        <div class="container left">
          <h6 class="titik">A. Identitas Calon Siswa</h6>
        </div>
        <br>
        <br>
        <form action="pendaftaran/tambah" method="POST">
        <div class="input-field">
          <i class="material-icons prefix">account_circle</i>
          <input type="text" name="nama" id="nama" required class="validate">
          <label for="nama">*Nama</label>
        </div>
        <div class="input-field">
          <i class="material-icons prefix">account_circle</i>
          <input type="number" name="tahunDaftar" id="tahunDaftar">
          <label for="tahunDaftar">*Tahun daftar</label>
        </div>




        <div class="input-field">
          <i class="material-icons prefix">looks_one</i>
          <input type="number" name="nisnMts" id="nisnMts">
          <label for="nisnMts">NISN MTs / SMP</label>
        </div>
        <div class="input-field">
          <i class="material-icons prefix">looks_two</i>
          <input type="number" name="noIjazah" id="noIjazah">
          <label for="noIjazah">Nomer Ijazah</label>
        </div>
        <div class="input-field">
          <i class="material-icons prefix">looks_3</i>
          <input type="number" name="noSkhun" id="noSkhun">
          <label for="noSkhun">Nomer SKHUN</label>
        </div>
        <div class="input-field">
          <i class="material-icons prefix">looks_4</i>
          <input type="number" name="noUn" id="noUn">
          <label for="noUn">Nomer Peserta UN</label>
        </div>
        <div class="input-field">
          <i class="material-icons prefix">child_care</i>
          <input type="number" name="nomerAkte" id="nomerAkte">
          <label for="nomerAkte">Nomer Akte Kelahiran</label>
        </div>
        <div class="spasi"></div>
        <div class="input-field">
          <i class="material-icons prefix">wc</i>
          <select name="jenisKelamin">
            <option value="Laki-laki">Laki-laki</option>
            <option value="Perempuan">Perempuan</option>
          </select>
          <label>*Jenis Kelamin</label>
        </div>
        <div class="spasi"></div>
        <div class="input-field">
          <i class="material-icons prefix">stars</i>
          <select name="agama">   
            <option value="Islam">Islam</option>
            <option value="Katolik">Katolik</option>
            <option value="Kristen">Kristen</option>
            <option value="Hindu">Hindu</option>
            <option value="Budha">Budha</option>
          </select>
          <label>*Agama</label>
        </div>
        <div class="input-field">
          <i class="material-icons prefix">pin_drop</i>
          <input type="text" name="tempatLahir" id="tempatLahir" required class="validate">
          <label for="tempatLahir">*Tempat Lahir</label>
        </div>
        <div class="input-field">
          <i class="material-icons prefix">date_range</i>
          <input type="text" class="datepicker validate" name="tanggalLahir" id="tanggalLahir" required>
          <label for="tanggalLahir">*Tanggal Lahir</label>
        </div>
        <div class="menjorong">
          <div class="input-field col s6 left-align">
            <i class="material-icons prefix">person</i>
            <input type="number" name="anakKe" id="anakKe" required class="validate">
            <label for="anakKe">*Anak ke</label>
          </div>
          <div class="input-field col s6">
            <i class="material-icons prefix">people</i>
            <input type="number" name="dari" id="dari" required class="validate">
            <label for="dari">*dari</label>
          </div>
        </div>
        <br>
        <br>
        <br>
        <div class="input-field">
          <i class="material-icons prefix">place</i>
          <textarea name="alamatSekarang" id="alamatSekarang" required class="materialize-textarea validate"></textarea>
          <label for="alamatSekarang">*Alamat Sekarang</label>
        </div>
        <div class="input-field">
          <i class="material-icons prefix">stars</i>
          <select name="statusSosial">   
            <option value="Yatim Piatu">Yatim Piatu</option>
            <option value="Yatim/Piatu">Yatim/Piatu</option>
            <option value="Fakir/Miskin">Fakir/Miskin</option>
            <option value="Biasa/Mampu">Biasa/Mampu</option>
          </select>
          <label>*Status</label>
        </div>
        <div class="input-field">
          <i class="material-icons prefix">drafts</i>
          <input type="email" name="email" id="email">
          <label for="email">Email</label>
        </div>
        <div class="input-field">
          <i class="material-icons prefix">phone</i>
          <input type="text" name="noHp" id="noHp">
          <label for="noHp">Telephone</label>
        </div>
        <div class="input-field">
          <i class="material-icons prefix">school</i>
          <textarea name="asalSekolah" id="asalSekolah" class="materialize-textarea validate" required></textarea>
          <label for="asalSekolah">*Asal Sekolah</label>
        </div>
        <div class="input-field">
          <i class="material-icons prefix">account_circle</i>
          <input type="number" name="npsnAsal" id="npsnAsal">
          <label for="npsnAsal">NPSN Asal Sekolah</label>
        </div>
        <div class="input-field">
          <i class="material-icons prefix">person_outline</i>
          <select name="jurusan">   
            <option value="IPA">IPA</option>
            <option value="IPS">IPS</option>
          </select>
          <label>*Jurusan</label>
        </div>
        <div class="input-field">
          <i class="material-icons prefix">star</i>
          <input type="text" name="prestasiDalam" id="prestasiDalam">
          <label for="prestasiDalam">Prestasi di Sekolah</label>
        </div>
        <div class="input-field">
          <i class="material-icons prefix">redeem</i>
          <input type="text" name="prestasiLuar" id="prestasiLuar">
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
          <input type="number" name="noKK" id="noKK">
          <label for="noKK">Nomer Kartu Keluarga</label>
        </div>
        <div class="input-field">
          <i class="material-icons prefix">person</i>
          <input type="text" name="namaAyah" id="namaAyah" required class="validate">
          <label for="namaAyah">*Nama Ayah</label>
        </div>
        <div class="input-field">
          <i class="material-icons prefix">looks_one</i>
          <input type="number" name="noKtpAyah" id="noKtpAyah">
          <label for="noKtpAyah">Nomer KTP Ayah</label>
        </div>
        <div class="input-field">
          <i class="material-icons prefix">business_center</i>
          <input type="text" name="pekerjaanAyah" id="pekerjaanAyah" required class="validate">
          <label for="pekerjaanAyah">*Pekerjaan Ayah</label>
        </div>
        <div class="input-field">
          <i class="material-icons prefix">person</i>
          <input type="text" name="namaIbu" id="namaIbu" required class="validate">
          <label for="namaIbu">*Nama Ibu</label>
        </div>
        <div class="input-field">
          <i class="material-icons prefix">looks_one</i>
          <input type="number" name="noKtpIbu" id="noKtpIbu">
          <label for="noKtpIbu">Nomer KTP Ibu</label>
        </div>
        <div class="input-field">
          <i class="material-icons prefix">card_travel</i>
          <input type="text" name="pekerjaanIbu" id="pekerjaanIbu">
          <label for="pekerjaanIbu">Pekerjaan Ibu</label>
        </div>
        <div class="input-field">
          <i class="material-icons prefix">place</i>
          <textarea name="alamatWali" id="alamatWali" required class="validate materialize-textarea"></textarea>
          <label for="alamatWali">*Alamat</label>
        </div>
        <div class="input-field">
          <i class="material-icons prefix">phone</i>
          <input type="number" name="handphoneWali" id="handphoneWali" required class="validate">
          <label for="handphoneWali">*Telephone Wali</label>
        </div>



        <br>
        <br>
        <br>
        <br>
        <div class="center-align">
          <button type="submit" name="tambah" class="btn orange">Kirim</button>
        </div>
        </form>
      </div>
    </div>
    <div class="col l6 s12 sidebar">
      <aside id="sidebar ">
      <div class="card-panel hoverable">
        
        <?php if ($this->session->flashdata('flash')) : ?>
          <div class="msg msg-info z-depth-3">
            Pendaftaran <strong>Berhasil!</strong> <?= $this->session->flashdata('flash'); ?>
            Silahkan lakukan pembayaran mengikuti panduan dibawah!
          </div>
        <?php endif; ?>

        <div class="row">
          <div class="col s12">
            <div class="card-panel large teal">
              <div class="container">
                <h6 class="white-text center">Tata Cara Pendaftaran Online</h6>
                <div class="pembatas"></div>
              </div>
              <div class="white-text">
                <h6 class="left">1. Isi Form Pendaftaran </h6><br><br>
                <h6 class="left">2. Perhatikan status pendaftaran di atas box ini!</h6><br><br>
                <h6 class="left">3. Jika status berhasil, lakukan pembayaran sebesar Rp.250.000 ke :</h6><br><br>
                  <div class="rek">
                    <h6 class="left">   - BRIS : 1033705518  |  a/n Muhamad Vicky</h6><br><br>
                    <h6 class="left">   - BRIS : 1033705518  |  a/n Faiz Rahman</h6><br><br>
                  </div>
                <h6 class="left">4. Foto bukti pembayaran dan konfirmasi ke No :</h6><br><br>
                  <div class="rek">
                    <h6 class="left">   - No : 089654777502  |  a/n Muhamad Vicky</h6><br><br>
                    <h6 class="left">   - No : 089654777502  |  a/n Faiz Rahman</h6><br><br>
                  </div>
              </div>
              <div class="pembatasCard"></div>
              
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col s12">
            <div class="card-panel large #689f38 light-green darken-2">
              <div class="container">
                <h6 class="white-text center">Tata Cara Mengisi Formulir Online</h6>
                <div class="pembatas"></div>
              </div>
              <div class="white-text">
                <h6 class="left">1. Semua wajib di isi, tanda * (bintang) menandakan sangat wajib di isi  </h6><br><br>
                <h6 class="left">2. Jika mengisi formulir dengan angka jangan menggunakan tanda '-' (strip) </h6><br><br>
                <h6 class="left">3. Jika garis di isiin berwarna merah berarti ada yang salah, cara mengatasinya</h6><br><br>
                  <div class="rek">
                    <h6 class="left"> - arahkan cursor ke garis tersebut dan perhatikan bacaannya</h6><br><br>
                    <h6 class="left"> - Jika masih tidak bisa harap hubungi kami di media sosial dll</h6><br><br>
                  </div>
                <h6 class="left">4. Lalu klik tombol KIRIM, dan selesai.</h6><br><br>
              </div>
              <div class="pembatasCard"></div>
              
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col s12">
            <div class="card-panel large #0277bd light-blue darken-3">
              <div class="container">
                <h6 class="white-text center">Tata Cara Pendaftaran Offline</h6>
                <div class="pembatas"></div>
              </div>
              <div class="white-text">
                <h6 class="left">1. Download Formulir disini! </h6><br><br>
                <h6 class="left">2. Isi dengan benar</h6><br><br>
                <h6 class="left">3. Bawa Formulir yang telah di isi ke sekolahan</h6><br><br>
                <a class="waves-effect waves-light btn-small #039be5 orange">
                  <i class="material-icons left">file_download</i>
                  Download Formulir
                </a>
                
              </div>
              <div class="pembatasCard"></div>
              
            </div>
          </div>
        </div>

        

      </div>
      </aside>
    </div>
  </div>
</div>
</section>

