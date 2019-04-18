<!DOCTYPE html>
<html>
<head>
	<title>KATA PIJAR</title>
  <link rel="shortcut icon" href="<?php echo base_url('assets/img/logotitle.ico')?>"/>
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Montserrat|Roboto+Slab:300'><!-- library font yang dipakai -->
  <link rel='stylesheet' href='<?php echo base_url('assets/css/flickity.min.css')?>'><!-- untuk import ke situs plugin -->
  <link rel="stylesheet" href="<?php echo base_url('assets/css/home_css.css')?>">
  <!-- Bootstrap core CSS -->
  <link href="<?php echo base_url('assets/source/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet"><!--css bootstrap supaya letak navbar rapi-->
  <link href="<?php echo base_url('assets/source/fontawesome-free/css/all.min.css')?>" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"><!-- untuk icon navbar saat responsive layar kecil -->
  <script src="<?php echo base_url('assets/js/flickity.pkgd.min.js')?>"></script> <!-- plugin flickity carousel -->
  <!-- Import untuk navbar -->
  <link rel="stylesheet" href="<?php echo base_url('assets/source/bootstrap/css/bootstrap.min.css')?>">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> <!-- parallax -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script> <!-- sidebar responsive -->

</head>
<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container" id="loginnavcont">
      <a class="navbar-brand js-scroll-trigger" href="home.html"><img src="<?php echo base_url('assets/img/logo.png')?>" width="100px"></a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav text-uppercase ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="<?php echo site_url('home')?>">Beranda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#2">Kursus</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="<?php echo site_url('home/subjek')?>">Subjek</a>
          </li>
          <?php if($this->session->userdata('status')) {?>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $this->session->userdata('u_name')?></a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="<?php echo site_url('profile/profile/') ?><?php echo $this->session->userdata('u_name')?>">My Profile</a>
                <a class="dropdown-item" href="<?php echo site_url('login/logout') ?>">logout</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
          </li>
          <?php }else{ ?>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="<?php echo site_url('login/index')?>">Login</a>
          </li>
          <?php }?> 
      </div>
    </div>
  </nav>
    <script type="text/javascript" src="<?php echo base_url('assets/js/navbar.js');?>"></script>
