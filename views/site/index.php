<?php 
$baseUri = Yii::getAlias('@web');
$baseUriCss = $baseUri.'/assets/theme';
?>
<!--*****************************************************************************************************************-->
<!--Feature Posts Here-->
<section class="row featured_posts">
	<div class="container-fluid">
		<div class="row" id="featured_posts">
			<div class="col-sm-6 post">
				<div class="row inner">
					<img src="<?= $baseUriCss?>/images/posts/features/1.jpg" alt="" class="featured-img">
					<div class="row m0 content">
						<h4 class="category politics">
							<a href="#">politics</a>
						</h4>
						<h2 class="title">
							<a href="single-blog.html">U.S. House Chamber Closed After
								Unknown Material</a>
						</h2>
						<ul class="post_meta nav nav-pills">
							<li><a href="#">August 6, 2015</a></li>
							<li><a href="#"><i class="fa fa-thumbs-o-up"></i>1456</a></li>
							<li><a href="#"><i class="fa fa-commenting"></i>32</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-sm-6 post">
				<div class="row inner">
					<img src="<?= $baseUriCss?>/images/posts/features/2.jpg" alt="" class="featured-img">
					<div class="row m0 content">
						<h4 class="category sports">
							<a href="#">sports</a>
						</h4>
						<h2 class="title">
							<a href="single-blog.html">Philip Rivers: I’m going to be a
								Charger, wherever we are</a>
						</h2>
						<ul class="post_meta nav nav-pills">
							<li><a href="#">August 6, 2015</a></li>
							<li><a href="#"><i class="fa fa-thumbs-o-up"></i>1456</a></li>
							<li><a href="#"><i class="fa fa-commenting"></i>32</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-sm-3 post">
				<div class="row inner">
					<img src="<?= $baseUriCss?>/images/posts/features/3.jpg" alt="" class="featured-img">
					<div class="row m0 content">
						<h4 class="category money">
							<a href="#">money</a>
						</h4>
						<h2 class="title">
							<a href="single-blog.html">U.S. Flag Raised Over Embassy in
								Republic of Cuba</a>
						</h2>
						<ul class="post_meta nav nav-pills">
							<li><a href="#">August 6, 2015</a></li>
							<li><a href="#"><i class="fa fa-thumbs-o-up"></i>1456</a></li>
							<li><a href="#"><i class="fa fa-commenting"></i>32</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-sm-3 post">
				<div class="row inner">
					<img src="<?= $baseUriCss?>/images/posts/features/4.jpg" alt="" class="featured-img">
					<div class="row m0 content">
						<h4 class="category world">
							<a href="#">world</a>
						</h4>
						<h2 class="title">
							<a href="single-blog.html">Death Toll in Chinese Port Blasts
								Rises to 104</a>
						</h2>
						<ul class="post_meta nav nav-pills">
							<li><a href="#">August 6, 2015</a></li>
							<li><a href="#"><i class="fa fa-thumbs-o-up"></i>1456</a></li>
							<li><a href="#"><i class="fa fa-commenting"></i>32</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--
    <nav id="featured_page_nav" class="row m0">
        <a href="inc/page2.html"><i class="fa fa-sort"></i></a>
        <span>Load More</span>
    </nav>
-->
<a href="#all_posts" id="tap2allpost"><i class="fa fa-sort"></i></a>
<!--Feature Posts Here-->
<!--*****************************************************************************************************************-->

