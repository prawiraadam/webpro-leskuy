<?php
// session_start();

// initializing variables
$username = "";
$email    = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'db_webpro_leskuy');

// REGISTER USER
if (isset($_POST['regbtn'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['name']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $pass1 = mysqli_real_escape_string($db, $_POST['login-pw']);
  $pass2 = mysqli_real_escape_string($db, $_POST['login-pw2']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Name is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($pass1)) { array_push($errors, "Password is required"); }
  if ($pass1 != $pass2) {
	array_push($errors, "");
  $message = "Kedua password tidak sama";
       echo "<script type='text/javascript'>alert('$message');</script>";
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM user WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['email'] === $email) {
       array_push($errors, "");
       $message = "Email telah tersedia";
       echo "<script type='text/javascript'>alert('$message');</script>";
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$pass1 = md5($pass1);//encrypt the password before saving in the database
  	$query = "INSERT INTO user (username, email, password) 
  			  VALUES('$username', '$email', '$pass1')";
  	mysqli_query($db, $query);
  	$message = "Terima kasih telah mendaftar, silakan login!";
    echo "<script type='text/javascript'>alert('$message');</script>";
  }
}


//UNTUK LOGIN


if (isset($_POST['loginbtn'])) {
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $pass1 = mysqli_real_escape_string($db, $_POST['login-pw']);

  if (empty($email)) {
    array_push($errors, "Username is required");
  }
  if (empty($pass1)) {
    array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
    $pass1 = md5($pass1);
    $query = "SELECT * FROM user WHERE email='$email' AND password='$pass1'";
    $results = mysqli_query($db, $query);
    if (mysqli_num_rows($results) == 1) {
      $_SESSION['email'] = $email;
      $_SESSION['success'] = "You are now logged in";
      $message = "Kamu telah berhasil login!";
      echo "<script type='text/javascript'>alert('$message');</script>";
    }else {
      array_push($errors, "Wrong username/password combination");
      $message = "Password atau username salah, silakan coba kembali!";
      echo "<script type='text/javascript'>alert('$message');</script>";
    }
  }
}

?>