<?php
session_start();
include 'title.php';
?>
<html>
	<title>
		Fill Slambook!
	</title>
	<head>
		<link href="css/styles.css" rel="stylesheet" type="text/css"/>
	</head>
	<body>
		
		<div id="container">
			<?php if(isset($_SESSION['name'])){
				echo "<h3 align='center'>Here you go"." ".$_SESSION['name']."!! Say something about your friend!</h3>";
			}
			else{
				header("Location: index.php");
				exit;
			} ?>
			<div id="logout">
		<input type="button" value="Logout" class="button" onclick="window.location.href='logout.php'" />
		</div>
			
		<div id="opaque">
		<div id="form">
		<form action="save_slambook.php" method="post">
			<table>
				<tr><td>Enter the first name of your friend</td>
					<td><input type="text" name="sl_friend" class="rounded" placeholder="Enter ur Friend's first name!" size="40" /></td>
				</tr>
				<tr><td>Your Name (First Name Only):</td>
					<td><input type="text" class="rounded" name="sl_name" placeholder="Enter your first name here!" size="40"/></td>
				</tr>
				<tr><td>Your B'day</td>
					<td><input type="date" class="rounded" name="sl_dob" placeholder="Enter your dob here" size="40"/></td>
				</tr>
				<tr><td>Your Sunsign:</td>
					<td><input type="text" class="rounded" name="sl_sunsign" placeholder="Enter your sunsign here" size="40"/></td>
				</tr>
				<tr><td>Favourite Holiday Site:</td>
					<td><input type="text" class="rounded" name="sl_holidaysite" placeholder="Enter your favourite holiday site here" size="40"/></td>
				</tr>
				<tr><td>A place you want to visit befor you die:</td>
					<td><input type="text" class="rounded" name="sl_beforedie" placeholder="Enter place" size="40"/></td>
				</tr>
				<tr><td>With Whom You Want to Spend At Least A Day Of Your Life :</td>
					<td><input type="text" class="rounded" name="sl_dayoflife" placeholder="Please Enter Here " size="40"/></td>
				</tr>
				<tr><td>Addiction (Every one has one! So don't be cupid :D) :</td>
					<td><input type="text" class="rounded" name="sl_addiction" placeholder="Enter your addiction here " size="40"/></td>
				</tr>
				<tr><td>Did You Quit Anything (What?):</td>
					<td><input type="text" class="rounded" name="sl_quit" placeholder="Please Enter Here " size="40"/></td>
				</tr>
				<tr><td>What Is Your Success Secret?:</td>
					<td><textarea name="sl_success" cols="40" rows="10"> </textarea></td>
				</tr>
				<tr><td>Favourite Actor:</td>
					<td><input type="text" class="rounded" name="sl_favactor" placeholder="Enter your favourite actor name here" size="40"/></td>
				</tr>
				<tr><td>Favourite Actress:</td>
					<td><input type="text" class="rounded" name="sl_favactress" placeholder="Enter your favourite actress name here" size="40"/></td>
				</tr>
				<tr><td>Favourite Movie:</td>
					<td><input type="text" class="rounded" name="sl_favmovie" placeholder="Enter your favourite movie name here" size="40"/></td>
				</tr>
				<tr><td>Best Day (Why?):</td>
					<td><input type="text" class="rounded" name="sl_bestday" placeholder="Please enter here" size="40"/></td>
				</tr>
				<tr><td>Worst Day (Why?):</td>
					<td><input type="text" class="rounded" name="sl_worstday" placeholder="Please enter here" size="40"/></td>
				</tr>
				<tr><td>Best friend:</td>
					<td><input type="text" class="rounded" name="sl_bestfrnd" placeholder="Please enter here" size="40"/></td>
				</tr>				
				<tr><td>Worst Enemy:</td>
					<td><input type="text" class="rounded" name="sl_worstenemy" placeholder="Please enter here" size="40"/></td>
				</tr>
				<tr><td>Any true Life adventure you had, or want to have:</td>
					<td><input type="text" class="rounded" name="sl_adventure" placeholder="Please enter here" size="40"/></td>
				</tr>
				<tr><td>An Unforgettable moment:</td>
					<td><input type="text" class="rounded" name="sl_moment" placeholder="Please enter here" size="40"/></td>
				</tr>
				<tr><td>Have you ever secretly hated your best friend and if so why?:</td>
					<td><input type="text" class="rounded" name="sl_hated" placeholder="Please enter here" size="40"/></td>
				</tr>
				<tr><td>Life Time Quotation for me:</td>
					<td><textarea name="sl_quotation" cols="40" rows="10"> </textarea></td>
				</tr>
				<tr><td>3 wishes by a genie; What would you choose?:</td>
					<td><textarea name="sl_genie" cols="40" rows="10"> </textarea></td>
				</tr>
				<tr><td><input type="submit" value="Submit" class="button" /></td></tr>		
			</table>
		</form>
		</div>
		</div>
		</div>
	</body>
</html>