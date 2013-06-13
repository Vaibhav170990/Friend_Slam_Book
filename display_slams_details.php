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
		
	</head>
	<body>
		<div id="logout">
		<input type="button" value="Logout" class="button" onclick="window.location.href='logout.php'" />
		</div>
		
		<?php
			$con=mysqli_connect("mysql13.000webhost.com","a2024978_vaibhav","vaibhav17","a2024978_slam");
			// Check connection
			if (mysqli_connect_errno())
		    {
			  echo "Failed to connect to MySQL: " . mysqli_connect_error();
			  }
			
			$id=$_GET['id'];
			$result = mysqli_query($con,"SELECT sl_name,sl_dob,sl_sunsign,sl_holidaysite,sl_beforedie,sl_dayoflife,sl_addiction,sl_quit,sl_success,sl_favactor,sl_favactress,sl_favmovie,sl_bestday,sl_worstday,sl_bestfrnd,sl_worstenemy,sl_adventure,sl_moment,sl_hated,sl_quotation,sl_genie FROM slam_entry where id='$id'");
			echo "<html>";
			echo "<head>";
			echo "<link href='css/styles.css' rel='stylesheet' type='text/css'";
			echo "</head>";
			echo "<body>";
			echo "<div id='container'>";
			echo "<div id='opaque'>";
			echo "<table width='960px'>";
			
			//echo "<tr><td>Sr No.</td><td>Posted From</td><td>Posted For</td><td>Post Date and Time</td><td>View Post</td></tr>";
				
			while($row = mysqli_fetch_array($result))
			  {
			  	echo "<tr>";
				echo "<td><b><font face='Bradley Hand ITC' size='+2' color='#FFFFFF'>1. Name</font></b></td></tr>";
				echo "<tr>"."<td>"."<font size='+3' color='#FFFFFF'>".$row['sl_name']."</font>"."</td>"."</tr>";
				echo "<tr>";
				echo "<td><b><font face='Bradley Hand ITC' size='+2' color='#FFFFFF'>2. B'day</font></b></td></tr>";
				echo "<tr>"."<td>"."<font size='+3' color='#FFFFFF'>".$row['sl_dob']."</font>"."</td>"."</tr>";
				//echo "</tr>";
				echo "<tr>";
				echo "<td><b><font face='Bradley Hand ITC' size='+2' color='#FFFFFF'>3. Sunsign</font></b></td></tr>";
				echo "<tr>"."<td>"."<font size='+3' color='#FFFFFF'>".$row['sl_sunsign']."</font>"."</td>"."</tr>";
				//echo "</tr>";
				echo "<tr>";
				echo "<td><b><font face='Bradley Hand ITC' size='+2' color='#FFFFFF'>4. Favourite Holiday Site</font></b></td></tr>";
				echo "<tr>"."<td>"."<font size='+3' color='#FFFFFF'>".$row['sl_holidaysite']."</font>"."</td>"."</tr>";
				//echo "</tr>";
				echo "<tr>";
				echo "<td><b><font face='Bradley Hand ITC' size='+2' color='#FFFFFF'>5. A place you want to visit befor you die</font></b></td></tr>";
				echo "<tr>"."<td>"."<font size='+3' color='#FFFFFF'>".$row['sl_beforedie']."</font>"."</td>"."</tr>";
				//echo "</tr>";
				echo "<tr>";
				echo "<td><b><font face='Bradley Hand ITC' size='+2' color='#FFFFFF'>6. With Whom You Want to Spend At Least A Day Of Your Life</font></b></td></tr>";
				echo "<tr>"."<td>"."<font size='+3' color='#FFFFFF'>".$row['sl_dayoflife']."</font>"."</td>"."</tr>";
				//echo "</tr>";
				echo "<tr>";
				echo "<td><b><font face='Bradley Hand ITC' size='+2' color='#FFFFFF'>7. Addiction (Everyone has one! So don't be cupid :D)</font></b></td></tr>";
				echo "<tr>"."<td>"."<font size='+3' color='#FFFFFF'>".$row['sl_addiction']."</font>"."</td>"."</tr>";
				//echo "</tr>";
				echo "<tr>";
				echo "<td><b><font face='Bradley Hand ITC' size='+2' color='#FFFFFF'>8. Did You Quit Anything (What?)</font></b></td></tr>";
				echo "<tr>"."<td>"."<font size='+3' color='#FFFFFF'>".$row['sl_quit']."</font>"."</td>"."</tr>";
				//echo "</tr>";
				echo "<tr>";
				echo "<td><b><font face='Bradley Hand ITC' size='+2' color='#FFFFFF'>9. What Is Your Success Secret?</font></b></td></tr>";
				echo "</tr>"."<td>"."<font size='+3' color='#FFFFFF'>".$row['sl_success']."</font>"."</td>"."</tr>";
				//echo "</tr>";
				echo "<tr>";
				echo "<td><b><font face='Bradley Hand ITC' size='+2' color='#FFFFFF'>10. Favourite Actor</font></b></td></tr>";
				echo "<tr>"."<td>"."<font size='+3' color='#FFFFFF'>".$row['sl_favactor']."</font>"."</td>"."</tr>";
				echo "<tr>";
				echo "<td><b><font face='Bradley Hand ITC' size='+2' color='#FFFFFF'>11. Favourite Actess</font></b></td></tr>";
				echo "<tr>"."<td>"."<font size='+3' color='#FFFFFF'>".$row['sl_favactress']."</font>"."</td>"."</tr>";
				echo "<tr>";
				echo "<td><b><font face='Bradley Hand ITC' size='+2' color='#FFFFFF'>12. Favourite Movie</font></b></td></tr>";
				echo "<tr>"."<td>"."<font size='+3' color='#FFFFFF'>".$row['sl_favmovie']."</font>"."</td>"."</tr>";
				echo "<tr>";
				echo "<td><b><font face='Bradley Hand ITC' size='+2' color='#FFFFFF'>13. Best Day (Why?)</font></b></td></tr>";
				echo "<tr>"."<td>"."<font size='+3' color='#FFFFFF'>".$row['sl_bestday']."</font>"."</td>"."</tr>";
				echo "<tr>";
				echo "<td><b><font face='Bradley Hand ITC' size='+2' color='#FFFFFF'>14. Worst Day (Why?)</font></b></td></tr>";
				echo "<tr>"."<td>"."<font size='+3' color='#FFFFFF'>".$row['sl_worstday']."</font>"."</td>"."</tr>";
				echo "<tr>";
				echo "<td><b><font face='Bradley Hand ITC' size='+2' color='#FFFFFF'>15. Best friend</font></b></td></tr>";
				echo "<tr>"."<td>"."<font size='+3' color='#FFFFFF'>".$row['sl_bestfrnd']."</font>"."</td>"."</tr>";
				echo "<tr>";
				echo "<td><b><font face='Bradley Hand ITC' size='+2' color='#FFFFFF'>16. Worst Enemy</font></b></td></tr>";
				echo "<tr>"."<td>"."<font size='+3' color='#FFFFFF'>".$row['sl_worstenemy']."</font>"."</font>"."</td>"."</tr>";
				echo "<tr>";
				echo "<td><b><font face='Bradley Hand ITC' size='+2' color='#FFFFFF'>17. Any true Life adventure you had, or want to have</font></b></td></tr>";
				echo "<tr>"."<td>"."<font size='+3' color='#FFFFFF'>".$row['sl_adventure']."</font>"."</td>"."</tr>";
				echo "<tr>";
				echo "<td><b><font face='Bradley Hand ITC' size='+2' color='#FFFFFF'>18. An Unforgettable moment</font></b></td></tr>";
				echo "<tr>"."<td>"."<font size='+3' color='#FFFFFF'>".$row['sl_moment']."</font>"."</td>"."</tr>";
				echo "<tr>";
				echo "<td><b><font face='Bradley Hand ITC' size='+2' color='#FFFFFF'>19. Have you ever secretly hated your best friend and if so why?</font></b></td></tr>";
				echo "<tr>"."<td>"."<font size='+3' color='#FFFFFF'>".$row['sl_hated']."</font>"."</td>"."</tr>";
				echo "<tr>";
				echo "<td><b><font face='Bradley Hand ITC' size='+2' color='#FFFFFF'>20. Life Time Quotation for me</font></b></td></tr>";
				echo "<tr>"."<td>"."<font size='+3' color='#FFFFFF'>".$row['sl_quotation']."</font>"."</td>"."</tr>";
				echo "<tr>";
				echo "<td><b><font face='Bradley Hand ITC' size='+2' color='#FFFFFF'>21. 3 wishes by a genie; What would you choose?</font></b></td></tr>";
				echo "<tr>"."<td>"."<font size='+3' color='#FFFFFF'>".$row['sl_genie']."</font>"."</td>"."</tr>";
				
				//echo "<td>".$sr_no."</td>"."<td>".$row['sl_name']."</td>"."<td>".$row['sl_friend']."</td>"."<td>".$row['time_of_post']."</td>"."<td>"."<a href='display_slam_details.php?$r' style='color: #FFFFFF'/>Click Here</a>"."</td>";
			
				//$sr_no++;    
			  }
			  echo "</table>";
			  echo "</div>";
			  echo "</div>";
			  echo "</body>";
			  echo "</html>"; 
	
			mysqli_close($con);
			?>
			
	</body>
</html>