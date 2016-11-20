<?php
use app\lib\OnlineConfig;
use app\lib\DateUtil;
$baseUri = Yii::getAlias('@web');
$baseUriCss = $baseUri.'/assets/theme';
?>
<!--*****************************************************************************************************************-->
<!--Feature Posts Here-->
<?php if (!empty($model[OnlineConfig::ONLINE_HOME])):?>
<section class="row featured_posts">
	<div class="container-fluid">

		<div class="row">
			<div class="col-lg-6 col-md-6 post">
				<?php $arrModel = array_splice($model[OnlineConfig::ONLINE_HOME], 0 ,1);?>
				<?php if (!empty($arrModel)):?>
				<?php foreach ($arrModel as $lst):?>
				<div class="row inner">
					<img src="<?= $baseUriCss?>/images/posts/features/1.jpg" alt="" class="featured-img">
					<div class="row m0 content">
						<h4 class="category politics">
							<a href="#">111</a>
						</h4>
						<h2 class="title">
							<a class="dropShadow" href="single-blog.html"><?php echo $lst['title']?></a>
						</h2>
						<p class="dropShadow"><?php echo $lst['abstract']?></p>
						<ul class="post_meta nav nav-pills">
							<li><a href="#"><?php echo DateUtil::th_date('j F Y, H:i น.', strtotime($lst['publishTime']))?></a></li>
						</ul>
					</div>
				</div>
				<?php endforeach;?>
				<?php endif; ?>
			</div>
			<div class="col-lg-6 col-md-6 post">
				<?php $arrModel = array_splice($model[OnlineConfig::ONLINE_HOME], 0 ,1);?>
				<?php if (!empty($arrModel)):?>
				<?php foreach ($arrModel as $lst):?>
				<div class="row inner">
					<img src="<?= $baseUriCss?>/images/posts/features/2.jpg" alt="" class="featured-img">
					<div class="row m0 content">
						<h4 class="category sports">
							<a href="#">22222</a>
						</h4>
						<h2 class="title">
							<a href="single-blog.html"><?php echo $lst['title']?></a>
						</h2>
						<p class="dropShadow"><?php echo $lst['abstract']?></p>
						<ul class="post_meta nav nav-pills">
							<li><a href="#"><?php echo DateUtil::th_date('j F Y, H:i น.', strtotime($lst['publishTime']))?></a></li>
						</ul>
					</div>
				</div>
				<?php endforeach;?>
				<?php endif; ?>
			</div>
			<div class="col-lg-6 col-md-6 post">
				<?php $arrModel = array_splice($model[OnlineConfig::ONLINE_HOME], 0 ,1);?>
				<?php if (!empty($arrModel)):?>
				<?php foreach ($arrModel as $lst):?>
				<div class="row inner">
					<img src="<?= $baseUriCss?>/images/posts/features/2.jpg" alt="" class="featured-img">
					<div class="row m0 content">
						<h4 class="category sports">
							<a href="#">3333</a>
						</h4>
						<h2 class="title">
							<a href="single-blog.html"><?php echo $lst['title']?></a>
						</h2>
						<p class="dropShadow"><?php echo $lst['abstract']?></p>
						<ul class="post_meta nav nav-pills">
							<li><a href="#"><?php echo DateUtil::th_date('j F Y, H:i น.', strtotime($lst['publishTime']))?></a></li>
						</ul>
					</div>
				</div>
				<?php endforeach;?>
				<?php endif; ?>
			</div>
			
		</div>	
	</div>
</section>
<?php endif;?>
<a href="#all_posts" id="tap2allpost"><i class="fa fa-sort"></i></a>
<section class="row all_posts" id="all_posts">
	<div class="post_sizer"></div> <!--This is not a post-->
		
        
        <div class="col-sm-3 post post-1">
            <div class="row m0 inner">
                <div class="row m0 featured_img">
                    <a href="single-blog.html"><img src="<?= $baseUriCss?>/images/posts/1.jpg" alt=""></a>
                </div>
                <div class="row m0 post_contents">
                    <div class="row m0 category politics">
                        <a href="#">politics</a>
                        <div class="dropdown pull-right social_share_drop">
                            <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                    <h3 class="post_title"><a href="#">what happend this week? take our weekly news quiz</a></h3>
                    <ul class="post_meta nav nav-pills">
                        <li><a href="#">August 6, 2015</a></li>
                    </ul>                    
                </div>
            </div>
        </div>
        
        <div class="col-sm-3 post post-11 link">
            <div class="row m0 inner">
                <img src="<?= $baseUriCss?>/images/posts/9.jpg" alt="">
                <div class="row m0 post_contents">
                    <h4 class="category politics"><a href="#">politics</a></h4>
                    <h3 class="post_title"><a href="#">Deadly infections from medical scopes go unreported, raising health risks</a></h3>
                    <ul class="post_meta nav nav-pills">
                        <li><a href="#">August 6, 2015</a></li>
                    </ul>                    
                </div>
            </div>
        </div>
        
        
        <div class="col-sm-3 post post-9">
            <div class="row m0 inner">
                <div class="row m0 featured_img">
                    <div class="owl-carousel post_dot_gallery">
                        <div class="item"><img src="<?= $baseUriCss?>/images/posts/7.jpg" alt=""></div>
                        <div class="item"><img src="<?= $baseUriCss?>/images/posts/7.jpg" alt=""></div>
                        <div class="item"><img src="<?= $baseUriCss?>/images/posts/7.jpg" alt=""></div>
                        <div class="item"><img src="<?= $baseUriCss?>/images/posts/7.jpg" alt=""></div>
                    </div>
                </div>
                <div class="row m0 post_contents">
                    <div class="row m0 category world">
                        <a href="#">world</a>
                        <div class="dropdown pull-right social_share_drop">
                            <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                    <h3 class="post_title"><a href="#">Autopsy: St. Louis man killed by police was shot in back</a></h3>
                    <ul class="post_meta nav nav-pills">
                        <li><a href="#">August 6, 2015</a></li>
                        <li><a href="#"><i class="fa fa-thumbs-o-up"></i>1456</a></li>
                        <li><a href="#"><i class="fa fa-commenting"></i>32</a></li>
                    </ul>                    
                </div>
            </div>
        </div><!--Post-->
        
   
</section>  
