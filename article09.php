<?php include 'info.php'; $title = $art9; include 'navbar.php';?>

<section class="page-content">
	<?php $artdate = "23 AUG, 2019"; $arttitle = $art9; include 'article-title.php';?>
	<div class="page-container">
		<div class="container">
			<div class="article">
				<h1>Grid Templates</h1>
				<div class="thumbnail">
					<img src="sprites/12_A9.png" style="width: 100%;">
				</div>
				<p>With a 12-column grid design, you may create more ideas on how you could place different elements on your websites. </p>
				<p>Designing for websites is not as easy as it looks. Surely, at least one time, you have seen websites that are grid-like in structure. Those websites have created such designs for the users to navigation much efficiently and better.</p>
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