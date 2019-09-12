<?php $title = "Reflection | First Week of UserDes Class"; include 'navbar.php';?>
<?php include 'functions.php';?>

<section class="page-content">
	<?php $artdate = "9 JUL, 2019"; $arttitle = $ref1; include 'article-title.php';?>
	<div class="page-container">
		<div class="container">
			<div class="article">
				<p>For the first week of USERDES class, since it a design-related class, I found it difficult at first because I found out that design is not just the visual elements of things. Design is the overall function and visual element of an object for it to work properly.</p>

				<p>Design process is not just how to make it beautiful but also to make it functional. We need to ask ourselves how can we solve something from nothing. In order to create a plan, first we need to ask what the problem is. Just like with the 1000-floor  elevator, we need to find out what could be improved. </p>

				<p>We could find what could be added to the project, but will it be functional and could improve the users’ experience? </p>
			</div>
			<?php include('sidebar.php'); ?>
		</div>
	</div>
	<div class="comments-container">
		<div class="container">
			<div class="fb-comments" data-href="<?php echo $_SERVER['REQUEST_URI']; ?>" data-width="" data-numposts="5"></div>
		</div>
	</div>
</section>

<?php include "footer.php"; ?>