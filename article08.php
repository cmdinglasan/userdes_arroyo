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
				<p>A three by three layout grid could be used in different instances. Your project may not be visually appealing if your contents lack structure or foundation same as a house.</p>
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
				<p>A four by four layout grid could either increase your content spaces or be as same as the three by three one. "Without a layout grid, graphic elements will not properly work together."</p>
				<small><a href="https://www.designersinsights.com/designer-resources/using-layout-grids-effectively/" target="_blank">Designer Insights, <i>Using Layout Grids Effectively</i></a></small><br><br>
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