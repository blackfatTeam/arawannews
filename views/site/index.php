<?php
use app\lib\OnlineConfig;
$baseUri = Yii::getAlias('@web');
$baseUriCss = $baseUri.'/assets/theme';
?>
<!--*****************************************************************************************************************-->
<!--Feature Posts Here-->
<section class="row featured_posts">
	<div class="container-fluid">
	
		<?php foreach (OnlineConfig::$arrSection as $key => $lst):?>
		<div id="<?php echo $key ?>" style="position: relative;">
		<div style="position: absolute; top: 0; left: 0; z-index:999; background-color: #FF0000;color: #FFFFFF;opacity: 0.6; margin-top: 15px;text-align: center;padding: 15px;"><?php echo $lst['title']?></div>
		<div class="row">
			<div class="col-lg-6 col-md-6 post">
				<div class="row inner">
					<img src="<?= $baseUriCss?>/images/posts/features/1.jpg" alt="" class="featured-img">
					<div class="row m0 content">
						<h4 class="category politics">
							<a href="#"><?php echo $lst['title']?></a>
						</h4>
						<h2 class="title">
							<a href="single-blog.html">U.S. House Chamber Closed After
								Unknown Material</a>
						</h2>
						<ul class="post_meta nav nav-pills">
							<li><a href="#">3  มิถุนายน 2559, 14:00 น.</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-6 post">
				<div class="row inner">
					<img src="<?= $baseUriCss?>/images/posts/features/2.jpg" alt="" class="featured-img">
					<div class="row m0 content">
						<h4 class="category sports">
							<a href="#"><?php echo $lst['title']?></a>
						</h4>
						<h2 class="title">
							<a href="single-blog.html">Philip Rivers: I’m going to be a
								Charger, wherever we are</a>
						</h2>
						<ul class="post_meta nav nav-pills">
							<li><a href="#">3  มิถุนายน 2559, 14:00 น.</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-6 post">
				<div class="row inner">
					<img src="<?= $baseUriCss?>/images/posts/features/2.jpg" alt="" class="featured-img">
					<div class="row m0 content">
						<h4 class="category sports">
							<a href="#"><?php echo $lst['title']?></a>
						</h4>
						<h2 class="title">
							<a href="single-blog.html">Philip Rivers: I’m going to be a
								Charger, wherever we are</a>
						</h2>
						<ul class="post_meta nav nav-pills">
							<li><a href="#">3  มิถุนายน 2559, 14:00 น.</a></li>
						</ul>
					</div>
				</div>
			</div>
			
		</div>
		</div>
		<?php endforeach;?>
		

		

		
		
		
	</div>
</section>
<!--
    <nav id="featured_page_nav" class="row m0">
        <a href="inc/page2.html"><i class="fa fa-sort"></i></a>
        <span>Load More</span>
    </nav>
-->
<!-- <a href="#all_posts" id="tap2allpost"><i class="fa fa-sort"></i></a> -->


<!-- <nav id="page_nav" class="row m0">
	<a href="inc/page2.html"><i class="fa fa-refresh"></i></a> <span>Load
		More</span>
</nav> -->
<!--All Posts Here-->
