<?php session_start();include 'title.php'; /*if(isset($_SESSION['name'])){	header("Location: home.php");	}else{	header("Location: index.php");}*/?>
<html>
	<title>
		SlamBook Home!!
	</title>
	<head>
		<link href="css/styles.css" rel="stylesheet"/>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>	

<script src="js/gooeymenu.js">
</script>

<link rel="stylesheet" type="text/css" href="css/styles.css" />

	</head>
	<body>		<div id="fb-root"></div>		<script>(function(d, s, id) {  		var js, fjs = d.getElementsByTagName(s)[0];  		if (d.getElementById(id)) return;  		js = d.createElement(s); js.id = id;  		js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=370158516433568";  		fjs.parentNode.insertBefore(js, fjs);		}		(document, 'script', 'facebook-jssdk'));</script>
		<div id="container">
	<div id="form">
		<form action="authenticate.php" method="post" autocomplete="off">
			<table>
				<tr><td>Username:</td>
					<td><input type="text" class="rounded" name="uname" required placeholder="Enter username" /></td>
				</tr>
				<tr><td>Password:</td>
					<td><input type="password" class="rounded" name="pass" required placeholder="Enter Password" /></td>
				</tr>
				<tr><td><input type="submit" value="Log in!" class="button"/></td>					<div class="fb-like" data-href="http://friendslam.site11.com" data-send="true" data-width="450" data-show-faces="true" data-font="arial"></div>				</tr>				
				
			</table>
			<div id="signup">
				<a href="Signup.php" style="color: #FFFFFF">Not a Member Yet? Click Here!!</a>
			</div>		
		</form>
		</div>
	</div>
	</body>
</html>