<?php include 'info.php'; $title = $art6; include 'navbar.php';?>

<section class="page-content">
	<?php $artdate = "18 SEPT, 2019"; $arttitle = $art6; include 'article-title.php';?>
	<div class="page-container">
		<div class="container">
			<div class="article">
				<h2>What is a persona?</h2>
				<p>A persona is a way to model, summarize and communicate research about people who have been observed or researched in some way. A persona is depicted as a specific person but is not a real individual; rather, it is synthesized from observations of many people. </p>
				<h4>Persona 1: Lebron Jayme</h4>
				<div class="thumbnail">
					<img src="sprites/persona_1.jpg" style="width: 100%; ">
					<div class="caption">
						<p>Lebron Jayme, a Sales Representative. He is an asset of his company and having poor eyesight may hinder him from working.</p>
					</div>
				</div>
				<p></p>
				<h4>Persona 2: Ali Rose</h4>
				<div class="thumbnail">
					<img src="sprites/persona_2.jpg" style="width: 100%; ">
					<div class="caption">
						<p>Ali Rose, a Pharmacist. Most of her work is reading prescriptions and finding out the correct medicine to be given.</p>
					</div>
				</div>
				<p></p>
				<h4>Persona 3: Julie Bee</h4>
				<div class="thumbnail">
					<img src="sprites/persona_3.jpg" style="width: 100%; ">
					<div class="caption">
						<p>Julie Bee, a marketing staff. Most of her work is infront of a computer screen. Checking her eyesight is an important thing.</p>
					</div>
				</div>
				<p></p>
				<p>Images used are from <a href="https://www.thispersondoesnotexist.com" target="_blank">thispersondoesnotexist.com</a>.</p>
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