<!--*****************************************************************************************************************-->
<!--All Posts Here-->
<section class="row all_posts" id="all_posts">
	<div class="post_sizer"></div>
	<!--This is not a post-->
	<div class="col-sm-3 post sticky post-1">
		<div class="row m0 inner">
			<div class="row m0 post_contents">
				<div class="row m0 category politics">
					<a href="#">politics</a>
					<div class="dropdown pull-right social_share_drop">
						<button type="button" data-toggle="dropdown" aria-haspopup="true"
							aria-expanded="false">
							<i class="fa fa-ellipsis-v"></i>
						</button>
						<ul class="dropdown-menu">
							<li><a href="#"><i class="fa fa-facebook"></i> Facebook</a></li>
							<li><a href="#"><i class="fa fa-twitter"></i> Twitter</a></li>
							<li><a href="#"><i class="fa fa-google-plus"></i> Google Plus</a></li>
							<li><a href="#"><i class="fa fa-pinterest"></i> Pinterest</a></li>
							<li><a href="#"><i class="fa fa-linkedin"></i> LinkedIn</a></li>
						</ul>
					</div>
				</div>
				<h3 class="post_title">
					<a href="#">Sticky Post: Jeb Bush Calls For VA Overhaul</a>
				</h3>
				<ul class="post_meta nav nav-pills">
					<li><a href="#">August 6, 2015</a></li>
					<li><a href="#"><i class="fa fa-thumbs-o-up"></i>1456</a></li>
					<li><a href="#"><i class="fa fa-commenting"></i>32</a></li>
				</ul>
				<p>
					Praesent adipiscing. Phasellus ullamcorper ipsum rutrum nunc. Nunc
					nonummy metus. Vestibulum volutpat pretium libero. Cras id dui.
					Aenean ut eros et Praesent adipiscing. Phasellus ullamcorper ipsum
					rutrum nunc. Nunc nonummy metus. Vestibulum volutpat pretium
					libero. Cras id dui. Aenean ut eros et nisl sagittis vestibulum.
					Nullam nulla eros, ultricies sit amet, nonummy id, imperdiet
					feugiat, pede. Sed lectus. Donec mollis hendrerit risus. Phasellus
					nec sem in justo pellentesque facilisis. Etiam imperdiet imperdiet
					orci. Nunc nec neque. Phasellus leo dolor. <a
						href="single-blog.html" class="read_more">Read More<i
						class="fa fa-angle-double-right"></i></a>
				</p>
			</div>
			<div class="sticky_icon">
				<img src="<?= $baseUriCss?>/images/posts/sticky.png" alt="">
			</div>
		</div>
	</div>
	<!--Sticky Post-->
	<div class="col-sm-3 post post-2">
		<div class="row m0 inner">
			<div class="row m0 featured_img">
				<a href="single-blog.html"><img src="<?= $baseUriCss?>/images/posts/1.jpg" alt=""></a>
			</div>
			<div class="row m0 post_contents">
				<div class="row m0 category money">
					<a href="#">money</a>
					<div class="dropdown pull-right social_share_drop">
						<button type="button" data-toggle="dropdown" aria-haspopup="true"
							aria-expanded="false">
							<i class="fa fa-ellipsis-v"></i>
						</button>
						<ul class="dropdown-menu">
							<li><a href="#"><i class="fa fa-facebook"></i> Facebook</a></li>
							<li><a href="#"><i class="fa fa-twitter"></i> Twitter</a></li>
							<li><a href="#"><i class="fa fa-google-plus"></i> Google Plus</a></li>
							<li><a href="#"><i class="fa fa-pinterest"></i> Pinterest</a></li>
							<li><a href="#"><i class="fa fa-linkedin"></i> LinkedIn</a></li>
						</ul>
					</div>
				</div>
				<h3 class="post_title">
					<a href="#">Woman finds 4 urns in recently purchased used car</a>
				</h3>
				<ul class="post_meta nav nav-pills">
					<li><a href="#">August 6, 2015</a></li>
					<li><a href="#"><i class="fa fa-thumbs-o-up"></i>1456</a></li>
					<li><a href="#"><i class="fa fa-commenting"></i>32</a></li>
				</ul>
			</div>
		</div>
	</div>
	<!--Post-->
	<div class="col-sm-6 post post-3 quote">
		<div class="row m0 inner">
			<img src="<?= $baseUriCss?>/images/posts/2.jpg" alt="" class="img-responsive">
			<div class="dropdown pull-right social_share_drop">
				<button type="button" data-toggle="dropdown" aria-haspopup="true"
					aria-expanded="false">
					<i class="fa fa-ellipsis-v"></i>
				</button>
				<ul class="dropdown-menu">
					<li><a href="#"><i class="fa fa-facebook"></i> Facebook</a></li>
					<li><a href="#"><i class="fa fa-twitter"></i> Twitter</a></li>
					<li><a href="#"><i class="fa fa-google-plus"></i> Google Plus</a></li>
					<li><a href="#"><i class="fa fa-pinterest"></i> Pinterest</a></li>
					<li><a href="#"><i class="fa fa-linkedin"></i> LinkedIn</a></li>
				</ul>
			</div>
			<div class="row m0 post_contents">
				<div class="row m0 quote_text_row">
					<h2 class="quote_mark">”</h2>
					<h3 class="post_title">Many men go fishing all of their lives
						without knowing that it is not fish they are after.</h3>
				</div>
				<div class="row quote_text_footer">
					<div class="col-sm-8 quote_author">
						<div class="media">
							<div class="media-left media-middle">
								<a href="#"><img src="<?= $baseUriCss?>/images/posts/quote-author.png" alt=""></a>
							</div>
							<div class="media-body">
								<h5>
									<a href="#">Orlando Ricky</a>
								</h5>
								<p>Praesent adipiscing. Phasellus ullamcorper ipsum rutrum nunc.
									Nunc nonummy metus. Vestibulum volutpat pretium libero. Cras id
									dui.</p>
							</div>
						</div>
					</div>
					<div class="col-sm-4 quote_cat">
						<h4 class="category sports">
							<a href="#">sports</a>
						</h4>
						<ul class="post_meta nav nav-pills">
							<li><a href="#">August 6, 2015</a></li>
							<li><a href="#"><i class="fa fa-thumbs-o-up"></i>1456</a></li>
							<li><a href="#"><i class="fa fa-commenting"></i>32</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--Quote Post-->
	<div class="col-sm-6 post post-5 interview">
		<div class="row m0 inner">
			<img src="<?= $baseUriCss?>/images/posts/4.jpg" alt="" class="img-responsive">
			<div class="dropdown pull-right social_share_drop">
				<button type="button" data-toggle="dropdown" aria-haspopup="true"
					aria-expanded="false">
					<i class="fa fa-ellipsis-v"></i>
				</button>
				<ul class="dropdown-menu">
					<li><a href="#"><i class="fa fa-facebook"></i> Facebook</a></li>
					<li><a href="#"><i class="fa fa-twitter"></i> Twitter</a></li>
					<li><a href="#"><i class="fa fa-google-plus"></i> Google Plus</a></li>
					<li><a href="#"><i class="fa fa-pinterest"></i> Pinterest</a></li>
					<li><a href="#"><i class="fa fa-linkedin"></i> LinkedIn</a></li>
				</ul>
			</div>
			<div class="row m0 post_contents">
				<h4 class="category world">
					<a href="#">world</a>
				</h4>
				<h3 class="post_title">Interview with Lia Esheley about political
					issues in U.s.a</h3>
				<ul class="post_meta nav nav-pills">
					<li><a href="#">August 6, 2015</a></li>
					<li><a href="#"><i class="fa fa-thumbs-o-up"></i>1456</a></li>
					<li><a href="#"><i class="fa fa-commenting"></i>32</a></li>
				</ul>
			</div>
		</div>
	</div>
	<!--Interview Post-->
	<div class="col-sm-3 post post-4">
		<div class="row m0 inner">
			<div class="row m0 featured_img">
				<a href="single-blog.html"><img src="<?= $baseUriCss?>/images/posts/3.jpg" alt=""></a>
			</div>
			<div class="row m0 post_contents">
				<div class="row m0 category politics">
					<a href="#">politics</a>
					<div class="dropdown pull-right social_share_drop">
						<button type="button" data-toggle="dropdown" aria-haspopup="true"
							aria-expanded="false">
							<i class="fa fa-ellipsis-v"></i>
						</button>
						<ul class="dropdown-menu">
							<li><a href="#"><i class="fa fa-facebook"></i> Facebook</a></li>
							<li><a href="#"><i class="fa fa-twitter"></i> Twitter</a></li>
							<li><a href="#"><i class="fa fa-google-plus"></i> Google Plus</a></li>
							<li><a href="#"><i class="fa fa-pinterest"></i> Pinterest</a></li>
							<li><a href="#"><i class="fa fa-linkedin"></i> LinkedIn</a></li>
						</ul>
					</div>
				</div>
				<h3 class="post_title">
					<a href="#">what happend this week? take our weekly news quiz</a>
				</h3>
				<ul class="post_meta nav nav-pills">
					<li><a href="#">August 6, 2015</a></li>
					<li><a href="#"><i class="fa fa-thumbs-o-up"></i>1456</a></li>
					<li><a href="#"><i class="fa fa-commenting"></i>32</a></li>
				</ul>
			</div>
		</div>
	</div>
	<!--Post-->
	<div class="col-sm-3 post post-6">
		<div class="row m0 inner">
			<div class="row m0 featured_img">
				<a href="single-blog.html"><img src="<?= $baseUriCss?>/images/posts/5.jpg" alt=""></a>
			</div>
			<div class="row m0 post_contents">
				<div class="row m0 category sports">
					<a href="#">sports</a>
					<div class="dropdown pull-right social_share_drop">
						<button type="button" data-toggle="dropdown" aria-haspopup="true"
							aria-expanded="false">
							<i class="fa fa-ellipsis-v"></i>
						</button>
						<ul class="dropdown-menu">
							<li><a href="#"><i class="fa fa-facebook"></i> Facebook</a></li>
							<li><a href="#"><i class="fa fa-twitter"></i> Twitter</a></li>
							<li><a href="#"><i class="fa fa-google-plus"></i> Google Plus</a></li>
							<li><a href="#"><i class="fa fa-pinterest"></i> Pinterest</a></li>
							<li><a href="#"><i class="fa fa-linkedin"></i> LinkedIn</a></li>
						</ul>
					</div>
				</div>
				<h3 class="post_title">
					<a href="#">Tiger Tracker: Wyndham Championship, Round 2</a>
				</h3>
				<ul class="post_meta nav nav-pills">
					<li><a href="#">August 6, 2015</a></li>
					<li><a href="#"><i class="fa fa-thumbs-o-up"></i>1456</a></li>
					<li><a href="#"><i class="fa fa-commenting"></i>32</a></li>
				</ul>
			</div>
		</div>
	</div>
	<!--Post-->
	<div class="col-sm-3 post post-7 gallery">
		<div class="row m0 inner">
			<div class="row m0 featured_img">
				<div id="post7_slider" class="post_control_slider flexslider">
					<ul class="slides">
						<li><img src="<?= $baseUriCss?>/images/posts/6.jpg" alt=""></li>
						<li><img src="<?= $baseUriCss?>/images/posts/6.jpg" alt=""></li>
						<li><img src="<?= $baseUriCss?>/images/posts/6.jpg" alt=""></li>
						<li><img src="<?= $baseUriCss?>/images/posts/6.jpg" alt=""></li>
						<li><img src="<?= $baseUriCss?>/images/posts/6.jpg" alt=""></li>
					</ul>
				</div>
				<div id="post7_slider_control"
					class="post_slider_control flexslider">
					<ul class="slides">
						<li><img src="<?= $baseUriCss?>/images/posts/6-1.jpg" alt=""></li>
						<li><img src="<?= $baseUriCss?>/images/posts/6-2.jpg" alt=""></li>
						<li><img src="<?= $baseUriCss?>/images/posts/6-3.jpg" alt=""></li>
						<li><img src="<?= $baseUriCss?>/images/posts/6-4.jpg" alt=""></li>
						<li><img src="<?= $baseUriCss?>/images/posts/6-1.jpg" alt=""></li>
					</ul>
				</div>
			</div>
			<div class="row m0 post_contents">
				<div class="row m0 category sports">
					<a href="#">sports</a>
					<div class="dropdown pull-right social_share_drop">
						<button type="button" data-toggle="dropdown" aria-haspopup="true"
							aria-expanded="false">
							<i class="fa fa-ellipsis-v"></i>
						</button>
						<ul class="dropdown-menu">
							<li><a href="#"><i class="fa fa-facebook"></i> Facebook</a></li>
							<li><a href="#"><i class="fa fa-twitter"></i> Twitter</a></li>
							<li><a href="#"><i class="fa fa-google-plus"></i> Google Plus</a></li>
							<li><a href="#"><i class="fa fa-pinterest"></i> Pinterest</a></li>
							<li><a href="#"><i class="fa fa-linkedin"></i> LinkedIn</a></li>
						</ul>
					</div>
				</div>
				<h3 class="post_title">
					<a href="#">David Letterman has IndyCar title within reach with
						Graham Rahal</a>
				</h3>
				<ul class="post_meta nav nav-pills">
					<li><a href="#">August 6, 2015</a></li>
					<li><a href="#"><i class="fa fa-thumbs-o-up"></i>1456</a></li>
					<li><a href="#"><i class="fa fa-commenting"></i>32</a></li>
				</ul>
			</div>
		</div>
	</div>
	<!--Post-->
	<div class="col-sm-6 post post-8">
		<div class="row m0 inner">
			<div class="embed-responsive embed-responsive-16by9">
				<iframe class="embed-responsive-item"
					src="https://www.youtube.com/embed/Uit8nBv1HCs"></iframe>
			</div>
		</div>
	</div>
	<!--Post-->
	<div class="col-sm-3 post post-9">
		<div class="row m0 inner">
			<div class="row m0 featured_img">
				<div class="owl-carousel post_dot_gallery">
					<div class="item">
						<img src="<?= $baseUriCss?>/images/posts/7.jpg" alt="">
					</div>
					<div class="item">
						<img src="<?= $baseUriCss?>/images/posts/7.jpg" alt="">
					</div>
					<div class="item">
						<img src="<?= $baseUriCss?>/images/posts/7.jpg" alt="">
					</div>
					<div class="item">
						<img src="<?= $baseUriCss?>/images/posts/7.jpg" alt="">
					</div>
				</div>
			</div>
			<div class="row m0 post_contents">
				<div class="row m0 category world">
					<a href="#">world</a>
					<div class="dropdown pull-right social_share_drop">
						<button type="button" data-toggle="dropdown" aria-haspopup="true"
							aria-expanded="false">
							<i class="fa fa-ellipsis-v"></i>
						</button>
						<ul class="dropdown-menu">
							<li><a href="#"><i class="fa fa-facebook"></i> Facebook</a></li>
							<li><a href="#"><i class="fa fa-twitter"></i> Twitter</a></li>
							<li><a href="#"><i class="fa fa-google-plus"></i> Google Plus</a></li>
							<li><a href="#"><i class="fa fa-pinterest"></i> Pinterest</a></li>
							<li><a href="#"><i class="fa fa-linkedin"></i> LinkedIn</a></li>
						</ul>
					</div>
				</div>
				<h3 class="post_title">
					<a href="#">Autopsy: St. Louis man killed by police was shot in
						back</a>
				</h3>
				<ul class="post_meta nav nav-pills">
					<li><a href="#">August 6, 2015</a></li>
					<li><a href="#"><i class="fa fa-thumbs-o-up"></i>1456</a></li>
					<li><a href="#"><i class="fa fa-commenting"></i>32</a></li>
				</ul>
			</div>
		</div>
	</div>
	<!--Post-->
	<div class="col-sm-3 post post-10">
		<div class="row m0 inner">
			<div class="row m0 featured_img">
				<a href="single-blog.html"><img src="<?= $baseUriCss?>/images/posts/8.jpg" alt=""></a>
			</div>
			<div class="row m0 post_contents">
				<div class="row m0 category money">
					<a href="#">money</a>
					<div class="dropdown pull-right social_share_drop">
						<button type="button" data-toggle="dropdown" aria-haspopup="true"
							aria-expanded="false">
							<i class="fa fa-ellipsis-v"></i>
						</button>
						<ul class="dropdown-menu">
							<li><a href="#"><i class="fa fa-facebook"></i> Facebook</a></li>
							<li><a href="#"><i class="fa fa-twitter"></i> Twitter</a></li>
							<li><a href="#"><i class="fa fa-google-plus"></i> Google Plus</a></li>
							<li><a href="#"><i class="fa fa-pinterest"></i> Pinterest</a></li>
							<li><a href="#"><i class="fa fa-linkedin"></i> LinkedIn</a></li>
						</ul>
					</div>
				</div>
				<h3 class="post_title">
					<a href="#">Blind teen with autism rocks Star-Spangled Banner</a>
				</h3>
				<ul class="post_meta nav nav-pills">
					<li><a href="#">August 6, 2015</a></li>
					<li><a href="#"><i class="fa fa-thumbs-o-up"></i>1456</a></li>
					<li><a href="#"><i class="fa fa-commenting"></i>32</a></li>
				</ul>
			</div>
		</div>
	</div>
	<!--Post-->
	<div class="col-sm-3 post post-11 link">
		<div class="row m0 inner">
			<img src="<?= $baseUriCss?>/images/posts/9.jpg" alt="">
			<div class="dropdown pull-right social_share_drop">
				<button type="button" data-toggle="dropdown" aria-haspopup="true"
					aria-expanded="false">
					<i class="fa fa-ellipsis-v"></i>
				</button>
				<ul class="dropdown-menu">
					<li><a href="#"><i class="fa fa-facebook"></i> Facebook</a></li>
					<li><a href="#"><i class="fa fa-twitter"></i> Twitter</a></li>
					<li><a href="#"><i class="fa fa-google-plus"></i> Google Plus</a></li>
					<li><a href="#"><i class="fa fa-pinterest"></i> Pinterest</a></li>
					<li><a href="#"><i class="fa fa-linkedin"></i> LinkedIn</a></li>
				</ul>
			</div>
			<div class="row m0 post_contents">
				<h4 class="category politics">
					<a href="#">politics</a>
				</h4>
				<h3 class="post_title">
					<a href="#">Deadly infections from medical scopes go unreported,
						raising health risks</a>
				</h3>
				<div class="media post_link">
					<div class="media-left">
						<i class="fa fa-link"></i>
					</div>
					<div class="media-body media-middle">
						Download the list of the richest people in Forbes here: <a
							href="#">goo.gl/GQpTNo</a>
					</div>
				</div>
				<ul class="post_meta nav nav-pills">
					<li><a href="#">August 6, 2015</a></li>
					<li><a href="#"><i class="fa fa-thumbs-o-up"></i>1456</a></li>
					<li><a href="#"><i class="fa fa-commenting"></i>32</a></li>
				</ul>
			</div>
		</div>
	</div>
	<!--Post-->
	<div class="col-sm-6 post post-12">
		<div class="row m0 inner">
			<div class="row m0 featured_img">
				<a href="single-blog.html"><img src="<?= $baseUriCss?>/images/posts/10.jpg" alt=""></a>
			</div>
			<div class="row m0 post_contents">
				<div class="row m0 category world">
					<a href="#">world</a>
					<div class="dropdown pull-right social_share_drop">
						<button type="button" data-toggle="dropdown" aria-haspopup="true"
							aria-expanded="false">
							<i class="fa fa-ellipsis-v"></i>
						</button>
						<ul class="dropdown-menu">
							<li><a href="#"><i class="fa fa-facebook"></i> Facebook</a></li>
							<li><a href="#"><i class="fa fa-twitter"></i> Twitter</a></li>
							<li><a href="#"><i class="fa fa-google-plus"></i> Google Plus</a></li>
							<li><a href="#"><i class="fa fa-pinterest"></i> Pinterest</a></li>
							<li><a href="#"><i class="fa fa-linkedin"></i> LinkedIn</a></li>
						</ul>
					</div>
				</div>
				<h3 class="post_title">
					<a href="#">Whale photobombs TV host complaining about not seeing
						any whales</a>
				</h3>
				<ul class="post_meta nav nav-pills">
					<li><a href="#">August 6, 2015</a></li>
					<li><a href="#"><i class="fa fa-thumbs-o-up"></i>1456</a></li>
					<li><a href="#"><i class="fa fa-commenting"></i>32</a></li>
				</ul>
			</div>
		</div>
	</div>
	<!--Post-->
