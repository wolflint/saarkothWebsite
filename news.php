<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Saarkoth - News</title>
	<link rel="stylesheet" href="css/myStyle.css" type="text/css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="icon" href="./assets/favicon.png">
</head>

<style>
	.article-news {
		background-color: rgba(255, 255, 255, 0.035);
		height: 100%;
	}

	.article-content {
		border-style: double;
		border-color: rgb(255, 255, 255);
		border-left: none;
		border-right: none;
		border-bottom: none;
	}

	.content-img {
		box-shadow: 0 2px 3px rgba(10, 10, 10, 0.1), 0 0 0 1px rgba(10, 10, 10, 0.1);
		display: block;
		margin-left: auto;
		margin-right: auto;
		border-radius: 10px;
		width: 100%;
	}

	.tinfo {
		padding-top: 50px;
		padding-bottom: 30px;
	}
</style>

<body>
	<!-- HEADER -->
	<?php include('includes/header.php') ?>
	<!-- END HEADER -->

	<!-- SECTIONS -->
	<main class="container article-news">
		<div class="row">
			<!-- ARTICLES -->
			<div class="col m7">
				<div class="flow-text article-content">
					<!-- DATE -->
					<h4>06/11/2017</h4>
					<!-- TITLE -->
					<h2>We're in the
						<b>Blackened Promotions Compilation!</b>
					</h2>
					<p>Blackened Promotions, an organisation which focuses on promoting small “underground” bands and sharing their music to
						a larger audience, has included our track “Beyond the Horizon” on their first compilation album. We are very thankful
						for this opportunity, and if you haven’t heard of Blackened Promotions you should definitely check them out on their
						Facebook page
						<a href="https://www.facebook.com/BlackenedPromotions/">here.</a>
					</p>
					<img class="content-img materialboxed" src="./assets/news/news2.jpg" alt="">
					<p>Blackened Promotion Compilation Vol. 1 is available to download for free from the Blackened Promotions bandcamp page.
						The album features many great artists such as: Mask of Morana, Laid to Waste and Merciless Savage. We are really proud
						to have a place on this album alongside such excellent bands!</p>
					<p>Download a copy of this album for free
						<a href="">here!</a>
					</p>
				</div>

				<div class="flow-text article-content">
					<!-- DATE -->
					<h4>04/11/2017</h4>
					<!-- TITLE -->
					<h2>
						<b>Jera</b> is nearly complete!
					</h2>
					<p>After many months of writing lyrics, composing music and recording the tracks, Saarkoth is nearly ready to release our
						debut album: “Jera”. If you enjoyed our demo, which featured the tracks “Beyond the Horizon” and “Awake in Eternal
						Sleep”, we guarantee that you will love this album.
					</p>
					<img class="content-img materialboxed" src="./assets/news/news3.jpg" alt="">
					<p>The album features many more news tracks, some of these are quite harsh and heavy, and some of them are beautiful and
						melodic. We maintained our ancient Nordic themeing throughout the album, and we hope that you will enjoy what you hear.</p>
					<p>Please keep your eyes and ears peeled for the official release date of Jera, and thank you all for the support!
					</p>
				</div>

				<div class="flow-text">
					<!-- DATE -->
					<h4>28/10/2017</h4>
					<!-- TITLE -->
					<h2>Our
						<b>demo</b> was reviewed!
					</h2>
					<p>We are excited to announce that our demo has received its first official review! We’d like to give a big thanks to ‘Games,
						Brrraaains & A Head-Banging Life’ for reviewing our music, and we a very pleased with the incredible score that we
						have received.</a>
					</p>
					<img class="content-img materialboxed" src="./assets/news/news1.jpg" alt="">
					<p>You can read the review yourself
						<a href="https://gbhbl.com/demo-review-saarkoth-demo-2017-self-released/">here</a>, and make sure to check out the rest of their awesome website while you’re there.
					</p>
				</div>
			</div>
			<!-- SPACE FOR FACEBOOK -->
			<div class="col m5 hide-on-small-only">
				<h1 class="center-align">Facebook Feed</h1>
				<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fsaarkoth&tabs=timeline&width=500&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=1771452986218636" width="500" height="800" style="border:none;overflow:hidden" scrolling="yes

				" frameborder="0" allowTransparency="true"></iframe>
			</div>
		</div>

	</main>

<?php include('includes/footer.php'); ?>
