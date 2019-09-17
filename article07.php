<?php $title = "Activity | Need Finding Activity"; include 'navbar.php';?>

<section class="page-content">
	<?php $artdate = "13 AUG, 2019"; $arttitle = $art7; include 'article-title.php';?>
	<div class="page-container">
		<div class="container">
			<div class="article">
				<h2>Invitation (Before)</h2>
				<div class="thumbnail">
					<img src="sprites/A7-Invitation.png" class="img-thumbnail" alt="Invitation (Before)" width="100%">
					<div class="caption">
						<p>Sample image of the contents on the invitation</p>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-5">
						<h3 class="col-title">How can we improve this?</h3>
					</div>
					<div class="col-lg-5">
						<ul>
							<li>Organization of Data</li>
							<ul>
								<li>Group related ideas</li>
							</ul>
							<li>Whitespace</li>
						</ul>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-5">
						<h3 class="col-title">What would be the objective function?</h3>
					</div>
					<div class="col-lg-5">
						<ul>
							<li>Hierarchy of ideas</li>
							<ul>
								<li>Important details should be given emphasis</li>
							</ul>
						</ul>
					</div>
				</div>
				<h2>Invitation (After)</h2>
				<div class="thumbnail">
					<img src="invitation.png" class="img-thumbnail" alt="Invitation (After)" style="width: 100%;">
					<div class="caption">
						<p>Proposed design of the invitation</p>
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