</section>
<nav id="page_nav" class="row m0">
	<a href="inc/page2.html"><i class="fa fa-refresh"></i></a> <span>Load
		More</span>
</nav>
<!--All Posts Here-->
<!--*****************************************************************************************************************-->

<!--*****************************************************************************************************************-->
<!--Popular Videos Here-->
<section class="row video_posts" id="popular_videos">
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-3 video-post">
				<h3 class="post_title">
					<i class="fa fa-youtube-play"></i>50 percent off
				</h3>
				<!-- 4:3 aspect ratio -->
				<div class="embed-responsive embed-responsive-4by3">
					<iframe class="embed-responsive-item"
						src="https://www.youtube.com/embed/9tBGOE5gdzA"></iframe>
				</div>
				<blockquote>
					<footer> Curabitur blandit mollis lacus. Nam adipiscing eleifend </footer>
				</blockquote>
			</div>
			<div class="col-sm-3 video-post">
				<h3 class="post_title">
					<i class="fa fa-youtube-play"></i>Productive morning
				</h3>
				<!-- 4:3 aspect ratio -->
				<div class="embed-responsive embed-responsive-4by3">
					<iframe class="embed-responsive-item"
						src="https://www.youtube.com/embed/Pg9LVHFKXcE"></iframe>
				</div>
				<blockquote>
					<footer> Cum sociis natoque penatibus et magnis monte. </footer>
				</blockquote>
			</div>
			<div class="col-sm-3 video-post">
				<h3 class="post_title">
					<i class="fa fa-youtube-play"></i>city nights
				</h3>
				<!-- 4:3 aspect ratio -->
				<div class="embed-responsive embed-responsive-4by3">
					<iframe class="embed-responsive-item"
						src="https://www.youtube.com/embed/NnJe6K1oCxc"></iframe>
				</div>
				<blockquote>
					<footer> Maecenas nec odio et ante tincidunt tempus. </footer>
				</blockquote>
			</div>
			<div class="col-sm-3 video-post">
				<h3 class="post_title">
					<i class="fa fa-youtube-play"></i>beautiful glass lamp
				</h3>
				<!-- 4:3 aspect ratio -->
				<div class="embed-responsive embed-responsive-4by3">
					<iframe class="embed-responsive-item"
						src="https://www.youtube.com/embed/kgPghSJhkzU"></iframe>
				</div>
				<blockquote>
					<footer> Fusce vulputate eleifend purus scelerisque. </footer>
				</blockquote>
			</div>
		</div>
	</div>
