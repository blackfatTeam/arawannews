<?php
use app\lib\DateUtil;
use app\lib\Workflow;
use yii\bootstrap\Html;
$baseUri = Yii::getAlias ( '@web' );
$baseUriCss = $baseUri . '/assets/theme';
use yii\helpers\Url;
?>
<!--Single Blog Here-->
<div class="col-sm-8 single-blog sticky content_col">
	
	
	<div class="row m0 inner">
		<div class="post_inner row m0">
                            <div class="row m0 category politics">
                            	<?php if ($arrCategoryId){?>
                            		
                                	<a href="<?php echo Url::toRoute(['category/'.$arrCategoryId['titleEn']])?>"><?php echo $arrCategoryId['title']?$arrCategoryId['title']:'';?></a>
                             
                                <?php }?>                             
                                <ul class="post_meta nav nav-pills">
                                    <li><i class="fa fa-calendar-check-o" aria-hidden="true"></i> เผยแพร่เมื่อ: <?php echo DateUtil::th_date('d M Y, H:i น.',strtotime($content->publishTime))?></li>
      
                                </ul>
                            </div>
                            <h3 class="post_title"><?php echo $content->title?></h3>
                            
                        </div>

		<div class="post_inner row m0">
			<div class="post_content row m0">
				<?php if(false):?>
				<img src="<?php echo $thumbnail->fullPath?>" alt="<?php echo $content->title?>" class="img-responsive">
				<?php endif;?>
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
                        <a href="<?php echo $lst->fullPath?>" class="zoom_gallery_img"><i class="fa fa-search"></i></a>
                        
                    </div>
                    <div class="texts row m0">
                     
                        <p><?php echo $lst->caption?></p>
                    </div>
                    
                </div>
            </div>
        </div> <!--Gallery Item / Post1 -->
        <?php endforeach;?>
    </section>
	<?php endif;?>

</div>
<!--Single Blog Here-->