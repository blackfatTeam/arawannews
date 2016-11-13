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
