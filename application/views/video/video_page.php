<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">

  <!-- Bootstrap core CSS -->
  <link href="<?php echo base_url('assets/video/vendor/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet">

  <!-- Custom styles for this template -->
  <!-- <link href="<?php echo base_url('assets/video/css/video-page.css')?>" rel="stylesheet"> -->


  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
      <!-- <div class="sidebar-heading"><img id="logo" src="<?php echo base_url('assets/video/img/Logo2.png')?>"/> </div> -->
      <div class="list-group list-group-flush">
        <div class="menu">
          <?php $i=1?>
        <?php foreach ($data as $vid); {?>
          <a href="#tabs<?php echo $i; ?>" class="list-group-item list-group-item-action bg-light">Video One</a></li>
        <?php } ?>
      </div>
      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

      <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <button class="btn btn-primary" id="menu-toggle">Toggle Menu</button>

        <button class="navbar-toggler" 	type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </nav>
      <div class="video-content">
        <div id="tabs1">
            <iframe class="video" width="720" height="400" src="<?php echo $vid->vid_content;?> " frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          <p class="videsc">&nbsp &nbsp Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
      </div>    
    </div>
    <!-- /#page-content-wrapper -->

</html>