</section>
<!--Popular Videos Here-->
<!--*****************************************************************************************************************-->

<!--*****************************************************************************************************************-->
<!--Alert Here-->
<section class="row alert_row">
	<div class="alert alert-dismissible fade in mobile_app_alert"
		role="alert">
		<button type="button" class="close" data-dismiss="alert"
			aria-label="Close">
			<i class="fa fa-times"></i>
		</button>
		<div class="media">
			<div class="media-left">
				<a href="#"><img src="<?= $baseUriCss?>/images/alert/mobile-app.png" alt=""></a>
			</div>
			<div class="media-body">
				<h3>Try our mobile app on android or ios</h3>
				<p>Aenean commodo ligula eget dolor. Aenean massa. Cum sociis
					natoque penatibus et magnis dis parturient montes, nascetur
					ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu,
					pretium quis, sem. Nulla consequat massa quis enim. Donec pede
					justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim.
					Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque
					penatibus et magnis dis parturient montes, nascetur ridiculus mus.
					Donec quam felis, ultricies nec, pellentesque eu, pretium quis,
					sem. Nulla consequat massa quis enim. Donec pede justo, fringilla
					vel,</p>
			</div>
		</div>
	</div>
</section>
<!--Alert Here-->
<!--*****************************************************************************************************************-->

