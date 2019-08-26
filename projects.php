<?php $title = "Projects"; include 'navbar.php';?>
<?php include 'functions.php';?>

<section class="page-content">
	<div class="page-title">
		<div class="container">
			<h2 class="display-4 font-weight-bold">Projects</h2>
		</div>
	</div>
	<div class="page-container">
		<div class="container">
			<div class="articles-list">
				<ol>
					<li>
						<section class="article-post">
							<a href="http://cmdinglasan.herokuapp.com" target="_blank" class="display-4 font-weight-bold">
								<?php echo $pro1; ?>
							</a><br/>
							<a href="http://cmdinglasan.herokuapp.com" target="_blank" class="button article-link-btn">Read More</a>
						</section>
					</li>
					<li>
						<section class="article-post">
							<a href="http://userdes-dinglasan.herokuapp.com" target="_blank" class="display-4 font-weight-bold">
								<?php echo $pro2; ?>
							</a><br/>
							<a href="http://userdes-dinglasan.herokuapp.com" target="_blank" class="button article-link-btn">Read More</a>
						</section>
					</li>
					<li>
						<section class="article-post">
							<a href="project03.php" class="display-4 font-weight-bold">
								<?php echo $pro3; ?>
							</a><br/>
							<a href="project03.php" class="button article-link-btn">Read More</a>
						</section>
					</li>
				</ol>
			</div>
		</div>
	</div>
</section>

<?php include 'footer.php';?>