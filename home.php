<?php
	session_start();
	include 'title.php';
	if(isset($_SESSION['name'])){
			//echo "Welcome"." ".$_SESSION['name']."!!";
			}
			else{
				header("Location: index.php");
			}
?>
<?php

$sApplicationId = '370158516433568';
$sApplicationSecret = '0ec8722ecb5e225da7e46ee045534d8f';
$iLimit = 500;

?>
	<!DOCTYPE html>
	<html lang="en" xmlns:fb="https://www.facebook.com/2008/fbml">
		<title>
			<?php 
			if(isset($_SESSION['name'])){
			echo "Welcome"." ".$_SESSION['name']."!!";
			}
			else{
				header("Location: index.php");
			} 
			?>
		</title>
	<head>
		<meta charset="utf-8" />
		<link href="css/styles.css" rel="stylesheet" type="text/css" />
		<link href="css/main.css" rel="stylesheet" type="text/css" />
		<style>
			nav ul ul {
	display: none;
	opacity:0.7;
	filter:Alpha(opacity=100); /* IE8 and earlier */


}

	nav ul li:hover > ul {
		display: block;
		opacity:0.7;
	filter:Alpha(opacity=100); /* IE8 and earlier */

	}
	nav ul {
		/*opacity:3.0;
	filter:Alpha(opacity=100); /* IE8 and earlier */

	background: #efefef; 
	background: linear-gradient(top, #efefef 0%, #bbbbbb 100%);  
	background: -moz-linear-gradient(top, #efefef 0%, #bbbbbb 100%); 
	background: -webkit-linear-gradient(top, #efefef 0%,#bbbbbb 100%); 
	box-shadow: 0px 0px 9px rgba(0,0,0,0.15);
	padding: 0 20px;
	border-radius: 10px;  
	list-style: none;
	position: relative;
	display: inline-table;
}
	nav ul:after {
		opacity:0.7;
	filter:Alpha(opacity=100); /* IE8 and earlier */

		content: ""; clear: both; display: block;
	}
	nav ul li {
		opacity:0.7;
	filter:Alpha(opacity=100); /* IE8 and earlier */

	float: left;
}
	nav ul li:hover {
		opacity:0.7;
	filter:Alpha(opacity=100); /* IE8 and earlier */

		background: #4b545f;
		background: linear-gradient(top, #4f5964 0%, #5f6975 40%);
		background: -moz-linear-gradient(top, #4f5964 0%, #5f6975 40%);
		background: -webkit-linear-gradient(top, #4f5964 0%,#5f6975 40%);
	}
		nav ul li:hover a {
			color: #fff;
		}
	
	nav ul li a {
		opacity:0.7;
	filter:Alpha(opacity=100); /* IE8 and earlier */

		display: block; padding: 25px 40px;
		color: #757575; text-decoration: none;
	}
	nav ul ul {
		opacity:0.7;
	filter:Alpha(opacity=100); /* IE8 and earlier */

	background: #5f6975; border-radius: 0px; padding: 0;
	position: absolute; top: 100%;
}
	nav ul ul li {
		opacity:0.7;
	filter:Alpha(opacity=100); /* IE8 and earlier */

		float: none; 
		border-top: 1px solid #6b727c;
		border-bottom: 1px solid #575f6a;
		position: relative;
	}
		nav ul ul li a {
			opacity:0.7;
	filter:Alpha(opacity=100); /* IE8 and earlier */

			padding: 15px 40px;
			color: #fff;
		}	
			nav ul ul li a:hover {
				opacity:0.7;
	filter:Alpha(opacity=100); /* IE8 and earlier */

				background: #4b545f;
			}
			nav ul ul ul {
				opacity:0.7;
	filter:Alpha(opacity=100); /* IE8 and earlier */

	position: absolute; left: 100%; top:0;
}
		</style>
	</head>
	<body>
			
			
		<div id="container">	
		<div id="opaque">
		<?php
			if(isset($_SESSION['name'])){
				echo "Welcome Dear"." ".$_SESSION['name'];
			}
		else{
		header("Location:index.php");
		exit;
		}
		?>
		
		
		<h4>Click here to get Facebook Friend List:</h4>
            <div id="user-info"></div>
            <button id="fb-auth" class="button">Please Click here</button>
		
		<div id="logout">
		<input type="button" value="Logout" class="button" onclick="window.location.href='logout.php'" />
		</div>
		<div id="setting">
			<nav>
	<ul>
		<li><a href="Change_pass.php">Settings</a>
			<ul>
				<li><a href="Change_pass.php">Change Password</a></li>
				
			</ul>
		</li>
		
	</ul>
</nav>
		</div>
		<ul>
			<li><a href="display_slams.php" style="color: #FFFFFF">Slams u've got from friends!!</a></li>
		</ul>
		<div id="result_friends"></div>
        <div id="fb-root"></div>
		<script>
        function sortMethod(a, b) {
            var x = a.name.toLowerCase();
            var y = b.name.toLowerCase();
            return ((x < y) ? -1 : ((x > y) ? 1 : 0));
        }

        window.fbAsyncInit = function() {
            FB.init({ appId: '<?= $sApplicationId ?>', 
                status: true, 
                cookie: true,
                xfbml: true,
                oauth: true
            });

            function updateButton(response) {
                var button = document.getElementById('fb-auth');

                if (response.authResponse) { // in case if we are logged in
                    var userInfo = document.getElementById('user-info');
                    FB.api('/me', function(response) {
                        userInfo.innerHTML = '<img src="https://graph.facebook.com/' + response.id + '/picture?type=large">' + response.name;
                        button.innerHTML = 'Logout';
                    });

                    // get friends
                    FB.api('/me/friends?limit=<?= $iLimit ?>', function(response) {
                        var result_holder = document.getElementById('result_friends');
                        var friend_data = response.data.sort(sortMethod);

                        var results = '';
                        for (var i = 0; i < friend_data.length; i++) {
                            results += '<div><a href="fill_slambook.php" style="color: #FFFFFF"><img src="https://graph.facebook.com/' + friend_data[i].id + '/picture">' + friend_data[i].name + '</a></div>';
                        }

                        // and display them at our holder element
                        result_holder.innerHTML = '<h2>Result list of your friends:</h2>' + results;
                    });

                    button.onclick = function() {
                        FB.logout(function(response) {
                            window.location.reload();
                        });
                    };
                } else { // otherwise - dispay login button
                    button.onclick = function() {
                        FB.login(function(response) {
                            if (response.authResponse) {
                                window.location.reload();
                            }
                        }, {scope:'email'});
                    }
                }
            }

            // run once with current status and whenever the status changes
            FB.getLoginStatus(updateButton);
            FB.Event.subscribe('auth.statusChange', updateButton);    
        };
            
        (function() {
            var e = document.createElement('script'); e.async = true;
            e.src = document.location.protocol + '//connect.facebook.net/en_US/all.js';
            document.getElementById('fb-root').appendChild(e);
        }());
        </script>
		</div>
		</div>
		</body>
	</html>