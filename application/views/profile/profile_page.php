
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/profile.css")?>">
    <div id="content" class="clearfix">
      <div id="userphoto"><img src="images/avatar.png" alt="default avatar"></div>
      <h1>Minimal User Profile Layout</h1>

      <nav id="profiletabs">
        <ul class="clearfix">
          <li><a href="#profile" class="sel">Profile</a></li>
          <li><a href="#course">Courses</a></li>
          <li><a href="#friends">Friends</a></li>
        </ul>
      </nav>

      <section id="profile">
    
        <p class="profile"><span>E-mail Address <img src="<?php echo base_url('assets/img/edit.png')?>" alt="*Edit*"></span><?php echo $data['user']->email;?></p>
        
        <p class="profile"><span>Username<img src="<?php echo base_url('assets/img/edit.png')?>" alt="*Edit*"></span><?php echo $data['user']->username?></p>
      </section>
      
      <section id="course" class="hidden">
        <p>Most recent Course:</p>
        <?php if($data['course'])  {?>
          <?php foreach ($data['course'] as $course) {?>  
              <p class="course"><?php echo $course->course_name ?></p>
          <?php }?>
        <?php }else{?>
          <p class="course">Belum ada course</p>
        <?php }?>

      </section>
      
      
    </div><!-- @end #content -->
  </div><!-- @end #w -->
<script type="text/javascript">
$(function(){
  $('#profiletabs ul li a').on('click', function(e){
    e.preventDefault();
    var newcontent = $(this).attr('href');
    
    $('#profiletabs ul li a').removeClass('sel');
    $(this).addClass('sel');
    
    $('#content section').each(function(){
      if(!$(this).hasClass('hidden')) { $(this).addClass('hidden'); }
    });
    
    $(newcontent).removeClass('hidden');
  });
});
</script>