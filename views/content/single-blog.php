<?php
use app\lib\DateUtil;
use app\lib\Workflow;
use yii\bootstrap\Html;
$baseUri = Yii::getAlias ( '@web' );
$baseUriCss = $baseUri . '/assets/theme';
?>
<!--Single Blog Here-->
<div class="col-sm-8 single-blog sticky content_col">
	
	
	<div class="row m0 inner">
		<div class="post_inner row m0">
                            <div class="row m0 category politics">
                                <a href="#">politics</a>                              
                                <ul class="post_meta nav nav-pills">
                                    <li><i class="fa fa-calendar-check-o" aria-hidden="true"></i> เผยแพร่เมื่อ: <?php echo DateUtil::th_date('d M Y, H:i น.',strtotime($content->publishTime))?></li>
      
                                </ul>
                            </div>
                            <h3 class="post_title"><?php echo $content->title?></h3>
                            
                        </div>

		<div class="post_inner row m0">
			<div class="post_content row m0">
				<img src="<?php echo $thumbnail->fullPath?>" alt="<?php echo $content->title?>" class="img-responsive">
				<br>
				<?php echo $content->content?>
			</div>
		</div>
	</div>
	
	<?php if ($content->theme == 2 && !empty($arrMedia)):?>
	<section class="row gallery_posts" id="gallery_posts">
		<?php foreach ($arrMedia as $lst):?>
        <div class="col-sm-4 post sports">
            <div class="inner row m0">
            	<?php echo Html::img(Workflow::getUripreview([
		'width'=>538,
		'wartermark'=>'',
		'mediaId'=>$lst['id']]),['class' => 'featured_img','alt' => $lst['caption']])?>

                <div class="row m0 post_content">
                    <div class="row m0 additional">
                        <a href="<?php echo $lst->fullPath?>" class="zoom_gallery_img"><i class="fa fa-plus-square"></i></a>
                        
                    </div>
                    <div class="texts row m0">
                        <h3 class="title">smoke and wheels</h3>
                        <p>Phasellus tempus. Proin viverra, ligula sit amet ultrices semper, ligula arcu tristique sapien, a accumsan nisi mauris ac eros. Fusce neque. Suspendisse faucibus, nunc et pellentesque egestas.</p>
                    </div>
                    <a href="#" class="gallery_post_link"><i class="fa fa-link"></i></a>
                </div>
            </div>
        </div> <!--Gallery Item / Post1 -->
        <?php endforeach;?>
    </section>
	<?php endif;?>
	<!-- <div class="row m0 related_post_row">
		<div class="title_row row m0">
			<h3 class="fleft">ข่าวที่เกี่ยวข้อง</h3>
			<div class="fright" id="related_post_dots"></div>
		</div>
		<div class="related_posts row m0">
			<div class="owl-carousel related_posts_carousel">
				<?php //foreach ($relateContent as $item){?>
				<div class="item">
					<div class="featured_img row m0">
						<img src="<?php //echo $item['thumbnail']?>" alt="">
							
					</div>
					<h3>
						<a href="#"><?php //echo $item['title']?></a>
					</h3>
				</div>
				<?php //}?>
			</div>
		</div>
	</div> -->
</div>
<!--Single Blog Here-->