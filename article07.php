<?php $title = "Activity | Need Finding Activity"; include 'navbar.php';?>

<section class="page-content">
	<?php $artdate = "13 AUG, 2019"; $arttitle = $art7; include 'article-title.php';?>
	<div class="page-container">
		<div class="container">
			<div class="article">
				<p>According to Scott Klemmer and Michael Bernstein, there are different ways that we could create designs for text-filled things.</p>
				<p>A sample of the before-editing invitation can be seen below.</p>
				<div class="thumbnail">
					<img src="sprites/A7-Invitation.png" class="img-thumbnail" alt="Invitation (Before)" width="100%">
					<div class="caption">
						<p>Sample image of the contents on the invitation</p>
					</div>
				</div>
				<h2>Whitespace conveys grouping</h2>
				<p>To further improve designs, whitespaces has an important role. They show how elements are divided to each other. Narrow whitespaces show how elements are closely related to each other while wider whitespaces shows how elements differ from each other.</p>
				<small><a href="https://typographica.org/typography-books/the-elements-of-typographic-style-4th-edition/" target="_blank">Robert Bringhurst, <i>Elements of Typographic Style</i></a></small><br><br>
				<h2>Contrasts indicate hierarchy</h2>
				<p>According to Edward Tufte, "Information consists of differences that make a difference." In text elements, sizes create hierarchy. The bigger the text is, the more readers read it. Most people do not bother reading small texts because they can be hard to see especially in print. Same as font sizes, <strong>text weights</strong> indicate <strong>readability</strong>. The more the text is bold, the more it gets noticed.</p>
				<small><a href="https://wikileaks.org/gifiles/attach/158/158881_Tufte%20-%20EnvisioningInformation.pdf" target="_blank">Edward Tufte, <i>Envisioning Information</i></a></small><br><br>
				<div class="thumbnail">
					<img src="invitation.png" class="img-thumbnail" alt="Invitation (After))" width="100%">
					<div class="caption">
						<p>Sample image of the contents on the invitation</p>
					</div>
				</div>
				<h2>What did I edit?</h2>
				<h3>1. Typography</h3>
				<p>Since the main objective of this invitation is to show whose party it is, "Robert" and "Alexandra"'s names should be the most noticeable one. Their names are bigger which means it is the important element in the invitation. "The Pad", where the event will happen, is slightly larger that the other text in the invitation since it is the second most important element in the invitation.</p>
				<h3>2. Positioning</h3>
				<p>Since most people read from left to right, we start positioning texts from the left.</p>
				<h3>3. Template</h3>
				<p>The design of the invitation should be related to what is the objective of the invitation. Since it is about an after-dinner party, most after-dinner parties are of professional events. A bottle of wine could represent a simple party for after a wedding.</p>
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