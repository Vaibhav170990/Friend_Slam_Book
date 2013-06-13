<?php
include 'title.php';
?>
<html>
	<title>
		New Member!!
	</title>
	<head>
		<link href="css/styles.css" rel="stylesheet" type="text/css" />
 	<script language="JavaScript">
 		function check(input) {  
    		if(input.validity.typeMismatch){  
        	input.setCustomValidity("Buddy '" + input.value + "' is not a valid email. Enter something nice!!");  
    	}  
    		else {  
        	input.setCustomValidity("");  
    		}                 
		}  
 	</script>	<script type="text/JavaScript">                  function validate(form)                           {                            var returnValue=true;                            var x = document.signupform.tel_number.value;                                     if (signupform.user_pass.value != signupform.c_pass.value)                              {                                 returnValue = false;                                 alert("Your password entries did not match.\nPlease try again.");                                 signupform.user_pass.value = "";                                 signupform.c_pass.value = "";                                 signupform.user_pass.focus();                                 return returnValue;                             }                      	 			if(isNaN(x)|| x.indexOf(" ")!=-1)					{              				alert("Enter numeric value");							return false;                	}       			 	if (x.length > 10||x.length<10)					{                			alert("enter 10 digit mobile number"); 							return false;							signupform.tel_number.focus();          			 }                                     }      </script>
	</head>
	<body>		<div id="container">			<div id="opaque">
		<div id="form">
		<form name="signupform" action="create_new_account.php" method="post"  onsubmit="return validate(this);"  autocomplete="off" >
			<table>
				<tr><td>First Name:<sup>*</sup></td>
					<td><input type="text" name="fname" class="rounded" required  placeholder="Your first name here" /></td>
				
				<td>Last Name:<sup>*</sup></td>
					<td><input type="text" name="lname" class="rounded" required placeholder="Your last name here" /></td>
				</tr>
				<tr><td>Gender:<sup>*</sup></td>
					<td><input type="radio" name="gender" value="male" />Male</input>
						<input type="radio" name="gender" value="female" />Female</input>
					</td>
				</tr>
				<tr><td>Email id:<sup>*</sup></td>
					<td><input type="email" name="email" class="rounded" required oninput="check(this)" placeholder="Your email here"/></td>
				</tr>
				<tr><td>Password:<sup>*</sup></td>
					<td><input type="password" name="user_pass" class="rounded" required placeholder="Your new password" /></td>
				</tr>
				<tr><td>Confirm Password:</td>
					<td><input type="password" name="c_pass" class="rounded" required placeholder="Your new password" /></td>
				</tr>
				<tr><td>Your contact no:(optional)</td>
					<td><input type="tel" name="tel_number" class="rounded"  placeholder="Your contact number" /></td></tr>
					<tr><td><input type="submit" value="Create an Account!" class="button"/></td></tr>
					<tr><td><input type="reset" value="Reset!" class="button"/></td></tr>
			</table>
		</form>
		</div>		</div>		</div>
	</body>
</html>