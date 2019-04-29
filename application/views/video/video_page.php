<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">

  <!-- Bootstrap core CSS -->
  <link href="<?php echo base_url('assets/video/vendor/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="<?php echo base_url('assets/video/css/video-page.css')?>" rel="stylesheet">


    <!-- /#sidebar-wrapper -->

    <div class="sidenav">
    <?php $i=1?>
      <?php foreach ($data as $vid) {?>
          <a href="#tabs<?php echo $i;?>" class="list-group-item list-group-item-action bg-light"><?php echo $vid->vid_nama?></a></li>
      <?php } ?>
      </div>

    <!-- Page Content -->
    <div class="main">
        <button class="navbar-toggler" 	type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </nav>
      <div class="video-content">
    <?php $i=1?>
      <?php foreach ($data as $vid) {?>
        <div id="tabs<?php echo $i?>">
            <iframe class="video" width="720" height="360" src="<?php echo $vid->vid_content;?> " frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          <p class="videsc"> <?php echo $vid->vid_desc?></p>
      <?php } ?>

        </div>
      </div>    
    </div>
    <!-- /#page-content-wrapper -->
        </div>
        </div>
        
        </div>
        
        </div>

<script type="text/javascript">
$(function(){
  $('#sidenav a').on('click', function(e){
    e.preventDefault();
    var newcontent = $(this).attr('href');
    
    $('#sidenav a').removeClass('sel');
    $(this).addClass('sel');
    
    $('#main video-content').each(function(){
      if(!$(this).hasClass('hidden')) { $(this).addClass('hidden'); }
    });
    
    $(newcontent).removeClass('hidden');
  });
});
</script>
</html>

