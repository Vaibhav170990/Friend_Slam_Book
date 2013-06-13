<?php
	session_start();
	$con=mysqli_connect("mysql13.000webhost.com","a2024978_vaibhav","vaibhav17","a2024978_slam");
	if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  $current_pass=$_POST['user_pass'];
  $new_password=$_POST['new_pass'];
  $result=mysqli_query($con,"select password from users where password='$current_pass'");
  while($row = mysqli_fetch_array($result))
  {
  if($_POST['user_pass']==$row['password']){
  	$result=mysqli_query($con,"UPDATE users SET password='$new_password' WHERE password='$current_pass'");
  	header("Location: home.php");
  	}
  else{
  	header("Location: Change_pass.php");
  }
  }
 if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
mysqli_close($con);
?>
 