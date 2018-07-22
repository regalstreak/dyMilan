<!DOCTYPE html>
<html>
  <head>
     <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Transcript RAIT | Register</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
   <script src="bootstrap/jquery-2.2.3.min.js"></script>
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/AdminLTE.min.css">

 
  </head>
  <body class="hold-transition register-page">
    <div class="register-box">
      <div class="register-logo">
        <a href="index.php"><b>DYTV</a>
      </div>

      <div class="register-box-body">
        <p class="login-box-msg">Register</p>
        <form action="register_action.php" method="post">
          <div class="form-group has-feedback">
            <input type="text" class="form-control" name ="username" placeholder="Username" required>
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
          </div>
		  
		  <div class="form-group has-feedback">
            <input type="password" name="password" class="form-control" placeholder="Password" required>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
		  
          <div class="form-group has-feedback">
            <input type="password" name="c_pass" class="form-control" placeholder="Retype password" required>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
		  
		  <div class="form-group has-feedback">
            <input type="text" class="form-control" name ="name_full" placeholder="Full Name (First Middle Last)" required>
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
          </div>
		  
		   <div class="form-group has-feedback">
            <input type="email" class="form-control" name ="email_id" placeholder="Email" required>
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>
		  
		   <div class="form-group has-feedback">
            <input type="tel" name="telR" class="form-control" placeholder="Mobile Number" max="10000000000" min="7000000000" required>
            <span class="glyphicon  glyphicon-phone form-control-feedback"></span>
          </div>
		  <div class="form-group has-feedback">
            <input type="text" class="form-control" name ="present_addr" placeholder="Present Address" required>
            <span class="glyphicon glyphicon-home form-control-feedback"></span>
          </div>
              <button type="submit" class="btn bg-navy btn-block btn-flat">Register</button>
            
        </form>
<br>
        
        <center><a href="index.php" class="text-center">Already Registered? Log in</a></center>
      </div><!-- /.form-box -->
    </div><!-- /.register-box -->

   !-- Bootstrap 3.3.5 -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    </body>
</html>
