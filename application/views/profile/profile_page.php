
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
    
        <p class="profile"><span>E-mail Address <img src="<?php echo base_url('assets/img/edit.png')?>" alt="*Edit*"></span> lolno@gmail.com</p>
        
        <p class="profile"><span>Password <img src="<?php echo base_url('assets/img/edit.png')?>" alt="*Edit*"></span> English(US)</p>
        
        <p class="profile"><span>Profile Name <img src="<?php echo base_url('assets/img/edit.png')?>" alt="*Edit*"></span> Public</p>
      
        <p class="profile"><span>Connected Accounts <img src="<?php echo base_url('assets/img/edit.png')?>" alt="*Edit*"></span> None</p>
      </section>
      
      <section id="course" class="hidden">
        <p>Most recent Course:</p>
        
        <p class="course">Machine Learning</p>

      </section>
      
      <section id="friends" class="hidden">
        <p>Friends list:</p>
        
        <ul id="friendslist" class="clearfix">
          <li><a href="#"><img src="images/avatar.png" width="22" height="22"> Username</a></li>
          <li><a href="#"><img src="images/avatar.png" width="22" height="22"> SomeGuy123</a></li>
          <li><a href="#"><img src="images/avatar.png" width="22" height="22"> PurpleGiraffe</a></li>
        </ul>
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