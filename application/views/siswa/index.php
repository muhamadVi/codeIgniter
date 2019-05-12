<style type="text/css">
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


  

</style>

<br>
<section>
<div class="body-kontak">
  <div class="row kontak">
    <div class="col s12 l8 offset-l2">
      <div class="card-panel hoverable">
        <h5 class="center">Daftar Siswa</h5>

        <?php if ($this->session->flashdata('flash')) : ?>
          <div class="msg msg-info z-depth-3">
            Pendaftaran <strong>Berhasil!</strong> <?= $this->session->flashdata('flash'); ?>
            
          </div>
          
        <?php endif; ?>
        <?php if (empty($siswa)) : ?>
          <div class="msg msg-info z-depth-3">
            Siswa <strong>tidak ditemukan!</strong>
          </div>
          
        <?php endif; ?>
      <!-- Pencarian -->
        <div class="container left">
          <div class="container left">
            
              
              <div class="nav-wrapper">
                <form method="POST">
                  <div class="input-field">
                    <input name="keyword" id="search" type="search" placeholder="Cari Data Siswa" required>
                    <label class="label-icon" for="search">
                      <i class="material-icons blue-text">search</i>
                    </label>
                    <i class="material-icons">close</i>
                  </div>
                </form>
              </div>
  
          </div>
        </div>


        <br><br><br>
        <table class="striped responsive-table">
          <thead>
            <tr>
              <th>NO</th>
              <th>Nama</th>
              <th>Tahun Daftar</th>
              <th>Status Sosial</th>
              <th>Status Pembayaran</th>
              <th>Aksi</th>
            </tr>
          </thead>

          <tbody>
            <?php $i=1; ?>
            <?php foreach ($siswa as $sis) : ?>
              
              <tr>
                <td><?= $i;  ?></td>
                <td><?= $sis['nama']; ?></td>
                <td><?= $sis['tahunDaftar']; ?></td>
                <td><?= $sis['statusSosial']; ?></td>
                <td><?= $sis['statusPembayaran']; ?></td>

                <td>
                  <a class="green-text " href="<?= base_url(); ?>siswa/detail/<?= $sis['id']; ?>">
                    <span class="new badge green" data-badge-caption="Detail"></span>
                  </a> 
                  <a href="<?= base_url(); ?>siswa/ubah/<?= $sis['id']; ?>">
                    <span class="new badge blue" data-badge-caption="Ubah"></span>
                  </a> 
                  <a class="red-text" href="<?= base_url(); ?>siswa/hapus/<?= $sis['id']; ?>" onclick="return confirm('yakin?');" >
                    <span class="new badge red" data-badge-caption="Hapus"></span>
                  </a>
                </td>
              </tr>

              <?php $i++; ?>
              
            <?php endforeach ?>

          
          </tbody>
        </table>






        
      </div>
    </div>
  </div>
</div>
</section>