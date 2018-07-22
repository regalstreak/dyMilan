<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>DYTV | Log in</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
     <script src="bootstrap/jquery-2.2.3.min.js"></script>
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
   

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
       
    <![endif]-->
  </head>
  <body class="hold-transition login-page">
    <div class="login-box">
      <div class="login-logo">
	 
        <a href="index.php"><b>DYTV</b></a>
      </div><!-- /.login-logo -->
      <div class="login-box-body">
	   <center><img src="raitlogosnip.jpg"/><br></center><br>
        <p class="login-box-msg">Sign in to start your session</p>
        <form  method = "POST" action = "authenticate.php">
          <div class="form-group has-feedback">
            <input type="text" name="userid" class="form-control" placeholder="User Id" required>
            <span class="glyphicon glyphicon glyphicon-user form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" name="password" class="form-control" placeholder="Password" required>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="row">
            
              
            <!-- /.col -->
          </div>
        

        <div class="social-auth-links text-center">
		<button type="submit" class="btn bg-maroon btn-block btn-flat">Sign In</button>
		<br>
          <p>- OR -</p>
		  <a href="register.php" class="btn btn-block  bg-navy btn-flat"> Register Now</a>
         <!-- <a href="forgot_password.php" class="btn btn-block bg-olive btn-flat"> Forgot Password</a>
          	
	
    
    <!-- Bootstrap 3.3.5 -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    
    
  </body>
</html>
