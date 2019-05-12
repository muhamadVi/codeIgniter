<section>
<footer class="page-footer">
  <div class="container">
    <div class="row">
      <!-- ======================= DATA SEKOLAH ======================= -->
      <div class="col l5 m6 s12">
        <h5 class="wf-title"><i class="material-icons left md-30">school</i>DATA SEKOLAH</h5>
        <p><img class="responsive-img logo-footer" src="https://www.fityangowa.sch.id/smait/assets/images/330891d47a5c708b8f05f4b67344f312.png" alt="Logo"></p>
        <h5>MAS KHAZANAH KEBAJIKAN</h5>
        <p><i class="material-icons left">place</i>JL. TALAS I, RT.01/001, PISANGAN, CIPUTAT TIMUR., KOTA TANGERANG SELATAN, BANTEN 15418 − TELP. 021-27598030</p>
        <p><i class="material-icons left">call</i><a href="tel:021-27598030 / 089634610068"> 021-27598030 / 089634610068</a>
        <p><i class="material-icons left">mail</i><a href="mailto:smait.alfityan@gmail.com"> smait.alfityan@gmail.com</a></p>
      </div>

      <!-- ======================= TAUTAN ======================= -->
      <div class="col l4 m6 s12">
        <h5 class="wf-title"><i class="material-icons left md-30">link</i>TAUTAN</h5>
        <ul>
          <li class="list">
            <a href="http://yayasankhazanahkebajikan.wordpress.com" target="_blank" ="http://yayasankhazanahkebajikan.wordpress.com">YAYASAN KHAZANAH KEBAJIKAN</a>
          </li>
        </ul>        
      </div>


      <!-- ======================= SOSMED ======================= -->
      <div class="col l3 m6 s12">
        <h5 class="wf-title"><i class="material-icons left md-30">share</i>SOSMED</h5>
        <div class="social">
          <ul>
            <li>
              <a href="https://www.facebook.com/smait.fityan" target="_blank">
                <img class="responsive-img social-icons" src="<?= base_url(); ?>assets/img/sosmed/facebook.png" alt="Facebook">
              </a>
            </li>
            <li>
              <a href="https://twitter.com/alfityan_school?lang=en" target="_blank">
                <img class="responsive-img social-icons" src="<?= base_url(); ?>assets/img/sosmed/twitter.png" alt="Twitter">
              </a>
            </li>
            <li>
              <a href="alfityangowa" target="_blank">
                <img class="responsive-img social-icons" src="<?= base_url(); ?>assets/img/sosmed/instagram.png" alt="Instagram">
              </a>
            </li>
            <li>
              <a href="https://www.youtube.com/watch?v=VbIB1Mpvy3M" target="_blank">
                <img class="responsive-img social-icons" src="<?= base_url(); ?>assets/img/sosmed/youtube.png" alt="Youtube">
              </a>
            </li>
            
          </ul>
        </div>
      </div>
    </div>
  </div>

  <!-- footer bawah -->
  <div class="footer-copyright">
    <div class="container">
      <div class="footer">
        <div class="copyright">
          Copyright © 2019 MAS KHAZANAH KEBAJIKAN<br/>
          <a href="#"><i class="material-icons left md-30">expand_less</i><span id="top">Kembali ke atas</span></a>
        </div>
        <div class="developer">

          Developed by <a href="#" target="_blank">Muhamad_Vicky_JD</a><br/>
          Model Desain <a href="#" target="_blank">sekolahku.web.id</a>
        </div>
      </div>
    </div>
  </div>
</footer>
</section>


<!-- javascript -->
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.1/jquery.min.js"></script>
      <script type="text/javascript" src="<?= base_url(); ?>assets/js/materialize.min.js"></script>
      
    

    <!--JavaScript at end of body for optimized loading-->



      <script>
        const sideNav = document.querySelectorAll('.sidenav');
        M.Sidenav.init(sideNav);

        const slider = document.querySelectorAll('.slider');
        M.Slider.init(slider, {
          indicators: false,
          transition: 600,
          height: 625,
          interval: 3000
        });

        const parallax = document.querySelectorAll('.parallax');
        M.Parallax.init(parallax);

        

        const materialbox = document.querySelectorAll('.materialboxed');
        M.Materialbox.init(materialbox);

        const select = document.querySelectorAll('select');
        M.FormSelect.init(select);
        
        const datepicker = document.querySelectorAll('.datepicker');
        M.Datepicker.init(datepicker, {
          format: 'yyyy-mm-dd'
        });        


      </script>
  


      
    </body>
  </html>