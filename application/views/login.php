<?php include 'server.php';?>
<!DOCTYPE html>
<html>
<head>
  <title>Leskuy! Login</title>
<link rel="shortcut icon" href="<?php echo base_url('img/logotitle.ico')?>"/>
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Montserrat|Roboto+Slab:300'><!-- library font yang dipakai -->  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"><!-- untuk icon navbar saat responsive layar kecil -->

</head>
<body class="login">
<div class="logincont">
      <div class="form sign-in">
        <form method="post" action="<?php echo site_url('home/login')?>">
        <h2 class="uppertext">Selamat Datang!</h2>
          <label>
              <span>Email</span>
              <input type="email" name="email" required>
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
          <p class="forgot-pass"><a class="link-forgot" href="#">Lupa password?</a></p>
          <input type="submit" name="loginbtn" value="Login" class="submit loginbtn" style="color: white"></input>
        <button type="button" class="fb-btn">Hubungkan <span>facebook</span></button>
          </form>
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
          <form method="post" action="<?php echo site_url('home/login')?>">
          <label>
              <span>Nama</span>
              <input type="text" name="name" id="nama" required/>
            </label>
            <label>
              <span>Email</span>
              <input type="email" name="email" id="mail" required/>
            </label>
            <label>
              <span>Password</span>
              <input type="password" name="login-pw" required/>
            </label>
            <label>
              <span>Konfirmasi Password</span>
              <input type="password" name="login-pw2" required/>
            </label>
          <input type="submit" name="regbtn" value="Daftar" class="submit signupbtn" style="color: white"></input>
          <button type="button" class="fb-btn">Join with <span>facebook</span></button>
        </form>
      </div>
    </div>
</div>
</body>
<script>

</script>
<script src="<?php echo base_url('assets/js/login.js')?>"></script>
</html>