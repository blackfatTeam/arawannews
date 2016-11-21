<?php
use app\lib\OnlineConfig;
use app\lib\DateUtil;
use app\lib\Workflow;
use yii\bootstrap\Html;
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
					<?php echo Html::img(Workflow::getUripreview([
		'width'=>800,
		'height'=>800,
		'wartermark'=>'',
		'mediaId'=>$lst['thumbnail']]),['class'=>'featured-img', 'alt' => $lst['title']])?>
					<div class="row m0 content">
						<?php if (!empty($lst['categoryId'])){?>
						<h4 class="category politics">
							<a href="javascript:;"><?php echo $lst['categoryId']?Workflow::$arrCategory[$lst['categoryId']]:''?></a>
						</h4>
						<?php }?>
						<h2 class="title">
							<a class="dropShadow" href="<?php echo Workflow::getLink($lst)?>"><?php echo $lst['title']?></a>
						</h2>
						<p class="dropShadow hidden-xs"><?php echo $lst['abstract']?></p>
						<ul class="post_meta nav nav-pills">
							<li><a href="#"><i class="fa fa-clock-o"></i> <?php echo DateUtil::th_date('j F Y, H:i น.', strtotime($lst['publishTime']))?></a></li>
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
					<?php echo Html::img(Workflow::getUripreview([
		'width'=>800,
		'height'=>400,
		'wartermark'=>'',
		'mediaId'=>$lst['thumbnail']]),['class'=>'featured-img', 'alt' => $lst['title']])?>
					<div class="row m0 content">
						<?php if (!empty($lst['categoryId'])){?>
						<h4 class="category sports">
							<a href="javascript:;"><?php echo $lst['categoryId']?Workflow::$arrCategory[$lst['categoryId']]:''?></a>
						</h4>
						<?php }?>
						<h2 class="title">
							<a class="dropShadow" href="<?php echo Workflow::getLink($lst)?>"><?php echo $lst['title']?></a>
						</h2>
						<p class="dropShadow hidden-xs"><?php echo $lst['abstract']?></p>
						<ul class="post_meta nav nav-pills">
							<li><a href="#"><i class="fa fa-clock-o"></i> <?php echo DateUtil::th_date('j F Y, H:i น.', strtotime($lst['publishTime']))?></a></li>
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
					<?php echo Html::img(Workflow::getUripreview([
		'width'=>800,
		'height'=>400,
		'wartermark'=>'',
		'mediaId'=>$lst['thumbnail']]),['class'=>'featured-img', 'alt' => $lst['title']])?>
					<div class="row m0 content">
						<?php if (!empty($lst['categoryId'])){?>
						<h4 class="category sports">
							<a href="javascript:;"><?php echo $lst['categoryId']?Workflow::$arrCategory[$lst['categoryId']]:''?></a>
						</h4>
						<?php }?>
						<h2 class="title">
							<a class="dropShadow" href="<?php echo Workflow::getLink($lst)?>"><?php echo $lst['title']?></a>
						</h2>
						<p class="dropShadow hidden-xs"><?php echo $lst['abstract']?></p>
						<ul class="post_meta nav nav-pills">
							<li><a href="#"><i class="fa fa-clock-o"></i> <?php echo DateUtil::th_date('j F Y, H:i น.', strtotime($lst['publishTime']))?></a></li>
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
<?php if (!empty($model['others'])):?>
<section class="row all_posts" id="all_posts">
	<div class="post_sizer"></div> <!--This is not a post-->
		
        <?php foreach ($model['others'] as $lst):?>
        
        <?php if ($lst['theme'] == 1){?>
        <div class="col-sm-3 post post-1">
            <div class="row m0 inner">
                <div class="row m0 featured_img">
                    <a href="javascript:;">
                    <?php echo Workflow::getThumbnail($lst)?>
                    </a>
                </div>
                <div class="row m0 post_contents">
                	<?php if (!empty($lst['categoryId'])){?>
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
                	<?php if (!empty($lst['categoryId'])){?>
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
        <!--  <div class="col-sm-3 post post-11 link">
            <div class="row m0 inner">
                <img src="<?php //echo $baseUriCss?>/images/posts/9.jpg" alt="">
                <div class="row m0 post_contents">
                    <h4 class="category politics"><a href="#">politics</a></h4>
                    <h3 class="post_title"><a href="#">Deadly infections from medical scopes go unreported, raising health risks</a></h3>
                    <ul class="post_meta nav nav-pills">
                        <li><a href="#">August 6, 2015</a></li>
                    </ul>                    
                </div>
            </div>
        </div>-->
        
   
</section>  
<?php endif;?>

<?php if (!empty($model['howTo'])):?>
<section class="row video_posts" id="popular_videos">
        <div class="container-fluid">
        	<h4 class="category politics">
				<a href="javascript:;" style="font-size: 30px !important;">HOW TO</a>
			</h4>
			<br>
            <div class="row">
            	<?php foreach ($model['howTo'] as $lst):?>
                <div class="col-sm-3 video-post">
                    
                    <?php echo Html::img(Workflow::getUripreview([
		'width'=>800,
		'height'=>600,
		'wartermark'=>'',
		'mediaId'=>$lst['thumbnail']]),['class'=>'img-responsive', 'alt' => $lst['title']])?>
		<br>
				<div class="marginTop15">
					<a class="linkTitleWhite" href="#"><?php echo $lst['title']?></a>
				</div>
				<br>
                 <p class="linkAbstractWhite"><?php echo $lst['abstract']?></p>
                </div>
				<?php endforeach;?>
            </div>
        </div>
    </section>
    <?php endif;?>
    <!--Popular Videos Here-->