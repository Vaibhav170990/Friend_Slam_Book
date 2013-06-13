<?php 
		session_start();
		include 'title.php';
		?>
<html>
	<title>
		
		<?php 
		if(isset($_SESSION['name'])){
			echo $_SESSION['name']." "."Slams!!";
		}
		else{
			header("Location: index.php");
			exit;
		}
		?>		
	</title>
	<head>
		<link href="css/styles.css" type="text/css" rel="stylesheet" />
	</head>
	<body>
		<div id="logout">
		<input type="button" value="Logout" class="button" onclick="window.location.href='logout.php'" />
		</div>
		<div id="container">
		<div id="opaque">
		
		<?php
			$con=mysqli_connect("mysql13.000webhost.com","a2024978_vaibhav","vaibhav17","a2024978_slam");
			// Check connection
			if (mysqli_connect_errno())
		    {
			  echo "Failed to connect to MySQL: " . mysqli_connect_error();
			  }
			$sr_no=1;

			$result = mysqli_query($con,"SELECT id,time_of_post,sl_friend,sl_name FROM slam_entry where sl_friend='$_SESSION[name]'");
			Print "<table width='960px'>";
			Print "<tr><td><b><font size='+2' color='#FFFFFF'>Sr No.</font></b></td><td><b><font size='+2' color='#FFFFFF'>Posted From</font></b></td><td><b><font size='+2' color='#FFFFFF'>Posted For</font></b></td><td><b><font size='+2' color='#FFFFFF'>Post Date and Time</font></b></td><td><b><font size='+2' color='#FFFFFF'>View Post</font></b></td></tr>";
				
			while($row = mysqli_fetch_array($result))
			  {
			  	Print "<tr>";
				Print "<td>".$sr_no."</td>"."<td>".$row['sl_name']."</td>"."<td>".$row['sl_friend']."</td>"."<td>".$row['time_of_post']."</td>"."<td>"."<a href='display_slams_details.php?id=".$row[id]."' style='color: #FFFFFF'/>Click Here</a>"."</td>";
				Print "</tr>";
				$sr_no++;    
			  }
			  Print "</table>"; 
	
			mysqli_close($con);
			?>
			</div>
			</div>
	</body>
</html>