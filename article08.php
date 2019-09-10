<?php include 'info.php'; $title = $art8; include 'navbar.php';?>

<section class="page-content">
	<?php $artdate = "23 AUG, 2019"; $arttitle = $art8; include 'article-title.php';?>
	<div class="page-container">
		<div class="container">
			<div class="article">
				<h1>Grid Templates</h1>
				<p>Designing for websites is not as easy as it looks. Surely, at least one time, you have seen websites that are grid-like in structure. Those websites have created such designs for the users to navigation much efficiently and better.</p>
				<p>Here are the sample of grid templates.</p>
				<h2>3x3 Grid Template</h2>
				<div class="thumbnail">
					<img src="sprites/12_A8a_Dinglasan.png" style="width: 100%;">
					<div class="caption">
						<p>A 3x3 Grid template made for designing more efficiently.</p>
					</div>
				</div>
				<div class="thumbnail">
					<img src="sprites/12_A8c_Dinglasan.png" style="width: 100%;">
					<div class="caption">
						<p>A 3x3 Grid template mostly filled with contents such as text and images.</p>
					</div>
				</div>
				<h2>4x4 Grid Template</h2>
				<div class="thumbnail">
					<img src="sprites/12_A8b_Dinglasan.png" style="width: 100%;">
					<div class="caption">
						<p>A 4x4 Grid template made for designing more efficiently.</p>
					</div>
				</div>
				<div class="thumbnail">
					<img src="sprites/12_A8d_Dinglasan.png" style="width: 100%;">
					<div class="caption">
						<p>A 4x4 Grid template mostly filled with contents such as text and images.</p>
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