<!DOCTYPE html>
<html>
<head>
	<title>Leskuy! Login</title>
  <link rel="shortcut icon" href="assets/img/logotitle.ico"/>
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Montserrat|Roboto+Slab:300'><!-- library font yang dipakai -->
  <!-- Bootstrap core CSS -->
  <link href="assets/source/bootstrap/css/bootstrap.min.css" rel="stylesheet"><!--css bootstrap supaya letak navbar rapi-->
  <link href="assets/source/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"><!-- untuk icon navbar saat responsive layar kecil -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script> <!-- sidebar responsive -->

</head>
<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="loginNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="<?php echo site_url('home')?>"><img src="<?php echo base_url('assets/img/logo.png');?>" width="100px"></a>
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
            <a class="nav-link js-scroll-trigger" href="#3">Subjek</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#3"><?php echo $_SESSION['username']; ?>  </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>