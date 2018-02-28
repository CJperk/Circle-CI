<?php 
	include("config.php");
	session_start();
	//print_r($_POST);
	if(isset($_POST['subimt']))
	{
		$username = $_POST['username'];	
		$password = $_POST['password'];	
		
		$sql = "SELECT * FROM `users` where username ='".$username."' and password ='".$password."'";
		$res = mysqli_query($conn,$sql);
		if(mysqli_num_rows($res)>0) 
		{
			$row = mysqli_fetch_array($qry);
			$id = $row['id'];
			$_SESSION['username'] = $username;
            $_SESSION['user_id'] = $id;
            header("Location: home.php");
		}
		else 
		{
			$error = 1;
		}
	}
?>


<!DOCTYPE html>
<html>
  <head>
    <title>CRI-POC</title>
    <meta charset="utf-8">
    <meta content="ie=edge" http-equiv="x-ua-compatible">
    <meta content="template language" name="keywords">
    <meta content="Tamerlan Soziev" name="author">
    <meta content="Admin dashboard html template" name="description">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <link href="favicon.png" rel="shortcut icon">
    <link href="apple-touch-icon.png" rel="apple-touch-icon">
    <link href="//fast.fonts.net/cssapi/175a63a1-3f26-476a-ab32-4e21cbdb8be2.css" rel="stylesheet" type="text/css">
    <link href="bower_components/select2/dist/css/select2.min.css" rel="stylesheet">
    <link href="bower_components/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <link href="bower_components/dropzone/dist/dropzone.css" rel="stylesheet">
    <link href="bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="bower_components/fullcalendar/dist/fullcalendar.min.css" rel="stylesheet">
    <link href="bower_components/perfect-scrollbar/css/perfect-scrollbar.min.css" rel="stylesheet">
    <link href="css/main.css?version=2.6" rel="stylesheet">
  </head>
  <body class="auth-wrapper">
    <div class="all-wrapper menu-side with-pattern">
      <div class="auth-box-w">
        <div class="logo-w">
          <a href="index.html"><img alt="" src="img/logo-big.png"></a>
        </div>
        <h4 class="auth-header">
          CRI_POC
        </h4>
        <?php
        if(isset($error)>0) { 
        ?>
        <span style="margin-left: 76px;color:red;">Username and Password mis-match</span>
        <?php } ?>
        <form action="index.php" method="post">
          <div class="form-group">
            <label for="">Username</label><input class="form-control" placeholder="Enter your username" type="text" name="username" id="username">
            <div class="pre-icon os-icon os-icon-user-male-circle"></div>
          </div>
          <div class="form-group">
            <label for="">Password</label><input class="form-control" placeholder="Enter your password" type="password" name="password" id="password">
            <div class="pre-icon os-icon os-icon-fingerprint"></div>
          </div>
          <div class="buttons-w">
            <input type="submit" name="subimt" id="subimt" class="btn btn-primary" value="Log me in" />
<!--
            <div class="form-check-inline">
              <label class="form-check-label"><input class="form-check-input" type="checkbox">Remember Me</label>
            </div>
-->
          </div>
        </form>
      </div>
    </div>
  </body>
</html>
