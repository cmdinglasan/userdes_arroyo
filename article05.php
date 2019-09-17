<?php include 'info.php'; $title = $art5; include 'navbar.php';?>

<section class="page-content">
	<?php $artdate = "16 JUL, 2019"; $arttitle = $art5; include 'article-title.php';?>
	<div class="page-container">
		<div class="container">
			<div class="article">
				<div class="thumbnail">
					<img src="">
					<div class="caption">
						<p></p>
					</div>
				</div>
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