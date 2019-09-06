<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Meta Tags-->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/style.css"/>
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
	    $(window).scroll(function() {    
	        var scroll = $(window).scrollTop();
	    
	        if (scroll >= 200) {
	            header.addClass("active");
	        } else {
	            header.removeClass("active");
	        }
	    });
		$('.hamburger').click(function(){
		  $('.links').toggleClass('mobile');
		  $('.navbar').toggleClass('active');
		});
	});
	</script>
</head>


<!-- General -->
<?php include 'info.php';?>
<title><?php echo $title;?></title>
<body>

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
							Home
						</a>
					</li>
					<li>
						<a href="activities.php">
							Activities
						</a>
					</li>
					<li>
						<a href="reflection.php">
							Reflection
						</a>
					</li>
					<li>
						<a href="projects.php">
							Projects
						</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
</div>
