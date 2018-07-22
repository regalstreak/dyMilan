<?php
	include ('connect.php');
     
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
  		$username=$_POST['username'];
  		$name=$_POST['name_full'];
  		$present_addr=$_POST['present_addr'];
  		$email=$_POST['email_id'];
  		$telR=$_POST['telR'];
		$pass=$_POST['password'];		
		$sql="INSERT into registered_user value('$username','$name','$present_addr','$email','$telR','$pass')";
  		$qury=mysqli_query($connect,$sql);
		
		
		if(!$qury)
 	 	{	 
   				echo "<script> alert('Username already exists / Something went wrong');</script>";
   				header("refresh:0 ;url=index.php"); 
  		}
  		
		else
  		{
				echo "<script language='javascript'>alert('New Student Registered Successfully');</script>";
				header("refresh:0 ;url=index.php");		
  		}
	}	
    else
    {
        echo '<div class="box" style="width:33%;margin-left:33%;margin-top:10%">
  <div class="box-header with-border">
    <center><h3 class="box-title">Registraion Failed</h3></center>
    <!-- /.box-tools -->
  </div><!-- /.box-header -->
  <div class="box-body">
   <center>Try Again</center>
  </div></div>';
    } 
?>
<html>
<body class="hold-transition login-page">
</body>
</html>