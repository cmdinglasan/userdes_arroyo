<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Meta Tags-->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/style.css"/>
	<link rel="stylesheet" href="css/linkedin.css"/>
	<link rel="shortcut icon" type="image/png" href="sprites/favicon.ico"/>
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Nunito:300,400,700&display=swap" rel="stylesheet"> 

	<!-- Bootstrap -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<!-- JavaScripts -->
	<script src="https://kit.fontawesome.com/614c79ec05.js"></script>
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	<script type="text/javascript">
	$(function() {
	    var header = $(".fixed-title");
	    var navbar = $(".navbar");
	    $(window).scroll(function() {    
	        var scroll = $(window).scrollTop();
	    
	        if (scroll >= 200) {
	            header.addClass("active");
	        } else {
	            header.removeClass("active");
	        }
	        if (scroll >= 70) {
	            navbar.addClass("scroll");
	        } else {
	            navbar.removeClass("scroll");
	        }
	    });
		$('.hamburger').click(function(){
		  $('.links').toggleClass('mobile');
		  $('.navbar').toggleClass('active');
		});
		$('.btn.portrait').click(function(){
		  $('.btn.portrait').addClass('active');
		  $('.btn.landscape').removeClass('active');
		  $('.page-container .posts').removeClass('landscape');
		  $('.page-container .posts').addClass('portrait');
		});
		$('.btn.landscape').click(function(){
		  $('.btn.portrait').removeClass('active');
		  $('.btn.landscape').addClass('active');
		  $('.page-container .posts').addClass('landscape');
		  $('.page-container .posts').removeClass('portrait');
		});
	});
	</script>
</head>


<!-- General -->
<?php include 'info.php';?>
<title><?php echo $title;?></title>
<body>

<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v4.0&appId=235627133273363&autoLogAppEvents=1"></script>

<div class="main-navigation">
	<nav class="navbar">
		<div class="container">
			<div class="logo">
				<a href="index.php">
					<img src="sprites/cd_logo_2.png">
				</a>
			</div>
			<div class="hamburger">
				<i class="fas fa-bars"></i>
			</div>
			<div class="links">
				<ul>
					<li>
						<a href="index.php">
							<span>Home</span>
						</a>
					</li>
					<li>
						<a href="activities.php">
							<span>Activities</span>
						</a>
					</li>
					<li>
						<a href="reflection.php">
							<span>Reflection</span>
						</a>
					</li>
					<li>
						<a href="projects.php">
							<span>Projects</span>
						</a>
					</li>
					<li>
						<a href="learnings.php">
							<span>Learnings</span>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
</div>
