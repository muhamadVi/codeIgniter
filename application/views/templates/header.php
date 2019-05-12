  <!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="<?= base_url(); ?>assets/css/materialize.min.css"  media="screen,projection"/>
      <!-- Import Ajax libraries -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
      
      <!-- my css -->
      <link rel="stylesheet" href="<?= base_url(); ?>assets/css/style.css">

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <title><?php echo $judul; ?></title>

    <body>

    <!-- navigation -->
  <div class="navbar-fixed">
    <nav class="#2e7d32 green darken-3">
    <div class="container">
      <div class="nav-wrapper">
        <a href="<?= base_url(); ?>" class="brand-logo right">Logo</a>
        <a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        <ul id="nav-mobile" class="left hide-on-med-and-down">
          <li><a href="<?= base_url(); ?>">Beranda</a></li>
          <li><a href="<?= base_url(); ?>profile">Profile</a></li>
          <li><a href="<?= base_url(); ?>ekstrakurikuler">Ekstrakurikuler</a></li> 
          <li><a href="<?= base_url(); ?>galeri">Gallery</a></li>
          <li><a href="<?= base_url(); ?>pendaftaran">Pendaftaran</a></li>
          <li><a href="<?= base_url(); ?>kontak">Hubungi Kami</a></li>
          <li><a href="<?= base_url(); ?>login">Login</a></li>
        </ul>
      </div>
    </div>
    </nav>
  </div>

  <!-- sidenav -->
  <ul class="sidenav" id="mobile-nav">
    <li><a href="<?= base_url(); ?>">Beranda</a></li>
    <li><a href="<?= base_url(); ?>profile/index">Profile</a></li>
    <li><a href="<?= base_url(); ?>eskul/index">Ekstrakurikuler</a></li>
    <li><a href="<?= base_url(); ?>galeri/index">Gallery</a></li>
    <li><a href="<?= base_url(); ?>pendaftaran/index">Pendaftaran</a></li>
    <li><a href="<?= base_url(); ?>kontak/index">Hubungi Kami</a></li>
    <li><a href="<?= base_url(); ?>login/index">Login</a></li>
  </ul>