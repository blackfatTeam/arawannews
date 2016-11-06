<?php

use common\models\User;
use yii\helpers\Html;
$identity = \Yii::$app->user->getIdentity ();
$baseUri = \Yii::getAlias ( '@web' );
$baseUriCss = $baseUri . '/assets/theme';
$user = \Yii::$app->user;
$uri = Yii::$app->controller->getRoute ();
?>

<div class="slideMenuClose"></div>

<section class="preloader preloader2 row">
	<div class="before_half row m0"></div>
	<div class="after_half row m0"></div>
	<div class="row m0 content">
		<div class="circle">
			<div class="red">
				<div class="rotator">
					<img src="<?= $baseUriCss?>/images/curve.png" alt="">
				</div>
				<a href="#" class="logo">age</a>
			</div>
		</div>
	</div>
</section>

<header class="row header1" id="header">
	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<div class="logo_container fleft">
					<div id="slideMenu_trigger">
						<img src="<?= $baseUriCss?>/images/navigation/logo/bars.png" alt="">
					</div>
					<a class="navbar-brand" href="index.html"
						title="Age - Well Featured Magazine Template">Age</a>
				</div>
			</div>

			<div class="follow_nav fleft">
				<div class="fleft menuTitle">Follow Us:</div>
				<ul class="nav nav-pills">
					<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
					<li><a href="#"><i class="fa fa-twitter"></i></a></li>
					<li><a href="#"><i class="fa fa-facebook"></i></a></li>
					<li><a href="#"><i class="fa fa-vk"></i></a></li>
					<li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
				</ul>
			</div>

			<div class="rightSide_nav pull-right">
				<div class="fleft current_date"></div>
				<div class="fright search_dot">
					<ul class="nav navbar-nav">
						<li><a href="search-form.html" id="search_form"><i
								class="fa fa-search"></i></a></li>
						<li><a href="#" id="scrollSpyTrigger"><img
								src="<?= $baseUriCss?>/images/navigation/dot.png" alt=""></a></li>
					</ul>
				</div>
				<button type="button" class="navbar-toggle collapsed"
					data-toggle="collapse" data-target="#top_nav" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span> <span
						class="icon-bar"></span> <span class="icon-bar"></span> <span
						class="icon-bar"></span>
				</button>
				<div id="top_nav" class="collapse navbar-collapse fleft">
					<ul class="nav navbar-nav">
						<li><a href="index.html">Home</a></li>
						<li><a href="#">All Pages</a>
							<ul class="nav">
								<li><a href="index2.html">Home 2</a></li>
								<li><a href="about.html">About</a></li>
								<li><a href="coming-soon.html">Coming Soon</a></li>
								<li><a href="elements.html">Elements</a></li>
								<li><a href="typography.html">Typography</a></li>
								<li><a href="font-awesome-cheatsheet.html">Font Awesome</a></li>
								<li><a href="header-styles.html">Header Styles</a></li>
								<li><a href="single-blog.html">Single Blog</a></li>
								<li><a href="404.html">404</a></li>
							</ul></li>
						<li><a href="gallery.html">Gallery</a></li>
						<li><a href="author-post.html">Author</a></li>
						<li><a href="contact.html">Contact</a></li>
						<li><a href="newsletter-signup.html" class="subscribe_popup">Subscribe</a></li>
					</ul>
				</div>
			</div>
		</div>
		<!-- /.container-fluid -->
	</nav>
</header>