<?php
use app\lib\OnlineConfig;
use app\lib\DateUtil;
$baseUri = Yii::getAlias('@web');
$baseUriCss = $baseUri.'/assets/theme';
use yii\bootstrap\Html;
use app\lib\Workflow;
?>
<style>
.featured_posts span.category{
	color: #FFFFFF;
	background-color: #f31d12;
	padding:5px;
}
</style>
<div style="margin: 25px;">
	<h2 class="category politics">
	<?php echo $sectionTitle?$sectionTitle:''?>
	</h2>
</div>
<hr>
<?php if (!empty($model)):?>
<section class="row featured_posts featured_posts2">
        <div class="container-fluid">
        	<?php $content = array_splice($model, 0, 2);?>
			<?php if (!empty($content)):?>
            <div class="row" id="featured_posts2">
            	<?php foreach ($content as $lst):?>
                <div class="col-sm-6 post">
                	<a href="<?php echo Workflow::getLink($lst)?>" style="z-index: 2;content: none !important;">
                    <div class="row inner">
                    	<?php echo Html::img(Workflow::getUripreview([
		'width'=>800,
		'height'=>400,
		'wartermark'=>'',
		'mediaId'=>$lst['thumbnail']]),['class'=>'featured-img', 'alt' => $lst['title']])?>
                        <div class="row m0 content">
                            <!-- <span class="category sports"><?php //echo $lst['categoryId']?Workflow::$arrCategory[$lst['categoryId']]:''?></span> -->
                            <h2 class="title dropShadow"><a href="<?php echo Workflow::getLink($lst)?>"><?php echo $lst['title']?></a></h2>
                            <ul class="post_meta nav nav-pills">
                                <li><a href="javascript:;"><i class="fa fa-clock-o"></i> <?php echo DateUtil::th_date('j F Y, H:i น.', strtotime($lst['publishTime']))?></a></li>
                            </ul>
                        </div>
                    </div>
                    </a>
                </div>
                <?php endforeach;?>
             </div>
             <?php endif;?>
             <?php $content = array_splice($model, 0, 2);?>
			<?php if (!empty($content)):?>
            <div class="row" id="featured_posts2">
            	<?php foreach ($content as $lst):?>
                <div class="col-sm-6 post">
                	<a href="<?php echo Workflow::getLink($lst)?>" style="z-index: 2;content: none !important;">
                    <div class="row inner">
                    	<?php echo Html::img(Workflow::getUripreview([
		'width'=>800,
		'height'=>400,
		'wartermark'=>'',
		'mediaId'=>$lst['thumbnail']]),['class'=>'featured-img', 'alt' => $lst['title']])?>
                        <div class="row m0 content">
                            <!-- <span class="category sports"><?php //echo $lst['categoryId']?Workflow::$arrCategory[$lst['categoryId']]:''?></span> -->
                            <h2 class="title dropShadow"><a href="<?php echo Workflow::getLink($lst)?>"><?php echo $lst['title']?></a></h2>
                            <ul class="post_meta nav nav-pills">
                                <li><a href="javascript:;"><i class="fa fa-clock-o"></i> <?php echo DateUtil::th_date('j F Y, H:i น.', strtotime($lst['publishTime']))?></a></li>
                            </ul>
                        </div>
                    </div>
                    </a>
                </div>
                <?php endforeach;?>
             </div>
             <?php endif;?>
        </div>
    </section>
    <?php endif;?>
    
    <?php if (!empty($model)):?>
<section class="row all_posts" id="all_posts">
	<div class="post_sizer"></div> <!--This is not a post-->
		
        <?php foreach ($model as $lst):?>
        
        <?php if ($lst['theme'] == 1){?>
        <div class="col-sm-3 post post-1">
            <div class="row m0 inner">
                <div class="row m0 featured_img">
                    <a href="<?php echo Workflow::getLink($lst)?>">
                    <?php echo Workflow::getThumbnail($lst)?>
                    </a>
                </div>
                <div class="row m0 post_contents">
                	<?php if (false){?>
                    <div class="row m0 category politics">
                        <a href="#"><?php echo $lst['categoryId']?Workflow::$arrCategory[$lst['categoryId']]:''?></a>
                    </div>
                    <?php }?>
                    <h3 class="post_title"><a href="<?php echo Workflow::getLink($lst)?>"><?php echo $lst['title']?></a></h3>
                    <p><?php echo $lst['abstract']?$lst['abstract']:'';?></p>
                    <hr>
                    <ul class="post_meta nav nav-pills">
                        <li><i class="fa fa-clock-o"></i> <?php echo DateUtil::th_date('j F Y, H:i น.', strtotime($lst['publishTime']))?></li>
                    </ul>                    
                </div>
            </div>
        </div>
        
        
        <?php }elseif ($lst['theme'] == 2){?>
        
        <div class="col-sm-3 post post-9">
            <div class="row m0 inner">
                <div class="row m0 featured_img">
                    <div class="owl-carousel post_dot_gallery">
                    	<?php echo Workflow::getThumbnailGallery($lst)?>
                    </div>
                </div>
                <div class="row m0 post_contents">
                	<?php if (false){?>
                    <div class="row m0 category world">
                        <a href="javascript:;"><?php echo $lst['categoryId']?Workflow::$arrCategory[$lst['categoryId']]:''?></a>
                    </div>
                    <?php }?>
                    <h3 class="post_title">
                    	<a href="<?php echo Workflow::getLink($lst)?>"><?php echo $lst['title']?></a>
                    </h3>
                    <p><?php echo $lst['abstract']?$lst['abstract']:'';?></p>
                    <hr>
                    <ul class="post_meta nav nav-pills">
                        <li><i class="fa fa-clock-o"></i> <?php echo DateUtil::th_date('j F Y, H:i น.', strtotime($lst['publishTime']))?></li>
                    </ul>                    
                </div>
            </div>
        </div><!--Post-->
        <?php }?>
        <?php endforeach;	?>

        
   
</section>  
<?php endif;?>
<!-- 
<section class="row popular_posts_row">
        <h2 class="sectionTitle">popular posts</h2>
        <div class="owl-carousel popular_posts_carousel all_posts">
            <div class="item post">
                <div class="row inner">
                    <img src="<?php echo $baseUriCss?>/images/posts/popular/7.jpg" alt="" class="featured-img">
                    <div class="row content">
                        <h4 class="category politics"><a href="#">politics</a></h4>
                        <h3 class="post_title"><a href="single-blog.html">Proin faucibus arcu quis ante. In consectetuer turpis</a></h3>
                        <ul class="post_meta nav nav-pills">
                            <li><a href="#">August 6, 2015</a></li>
                            <li><a href="#"><i class="fa fa-thumbs-o-up"></i>1456</a></li>
                            <li><a href="#"><i class="fa fa-commenting"></i>32</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section> -->