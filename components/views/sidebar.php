<?php
use app\lib\OnlineConfig;
use common\models\User;
use yii\helpers\Html;
use yii\helpers\Url;
$identity = \Yii::$app->user->getIdentity ();
$baseUri = \Yii::getAlias ( '@web' );
$baseUriCss = $baseUri . '/assets/theme';
$user = \Yii::$app->user;
$uri = Yii::$app->controller->getRoute();
?>
<style>
.hotTopicMenu{
	color: #FFFFFF;
	margin: 0 10px;
}
</style>
<div class="slideMenuClose"></div>

<!--  <section class="preloader preloader2 row">
	<div class="before_half row m0"></div>
	<div class="after_half row m0"></div>
	<div class="row m0 content">
		<div class="circle">
			<div class="red">
				<div class="rotator">
					<img src="<?php //echo $baseUriCss?>/images/curve.png" alt="">
				</div>
				<a href="#" class="logo">age</a>
			</div>
		</div>
	</div>
</section>-->

<header class="row header1" id="header">
	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<div class="logo_container fleft">
					<div id="slideMenu_trigger">
						<img src="<?= $baseUriCss?>/images/navigation/logo/bars.png" alt="">
					</div>
					<a class="navbar-brand" href="<?php echo Url::toRoute(['/']);?>"><img src="<?php echo $baseUri?>/assets/img/arawan-logo.png" class="logo-arawan" /></a>
				</div>
			</div>

			<div class="follow_nav fleft">
				<?php foreach($hotTopic as $hot){?>
				<div class="fleft menuTitle"><a href="<?php echo Url::to(['tags/index','q'=>$hot->tags])?>" class="hotTopicMenu"><?php echo $hot->title?></a></div>
				<?php }?>
				<!-- <ul class="nav nav-pills">
					<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
					<li><a href="#"><i class="fa fa-twitter"></i></a></li>
					<li><a href="#"><i class="fa fa-facebook"></i></a></li>
					<li><a href="#"><i class="fa fa-vk"></i></a></li>
					<li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
				</ul> -->
			</div>

			<div class="rightSide_nav pull-right">
				<!-- <div class="fleft current_date"></div> -->
				<div class="fright search_dot">
					<ul class="nav navbar-nav">
						<li><a href="javascript:;" data-toggle="modal" data-target="#myModal" ><i
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
						<li><a href="javascript:;">หมวดข่าว</a>
							<ul class="nav">
								<?php foreach (OnlineConfig::$arrSection as $key => $lst):?>
								<?php if ($key !== 'home'):?>
								<li><a href="<?php echo Url::toRoute(['category/'.$key]);?>"><?php echo $lst['title']?></a></li>
								<?php endif;?>
								<?php endforeach;?>
							</ul>
						</li>
						<li><a href="<?php echo Url::toRoute(['/']);?>">หน้าหลัก</a></li>
						
					</ul>
				</div>
			</div>
		</div>
		<!-- /.container-fluid -->
	</nav>
</header>

<!-- Modal -->
<section class="row search_form_popup modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<h2>
							ค้นหาข่าว
						</h2>
					</div>
					<div class="col-sm-8">
						<form action="<?php echo Url::to(['search/index'])?>" type="GET" class="row m0">
							<div class="input-group">
								<input type="search" name="q" class="form-control"
									placeholder="Search"> <span class="input-group-addon">
									<button type="submit">
										<i class="fa fa-search"></i>
									</button>
								</span>
							</div>
						</form>
					</div>
				</div>

	</div>
</section>