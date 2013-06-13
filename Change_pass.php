<?php 
session_start();
include 'title.php';
if(isset($_SESSION['name'])){
	
}
else{
	header("Location: index.php");
}
?>
<html>
	<title>
		Change Password!
	</title>
	<head>
		<link href="css/styles.css" rel="stylesheet" type="text/css" />
		<script type="text/JavaScript">
                  function validate(form)  
                         {
                            var returnValue=true;
                            //var x = document.signupform.tel_number.value;                  
                   if (change_pass.new_pass.value != change_pass.confirm_pass.value)
                              {
                                 returnValue = false;
                                 alert("Your password entries did not match.\nPlease try again.");
                                 change_pass.new_pass.value = "";
                                 change_pass.confirm_pass.value = "";
                                 change_pass.new_pass.focus();
                                 return returnValue;
                             }
                            }
                            </script>

	</head>
	<body>
		<div id="logout">
		<input type="button" value="Logout" class="button" onclick="window.location.href='logout.php'" />
		</div>
		<div id="container">
			<div id="opaque">
				<div id="form">
			<form name="change_pass" action="update_pass.php" method="post" onsubmit="return validate(this);" autocomplete="off">
				<?php 
				echo "<h3 align='centre'>Please enter the following entries to change password</h3>";
				?>
				<table align="center">
					<tr><td>Enter your current password:</td> 
						<td><input type="password" name="user_pass" class="rounded" placeholder="Enter your current passwprd" /></td></tr>
						<tr><td>Enter your new password: </td>
							<td><input type="password" name="new_pass" class="rounded" placeholder="Enter your new password here" /></td>
						</tr>
						<tr><td>Confirm your new password:</td>
							<td><input type="password" name="confirm_pass" class="rounded" placeholder="Retype your new password" /> </td>
						</tr>
						<tr><td><input type="submit" value="Proceed" /></td></tr>
				</table>
			</form>
			</div>
			</div>
		</div>
	</body>
</html>