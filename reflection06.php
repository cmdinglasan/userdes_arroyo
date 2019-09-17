<?php include 'info.php'; $title = $ref6; include 'navbar.php';?>

<section class="page-content">
	<?php $artdate = "11 SEPT, 2019"; $arttitle = $ref6; include 'article-title.php';?>
	<div class="page-container">
		<div class="container">
			<div class="article">
				<p>The first half of the User Design class was amazing and somewhat confusing at first. I thought that user design is only just focusing on the design itself, but it also focuses on the function of the website. Without coding using the different languages, we could create prototype of what we want our application or websites to do. With a click of the elements, we could see what would happen.</p>
				<p>The User Design class does not only teach on how to design applications or websites, but also tangible materials or physical objects such as elevators and glasses. We want products that could function properly, not just look aesthetically good. </p>
				<p>I hope that the first half of User Design class help me in creating functional and beautiful products. It should always remind me that not all good-looking products are functional and not all functional products could be looking good.</p>
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