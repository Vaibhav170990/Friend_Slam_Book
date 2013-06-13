<?php
session_start();
$host = 'mysql13.000webhost.com'; // Server Host Name
$user = 'a2024978_vaibhav'; // Server User Name
$password = 'vaibhav17'; // Server Password
$db = 'a2024978_slam'; // Your Database

$link = mysql_connect($host,$user,$password) or die('Error in Server information');
mysql_select_db($db,$link) or die('Can not Select Databasse');
$_SESSION['name']=$_POST['uname'];
$userName = mysql_real_escape_string($_POST['uname']); //User Name sent from Form
$password = mysql_real_escape_string($_POST['pass']); // Password sent from Form
$query="select * from users where fname='$userName' and password='$password'";
$res=mysql_query($query);
$rows=mysql_num_rows($res);
if($rows==1){
	//$_SESSION['userName'];
	//$_SESSION['password'];
	
	header("Location: home.php");
}
else{
	header("Location: index.php");
}
?>