<?php $title = "Activity | My Favorite Application"; include 'navbar.php';?>

<section class="page-content">
	<?php $artdate = "28 JUN, 2019"; $arttitle = $art2; include 'article-title.php';?>
	<div class="page-container">
		<div class="container">
			<div class="article">
				<p>There are many browsers that we typically use every day - from Google Chrome, Firefox, Opera, to Microsoft Edge. But those browsers tend to exchange your data for them to be used for free. There is one browser application that you can use to protect yourself from companies that tracks you and uses your data for advertising. One browser I use is DuckduckGo Privacy Browser.</p>

				<p>I've first used Duckduckgo as a search engine since they are a search engine organization. I used it for years now because of their aim – to protect your privacy at all cost. Their privacy policy is what got me to use their search engine instead of Google's.</p>

				<p>When I knew about the Duckduckgo browser, I installed it instantly. This browser tells a website's privacy grade based on what they collect from you. You can also enable Privacy Protection if you want the website to enhance its grade on your end. This browser allows you to delete your search history and other data with two-clicks.</p>

				<p>Another application I usually use is PayMaya. PayMaya is a virtual wallet service that allows you to pay bills and transfer cash wirelessly. I use this to pay bills and buy load at a discounted price.</p>
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