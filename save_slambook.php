<?php
	session_start();
	$con=mysqli_connect("mysql13.000webhost.com","a2024978_vaibhav","vaibhav17","a2024978_slam");
	if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  date_default_timezone_set('Asia/Kolkata');
  $date = date('Y-m-d H:i:s');
//$hash_pass=md5($_POST['user_pass']);
$sql="INSERT INTO slam_entry (time_of_post,sl_friend,sl_name,sl_dob,sl_sunsign,sl_holidaysite,sl_beforedie,sl_dayoflife,sl_addiction,sl_quit,sl_success,sl_favactor,sl_favactress,sl_favmovie,sl_bestday,sl_worstday,sl_bestfrnd,sl_worstenemy,sl_adventure,sl_moment,sl_hated,sl_quotation,sl_genie) VALUES ('$date','$_POST[sl_friend]','$_POST[sl_name]','$_POST[sl_dob]','$_POST[sl_sunsign]','$_POST[sl_holidaysite]','$_POST[sl_beforedie]','$_POST[sl_dayoflife]','$_POST[sl_addiction]','$_POST[sl_quit]','$_POST[sl_success]','$_POST[sl_favactor]','$_POST[sl_favactress]','$_POST[sl_favmovie]','$_POST[sl_bestday]','$_POST[sl_worstday]','$_POST[sl_bestfrnd]','$_POST[sl_worstenemy]','$_POST[sl_adventure]','$_POST[sl_moment]','$_POST[sl_hated]','$_POST[sl_quotation]','$_POST[sl_genie]')";

if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
mysqli_close($con);
?>
<?php 
if(isset($_SESSION['name'])){
	header("Location: home.php");
}
?>