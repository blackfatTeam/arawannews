<?php
use common\models\User;
use app\lib\OnlineConfig;
$identity = \Yii::$app->user->getIdentity ();
$baseUri = \Yii::getAlias ( '@web' );
$baseUriCss = $baseUri . '/assets/theme';
$user = \Yii::$app->user;
$uri = Yii::$app->controller->getRoute ();
?>

<!--Copyright Here-->
    <section class="row copyright-row">
        <a href="index.html" class="logo fleft">Age</a>
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
        <div class="rights fright">2015 &copy; All Rights Reserved by <a href="#">wwwebinvader</a></div>
    </section>
    <!--Copyright Here-->

<!--*****************************************************************************************************************-->
<!--Sliding Menu Triggered with Menu-->

<div class="sliding_menu row m0">
	<div class="row m0 search_row">
		<form action="#" class="search_form fleft">
			<div class="input-group">
				<span class="input-group-addon"><i class="fa fa-search"></i></span>
				<input type="search" class="form-control">
			</div>
		</form>
		<div class="fleft" id="menuHide">
			<img src="<?= $baseUriCss?>/images/navigation/logo/bars2.png" alt="">
		</div>
	</div>
	<div class="row m0 navByCat">
		<ul class="nav">
			<li class="dropdown"><a href="#" class="dropdown-toggle"
				data-toggle="dropdown" role="button" aria-haspopup="true"
				aria-expanded="false">news</a>
				<ul class="dropdown-menu">
					<li><a href="#">politics</a></li>
					<li><a href="#">sports</a></li>
					<li><a href="#">money</a></li>
					<li><a href="#">world</a></li>
				</ul></li>
			<li class="dropdown"><a href="#" class="dropdown-toggle"
				data-toggle="dropdown" role="button" aria-haspopup="true"
				aria-expanded="false">politics</a>
				<ul class="dropdown-menu">
					<li><a href="#">Australia</a></li>
					<li><a href="#">Canada</a></li>
					<li><a href="#">France</a></li>
					<li><a href="#">Germany</a></li>
					<li><a href="#">Poland</a></li>
					<li><a href="#">Ukraine</a></li>
				</ul></li>
			<li class="dropdown"><a href="#" class="dropdown-toggle"
				data-toggle="dropdown" role="button" aria-haspopup="true"
				aria-expanded="false">sports</a>
				<ul class="dropdown-menu">
					<li><a href="#">NFL</a></li>
					<li><a href="#">MLB</a></li>
					<li><a href="#">NBA</a></li>
					<li><a href="#">NHL</a></li>
					<li><a href="#">NCAAF</a></li>
					<li><a href="#">NCAAB</a></li>
				</ul></li>
			<li class="dropdown"><a href="#" class="dropdown-toggle"
				data-toggle="dropdown" role="button" aria-haspopup="true"
				aria-expanded="false">money</a>
				<ul class="dropdown-menu">
					<li><a href="#">Markets</a></li>
					<li><a href="#">Business</a></li>
					<li><a href="#">Personal Finance</a></li>
					<li><a href="#">Cars</a></li>
					<li><a href="#">Careers</a></li>
				</ul></li>
			<li class="dropdown"><a href="#" class="dropdown-toggle"
				data-toggle="dropdown" role="button" aria-haspopup="true"
				aria-expanded="false">world</a>
				<ul class="dropdown-menu">
					<li><a href="#">Business Travel</a></li>
					<li><a href="#">Experience Travel</a></li>
					<li><a href="#">Destinations</a></li>
					<li><a href="#">Flights</a></li>
					<li><a href="#">Cruises</a></li>
					<li><a href="#">Deals</a></li>
				</ul></li>
		</ul>
	</div>
	<div class="row m0 just_posted">
		<h3 class="widgetTitle">just posted</h3>
		<ol>
			<li><a href="#">Sticky Post: Jeb Bush Calls For VA Overhaul</a></li>
			<li><a href="#">What Happened This Week? Take Our Weekly News Quiz</a></li>
			<li><a href="#">Woman finds 4 urns in recently purchased used car</a></li>
			<li><a href="#">Sticky Post: Jeb Bush Calls For VA Overhaul</a></li>
		</ol>
	</div>
	<div class="row m0 popular_posts">
		<h3 class="widgetTitle">popular posts</h3>
		<div class="row m0 post">
			<img src="<?= $baseUriCss?>/images/posts/popular/1.jpg" alt="" class="featured_img">
			<div class="post_contents">
				<h4 class="category politics">
					<a href="#">politics</a>
				</h4>
				<h4 class="title">
					<a href="#">U.S. House Chamber Closed After Unknown Material</a>
				</h4>
			</div>
		</div>
		<div class="row m0 post">
			<img src="<?= $baseUriCss?>/images/posts/popular/2.jpg" alt="" class="featured_img">
			<div class="post_contents">
				<h4 class="category sports">
					<a href="#">sports</a>
				</h4>
				<h4 class="title">
					<a href="#">Philip Rivers: I’m going to be a Charger, wherever we
						are</a>
				</h4>
			</div>
		</div>
		<div class="row m0 post">
			<img src="<?= $baseUriCss?>/images/posts/popular/3.jpg" alt="" class="featured_img">
			<div class="post_contents">
				<h4 class="category money">
					<a href="#">money</a>
				</h4>
				<h4 class="title">
					<a href="#">U.S. Flag Raised Over Embassy in Republic of Cuba</a>
				</h4>
			</div>
		</div>
	</div>
	<div class="row m0 latest_discussions">
		<h3 class="widgetTitle">latest discussions</h3>
		<div class="media discussion">
			<div class="media-left">
				<a href="#" class="auther_pic"><img
					src="<?= $baseUriCss?>/images/posts/discussion/1.jpg" alt=""></a> <a href="#"
					class="reply_btn">reply</a>
			</div>
			<div class="media-body">
				<h5>
					3 min ago <i>by Jenifer Lorex</i>
				</h5>
				<p>Nullam accumsan lorem in dui. Cras ultricies mi eu turpis
					hendrerit fringilla...</p>
			</div>
		</div>
		<!--Discussion-->
		<div class="media discussion">
			<div class="media-left">
				<a href="#" class="auther_pic"><img
					src="<?= $baseUriCss?>/images/posts/discussion/2.jpg" alt=""></a> <a href="#"
					class="reply_btn">reply</a>
			</div>
			<div class="media-body">
				<h5>
					24 min ago <i>by Lina Dalas</i>
				</h5>
				<p>Nullam accumsan lorem in dui. Cras ultricies mi eu turpis
					hendrerit fringilla...</p>
			</div>
		</div>
		<!--Discussion-->
		<div class="media discussion">
			<div class="media-left">
				<a href="#" class="auther_pic"><img
					src="<?= $baseUriCss?>/images/posts/discussion/3.jpg" alt=""></a> <a href="#"
					class="reply_btn">reply</a>
			</div>
			<div class="media-body">
				<h5>
					30 min ago <i>by Keyden Cross</i>
				</h5>
				<p>Nullam accumsan lorem in dui. Cras ultricies mi eu turpis
					hendrerit fringilla...</p>
			</div>
		</div>
		<!--Discussion-->
	</div>
	<div class="row m0 categories">
		<h3 class="widgetTitle">categories</h3>
		<ul class="nav">
			<li><a href="#">politics <span>12</span></a></li>
			<li><a href="#">sports <span>46</span></a></li>
			<li><a href="#">money <span>15</span></a></li>
			<li><a href="#">world <span>24</span></a></li>
		</ul>
	</div>

</div>
<!--Sliding Menu Triggered with Menu End-->
<!--*****************************************************************************************************************-->

<!--*****************************************************************************************************************-->
<!--Side Scrollspy-->
<?php if (!empty(OnlineConfig::$arrSection)):?>
<div class="row m0 scrollspyMenu">
	<ul class="nav">
		<?php foreach (OnlineConfig::$arrSection as $key => $lst):?>
		<li><a href="#<?php echo $key ?>"></a> <span class="tooltip_layer"><?php echo $lst['title']?></span></li>
		<?php endforeach;?>
	</ul>

	<a href="#header" id="go_top">On Top<i class="fa fa-angle-double-right"></i></a>
</div>
<?php endif;?>
<!--Side Scrollspy-->
<!--*****************************************************************************************************************-->
