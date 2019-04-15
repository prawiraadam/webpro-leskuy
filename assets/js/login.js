document.querySelector('.img_btn').addEventListener('click', function() {
  document.querySelector('.logincont').classList.toggle('s--signup');
});

$(function(){
  $('.hide-show').show();
  $('.hide-show span').addClass('show')
  
  $('.hide-show span').click(function(){
    if( $(this).hasClass('show') ) {
      $(this).text('Hide Password');
      $('input[name="login-pw"]').attr('type','text');
      $(this).removeClass('show');
    } else {
       $(this).text('Show Password');
       $('input[name="login-pw"]').attr('type','password');
       $(this).addClass('show');
    }
  });
	
	$('form button[type="submit"]').on('click', function(){
		$('.hide-show span').text('Show').addClass('show');
		$('.hide-show').parent().find('input[name="login-pw"]').attr('type','password');
	}); 
});