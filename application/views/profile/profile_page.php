
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/profile.css")?>">
    <div id="content" class="clearfix">
      <div id="userphoto"><img src="images/avatar.png" alt="default avatar"></div>
      <h1>Minimal User Profile Layout</h1>

      <nav id="profiletabs">
        <ul class="clearfix">
          <li><a href="#profile" class="sel">Profile</a></li>
          <li><a href="#course">Courses</a></li>
        </ul>
      </nav>

      <section id="profile">
    
        <p class="profile"><span>E-mail Address: </span><?php echo $data['user']->email;?></p>
        
        <p class="profile"><span>Username: </span><?php echo $data['user']->username?></p>
        <button href="" type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#edit">Edit</button>
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
  <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">

      <!-- Modal Content -->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="ModalLabel">Edit data</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form method="post" action="<?php echo base_url()?>index.php/Admin/edituser/<?php echo $data['user']->user_id ?>">
            <div class="form-group">
              <input type="text" class="form-control" id="recipient-name" name="username" placeholder="Username">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" id="recipient-name" name="email" placeholder="Email">
            </div>
            <div class="form-group">
              <input type="password" class="form-control" id="recipient-name" name="password" placeholder="Password">
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Edit data</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
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