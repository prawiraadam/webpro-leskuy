<!DOCTYPE html>
<html>
<body class="login">
<div class="logincont">
  		<div class="form sign-in">
    		<h2 class="uppertext">Selamat Datang!</h2>
    			<label>
      				<span>Email</span>
      				<input type="email" name="usrname" required>
    			</label>
    			<label class="labelpass">
     				<span>Password</span>
              <input class="password" type="password" name="login-pw" required/>
              <div class="hide-show">
                  <span class="btnpass">
                    <i class="btnpasstxt">Show Password</i>
                  </span>
              </div>
    			</label>
    			<!-- <p class="forgot-pass" href="#">Forgot password?</p> -->
          <p class="forgot-pass"><a class="link-forgot" href="#">Lupa password?</a></p>
   			<button type="button" class="submit loginbtn">Login</button>
    		<button type="button" class="fb-btn">Hubungkan <span>facebook</span></button>
  		</div>
  	<div class="sub-cont">
    	<div class="img">
      		<div class="img_text m--up">
        		<h2>Sudah siap?</h2>
        		<p>Daftar dan jadi bagian kami!</p>
      		</div>
      		<div class="img_text m--in">
        		<h2>Sudah daftar?</h2>
        		<p>Login dan mulai belajar!</p>
      		</div>
      		<div class="img_btn">
        		<span class="m--up">Daftar</span>
        		<span class="m--in">Login</span>
      		</div>
    	</div>
    	<div class="form sign-up">
    	  	<h2 class="uppertext">Isi data kamu!</h2>
    	 		<label>
    	    		<span>Name</span>
    	    		<input type="text" name="login-pw" required/>
    	  		</label>
    	  		<label>
    	    		<span>Email</span>
    	    		<input type="email" name="login-pw" required/>
    	  		</label>
    	  		<label>
    	    		<span>Password</span>
    	    		<input type="password" name="login-pw" required/>
    	  		</label>
            <label>
              <span>Konfirmasi Password</span>
              <input type="password" name="login-pw" required/>
            </label>
    	  	<button type="button" class="submit signupbtn">Sign Up</button>
    	  	<button type="button" class="fb-btn">Join with <span>facebook</span></button>
    	</div>
  	</div>
</div>
</body>
<script src="js/login.js"></script>
</html>