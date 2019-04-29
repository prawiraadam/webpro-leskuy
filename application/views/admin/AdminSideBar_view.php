<!DOCTYPE html>
<html>
<head>
	<title>Manage User</title>
	<link rel="stylesheet" type="text/css" href="../../assets/css/AdminPageStyle.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
</head>

<style type="text/css">
  .container-fluid{
    background-color: #D0D3D4;
    min-height: 100vh;
  }

  .col-2{
    background-color: #373737;
    min-height: 100vh;
  }

  .logo{
    height: 15%;
    width: 95%;
  }

  i{
    font-size:16px;
    margin-right: 8px;
    color: #FFC107
  }

  .col-2 li a{
    color: white;
    margin-top: 16px;
  }
</style>

<body>
	<div class="container-fluid">
		<div class="row">
  		<div class="col-2">
        <img class="logo" src="../../assets/img/logo.png">
      <!-- Sidebar -->
  		<ul class="nav flex-column">
        <li class="nav-item"><a class="nav-link" href="<?php echo base_url('index.php/Admin/index') ?>"><i class='far'>&#xf007;</i>User List</a></li>
        <li class="nav-item"><a class="nav-link" href="<?php echo base_url('index.php/Admin/univ') ?>"><i class='fas'>&#xf19c;</i>University List</a></li>
        <li class="nav-item"><a class="nav-link" href="<?php echo base_url('index.php/Admin/subject')?>"><i class='fas'>&#xf5da;</i>Subject List</a></li>
        <li class="nav-item"><a class="nav-link" href="<?php echo base_url('index.php/Admin/course')?>"><i class='fas'>&#xf02d;</i>Course List</a></li>
        <li class="nav-item"><a class="nav-link" href="<?php echo base_url('index.php/Admin/video')?>"><i class='far'>&#xf1c8;</i>Video List</a></li>
        <li class="nav-item"><a class="nav-link" href="<?php echo base_url('index.php/Admin/logout')?>"><i class='fas'>&#xf52b;</i>Logout</a></li>
      </ul>
		</div>