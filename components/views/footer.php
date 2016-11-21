<?php
use common\models\User;
use app\lib\OnlineConfig;
use yii\helpers\Html;
use yii\helpers\Url;
use app\lib\Workflow;
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
	
	<div class="row m0 categories">
		<h3 class="widgetTitle">categories</h3>
		<ul class="nav">
			<?php foreach (OnlineConfig::$arrSection as $key => $lst):?>
			<?php if ($key !== 'home'):?>
			<li><a href="<?php echo Url::toRoute(['category/'.$key]);?>"><?php echo $lst['title']?></a></li>
			<?php endif;?>
			<?php endforeach;?>
		</ul>
	</div>
	<!-- <div class="row m0 navByCat">
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
	</div> -->
	<!-- <div class="row m0 just_posted">
		<h3 class="widgetTitle">just posted</h3>
		<ol>
			<li><a href="#">Sticky Post: Jeb Bush Calls For VA Overhaul</a></li>
			<li><a href="#">What Happened This Week? Take Our Weekly News Quiz</a></li>
			<li><a href="#">Woman finds 4 urns in recently purchased used car</a></li>
			<li><a href="#">Sticky Post: Jeb Bush Calls For VA Overhaul</a></li>
		</ol>
	</div> -->
	<?php if (!empty($model)):?>
	<div class="row m0 popular_posts">
		<h3 class="widgetTitle">Hot Topic</h3>
		<?php foreach ($model as $lst):?>
		<div class="row m0 post">
		<?php echo Html::img(Workflow::getUripreview([
		'width'=>270,
		'height'=>300,
		'wartermark'=>'',
		'mediaId'=>$lst['thumbnail']]),['class'=>'featured-img', 'alt' => $lst['title']])?>
			
			<div class="post_contents">
				<h4 class="category politics">
					<a href="javascript:;"><?php echo $lst['categoryId']?Workflow::$arrCategory[$lst['categoryId']]:''?></a>
				</h4>
				<h4 class="title dropShadow">
					<a href="<?php echo Workflow::getLink($lst)?>"><?php echo $lst['title']?></a>
				</h4>
			</div>
		</div>
		<?php endforeach;?>
	</div>
	<?php endif;?>

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
