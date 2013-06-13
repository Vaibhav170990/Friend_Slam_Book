<html>

	<head>
		<link href="css/styles.css" rel="stylesheet"/>
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>

		<script src="js/gooeymenu.js">
		</script>

		<link rel="stylesheet" type="text/css" href="css/gooeymenu.css" />

	<style>
		html { 
		background: url('images/friends-hd-wallpapers.jpg') no-repeat center center fixed; 
  		-webkit-background-size: cover;
  		-moz-background-size: cover;
  		-o-background-size: cover;
  		background-size: cover;
		}
		ul.gelbuttonmenu li.active{ /*style of LI that gets dynamically added to menu to create background effect*/
		position:absolute;
		width:0;
		background:lightblue;
		background:url('images/gelbuttonleft.gif') top left no-repeat, url('images/gelbuttonright.gif') top right no-repeat, url('images/gelbuttoncenter.gif') top center repeat-x;
}
	</style>

	</head>
	<body><div id="menu">
		<ul id="gooeymenu1" class="gelbuttonmenu">
			<li><a href="home.php">Home</a></li>
			<li><a href="Aboutus.php">About Us!</a></li>
		</ul>

<script>
gooeymenu.setup({id:'gooeymenu1', selectitem:0})
</script>
</div>
	<header>
		<h1 align="center">Friend's SlamBook!</h1>
	</header>
	
	</body>
</html>