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
					<img src="sprites/persona/Slide1.PNG" style="width: 100%; ">
				</div>
				<p>Lebron Jayme, a Sales Representative. He is an asset of his company and having poor eyesight may hinder him from working.</p>
				<h4>Persona 2: Zach Majik</h4>
				<div class="thumbnail">
					<img src="sprites/persona/Slide2.PNG" style="width: 100%; ">
				</div>
				<p>Zach Majik, a Pharmacist. Most of his work is reading prescriptions and finding out the correct medicine to be given.</p>
				<h4>Persona 3: Ali Rose</h4>
				<div class="thumbnail">
					<img src="sprites/persona/Slide3.PNG" style="width: 100%; ">
				</div>
				<p>Ali Rose, a student. She often uses her phone to connect with her friends through social media networks such as Facebook and Twitter. Her frequent use of her phones make her eyesight poor and could use glasses.</p>
				<h4>Persona 4: Julie Bee</h4>
				<div class="thumbnail">
					<img src="sprites/persona/Slide4.PNG" style="width: 100%; ">
				</div>
				<p>Julie Bee, an opthalmologist. She owns a newly opened eye clinic. She wanted more people to know about her eye clinic and provide solutions for poor eyesight and other eye illnesses.</p>
				<p>Images used are from <a href="https://www.thispersondoesnotexist.com" target="_blank">thispersondoesnotexist.com</a>.</p>
				<small><a href="https://www.designersinsights.com/designer-resources/using-layout-grids-effectively/" target="_blank">DesignLab, <i>User Personas: What Are They And Why Use Them?</i></a></small><br><br>
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