<!--*****************************************************************************************************************-->
<!--About Us Here-->
<section class="row about_us_row" id="about_us">
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-8 about_us1">
				<div class="inner row m0">
					<div class="row heading m0">
						<h2>About Us</h2>
						<a href="contact.html" class="btn">contact us</a>
					</div>
					<div class="row contents">
						<div class="col-sm-7">
							<img src="<?= $baseUriCss?>/images/about/1.jpg" alt=""> Phasellus tempus. Proin
							viverra, ligula sit amet ultrices semper, ligula arcu tristique
							sapien, a accumsan nisi mauris ac eros. Fusce neque. Suspendisse
							faucibus, nunc et pellentesque egestas, lacus ante convallis
							tellus, vitae iaculis lacus elit id tortor. Vivamus aliquet elit.
							Lac nisl. Fusce fermentum odio nec arcu. Vivamus euismod mauris.
							In ut quam vitae odio lacinia tincidunt. Praesent ut ligula non
							mi varius sagittis. Cras sagittis. Praesent ac sem eget est
							egestas volutpat. Vivamus consectetuer hendrerit lacus. Cras non
							dolor. Vivamus in erat ut urna cursus vestibulum. Fusce commodo
							aliquam arcu. Nam commodo suscipit quam. Quisque id odio. <br>
							<br>Praesent venenatis metus at tortor pulvinar varius. Lorem
							ipsum dolor sit amet, consectetuer adipiscing elit. Aenean
							commodo ligula eget dolor. Aenean massa. Cum sociis natoque
							penatibus et magnis dis parturient montes, nascetur ridiculus
							mus. Donec quam felis, ultricies nec, pellentesque eu, pretium
							quis, sem. Nulla consequat massa quis enim. Donec pede justo,
							fringilla.Phasellus tempus. Proin viverra, ligula sit amet
							ultrices semper, ligula arcu tristique sapien, a accumsan nisi
							mauris ac eros. Phasellus tempus. Proin viverra, ligula sit amet
							ultrices semper, ligula arcu tristique sapien, a accumsan nisi
							mauris ac eros. Fusce neque. Suspendisse faucibus, nunc et
							pellentesque egestas, lacus ante convallis tellus, vitae iaculis
							lacus elit id tortor. Vivamus aliquet elit ac nisl. Fusce
							fermentum odio nec arcu. Vivamus euismod mauris. In ut quam vitae
							odio lacinia tincidunt. Praesent ut ligula non mi varius
							sagittis. Cras sagittis. Praesent ac sem eget est egestas
							volutpat. Vivamus consectetuer hendrerit lacus. Cras non dolor.
							Vivamus in erat ut urna cursus vestibulum. Fusce commodo aliquam
							arcu. Nam commodo suscipit quam. Quisque id odio. Praesent
							venenatis metus at tortor pulvinar varius. Phasellus tempus.
							Proin viverra, ligula sit amet ultrices semper, ligula arcu
							tristique sapien, a accumsan nisi mauris ac eros. Fusce neque.
							Suspendisse faucibus, nunc et
						</div>
						<div class="col-sm-5">
							Phasellus tempus. Proin viverra, ligula sit amet ultrices semper,
							ligula arcu tristique sapien, a accumsan nisi mauris ac eros.
							Fusce neque. Suspendisse faucibus, nunc et pellentesque egestas,
							lacus ante convallis tellus, vitae iaculis lacus elit id tortor.
							Vivamus aliquet elit ac nisl. Fusce fermentum odio nec arcu.
							Vivamus euismod mauris. In ut quam vitae odio lacinia tincidunt.
							<br>
							<br>Praesent ut ligula non mi varius sagittis. Cras sagittis.
							Praesent ac sem eget est egestas volutpat. Vivamus consectetuer
							hendrerit lacus. Cras non dolor. Vivamus in erat ut urna cursus
							vestibulum. Fusce commodo aliquam arcu. Nam commodo suscipit
							quam. Quisque id odio. Praesent venenatis metus at tortor
							pulvinar varius. Phasellus tempus. Proin viverra, ligula sit amet
							ultrices semper, ligula arcu tristique sapien, a accumsan nisi
							mauris ac eros. Fusce neque. Suspendisse faucibus, nunc et
							pellentesque egestas, lacus ante convallis tellus, vitae iaculis
							lacus elit id tortor. Vivamus aliquet elit ac nisl. Fusce
							fermentum odio nec arcu. Vivamus euismod mauris. In ut quam vitae
							odio lacinia tincidunt. <br>
							<br>Praesent ut ligula non mi varius sagittis. Cras sagittis.
							Praesent ac sem eget est egestas volutpat. Vivamus consectetuer
							hendrerit lacus. Cras non dolor. Vivamus in erat ut urna cursus
							vestibulum. Fusce commodo aliquam arcu. Nam commodo suscipit
							quam. Quisque id odio. Praesent
						</div>
						<div class="col-sm-12">
							<blockquote>Praesent ut ligula non mi varius sagittis. Cras
								sagittis. Praesent ac sem eget est egestas volutpat. Vivamus
								consectetuer hendrerit lacus. Cras non dolor. Vivamus in erat ut
								urna cursus vestibulum. Fusce commodo aliquam arcu. Nam commodo
								suscipit quam. Quisque id odio. Praesent venenatis metus at
								tortor pulvinar varius. Phasellus tempus. Proin viverra, ligula
								sit amet ultrices semper, ligula arcu tristique sapien, a
								accumsan nisi mauris ac eros. Fusce neque. Suspendisse faucibus,
								nunc et pellentesque egestas, lacus ante convallis tellus, vitae
								iaculis lacus elit id tortor. Vivamus aliquet elit ac nisl.
								Fusce fermentum odio nec arcu. Vivamus euismod mauris. In ut
								quam vitae odio lacinia tincidunt.</blockquote>
						</div>
					</div>
					<ul class="nav social_facts">
						<li><a href="#"><i class="fa fa-google-plus"></i><span>1</span> <span>189</span>
								<span>185</span></a></li>
						<li><a href="#"><i class="fa fa-twitter"></i><span>1</span> <span>168</span>
								<span>489</span></a></li>
						<li><a href="#"><i class="fa fa-facebook"></i><span>4</span> <span>210</span>
								<span>568</span></a></li>
						<li><a href="#"><i class="fa fa-youtube-play"></i><span>2</span> <span>148</span>
								<span>984</span></a></li>
						<li><a href="#"><i class="fa fa-instagram"></i><span>4</span> <span>189</span>
								<span>498</span></a></li>
					</ul>
				</div>
			</div>
			<div class="col-sm-4 about_us2">
				<img src="<?= $baseUriCss?>/images/about/3.jpg" alt="">
				<p>
					Praesent adipiscing. Phasellus ullamcorper ipsum rutrum nunc. Nunc
					nonummy metus. Vestibulum volutpat pretium libero. Cras id dui.
					Aenean ut eros et nisl sagittis vestibulum. Nullam nulla eros,
					ultricies sit amet, nonummy id, imperdiet Etiam imperdiet imperdiet
					orci. Nunc nec neque. Phasellus leo dolor, tempus non, auctor et,
					hendrerit quis, nisi. Curabitur ligula sapien, tincidunt non,
					euismod vitae, posuere imperdiet, leo. Maecenas malesuada. Praesent
					congue erat at massa. <br>
					<br>Вonec posuere vulputate arcu. Phasellus accumsan cursus velit.
					Vestibulum ante ipsum primis in faucibus orci luctus et ultrices
					posuere cubilia quis porttitor congue, elit erat euismod orci, ac
					placerat dolor lectus quis orci. Phasellus consectetuer vestibulum
					elit. Pellentesque posuere. Praesent turpis. Aenean posuere, tortor
					sed cursus feugiat, nunc augue blandit nunc, eu sollicitudin urna
					dolor sagittis lacus. Donec elit libero, sodales nec, volutpat a,
					suscipit non, turpis. Nullam sagittis. Suspendisse pulvinar, augue
					ac venenatis condimentum
				</p>
			</div>
		</div>
	</div>
</section>
<!--About Us Here-->
<!--*****************************************************************************************************************-->

<!--*****************************************************************************************************************-->
<!--Special Projects Here-->
<section class="row special_projects" id="projects">
	<div class="media">
		<div class="media-left">special projects</div>
		<div class="media-body">
			<div class="col-sm-3 special_project special_project1">
				<a href="#">World Humanitarian Day: voices from the field revisited</a>
			</div>
			<div class="col-sm-3 special_project special_project2">
				<a href="#">Breaking news on 2016 year and interview with many
					people</a>
			</div>
			<div class="col-sm-3 special_project special_project3">
				<a href="#">Forbes Billionaires: Full List Of Th Richest People In
					The World</a>
			</div>
			<div class="col-sm-3 special_project special_project4">
				<a href="#">Most top places and the best apartments with AirBNB
					service</a>
			</div>
		</div>
	</div>
</section>
<!--Special Projects Here-->
<!--*****************************************************************************************************************-->

<!--*****************************************************************************************************************-->
