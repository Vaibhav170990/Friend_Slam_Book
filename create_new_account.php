<?php
	
	$con=mysqli_connect("mysql13.000webhost.com","a2024978_vaibhav","vaibhav17","a2024978_slam");
	if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
//$hash_pass=md5($_POST['user_pass']);
$sql="INSERT INTO users (fname, lname, gender, email, password, contact_no) VALUES ('$_POST[fname]','$_POST[lname]','$_POST[gender]','$_POST[email]','$_POST[user_pass]','$_POST[tel_number]')";

if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
mysqli_close($con);
?>
<?php
session_start();
include 'title.php';
$_SESSION['name']=$_POST['fname'];
header("Location:home.php");
exit;
?>
