<?php
use app\lib\OnlineConfig;
use app\lib\DateUtil;
use yii\helpers\Url;
use yii\widgets\LinkPager;
use app\lib\Workflow;
$baseUri = Yii::getAlias('@web');
$baseUriCss = $baseUri.'/assets/theme';

$str = <<<EOT
	 
	
EOT;

$this->registerJs($str);
$css = <<<EOT

EOT;
$this->registerCss($css);
?>
<div style="margin: 15px;">
	<h2>ข่าวที่เกี่ยวกับ: <?php echo $q?></h2>
</div>
                <!-- <form action="#" class="row m0 search_form_404">
                    <div class="input-group">
                        <input type="search" class="form-control" placeholder="Search">
                        <span class="input-group-addon">
                            <button type="submit" class="btn"><i class="fa fa-search"></i></button>
                        </span>
                    </div>
                </form> -->
<hr>
<section class="row all_posts" id="all_posts">
	<div class="post_sizer"></div> <!--This is not a post-->
		<?php foreach($models as $model){?>
        <div class="col-sm-3 post post-1">
            <div class="row m0 inner">
                <div class="row m0 featured_img">
                    <a href="single-blog.html"><img src="<?= Workflow::getUripreview([
                    		'width'=>250,
                    		'height'=>250,
                    		'wartermark'=>true,
                    		'mediaId'=>$model->thumbnail
                    ])?>" alt=""></a>
                </div>
                <div class="row m0 post_contents">
                    <div class="row m0 category politics">
                        <a href="#"><?php echo isset(Workflow::$arrCategory[$model->categoryId])?Workflow::$arrCategory[$model->categoryId]:''?></a>
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
                    <h3 class="post_title"><a href="#"><?php echo $model->title?></a></h3>
                    <ul class="post_meta nav nav-pills">
                        <li><a href="#"><?php echo date(DateUtil::th_date('d M Y',strtotime($model->publishTime)))?></a></li>
                    </ul>                    
                </div>
            </div>
        </div><!--Post-->
        <?php }?>
        
        <!-- <div class="col-sm-3 post post-9">
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
                         
                         
                    </ul>                    
                </div>
            </div>
        </div>-->
        
</section>

<div class="row">
	<div class="col-md-12">
		<div class=" pull-right">
		<?php 
		echo LinkPager::widget([
		    'pagination' => $pages,
		]);
		?>
		</div>
	</div>
</div>