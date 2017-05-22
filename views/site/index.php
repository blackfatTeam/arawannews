<?php
use app\lib\OnlineConfig;
use app\lib\DateUtil;
use app\lib\Workflow;
use yii\bootstrap\Html;
$baseUri = Yii::getAlias('@web');
$baseUriCss = $baseUri.'/assets/theme';
use yii\helpers\Url;
?>
<style>
.featured_posts span.category{
	color: #FFFFFF;
	background-color: #f31d12;
	padding:5px;
}
</style>
<!--*****************************************************************************************************************-->
<!--Feature Posts Here-->
<?php if (!empty($model['highlight'])):?>
<section class="row featured_posts">
	<div class="container-fluid">
		<div class="row highlightBg"><div class="highlightText"><a href="<?php echo Url::toRoute(['category/hottopic']);?>" class="highlightLink">เกาะกระแส</a></div></div>
		<div class="row">
			<div class="col-lg-6 col-md-6 post">
				<?php $arrModel = array_splice($model['highlight'], 0 ,1);?>
				<?php if (!empty($arrModel)):?>
				<?php foreach ($arrModel as $lst):?>
				<div class="row inner">
					<a href="<?php echo Workflow::getLink($lst)?>" style="z-index: 2;content: none !important;">
					<?php echo Html::img(Workflow::getUripreview([
		'width'=>800,
		'height'=>800,
		'wartermark'=>'',
		'mediaId'=>$lst['thumbnail']]),['class'=>'featured-img', 'alt' => $lst['title']])?>
					<div class="row m0 content">
						<?php if(false):?>
						<?php if (!empty($lst['categoryId'])){?>
						<span class="category politics">
							<?php echo $lst['categoryId']?Workflow::$arrCategory[$lst['categoryId']]:''?>
						</span>
						<?php }?>
						<?php endif;?>
						<h2 class="title">
							<a class="dropShadow" href="<?php echo Workflow::getLink($lst)?>"><?php echo $lst['title']?></a>
						</h2>
						<ul class="post_meta nav nav-pills">
							<li><a href="#"><i class="fa fa-clock-o"></i> <?php echo DateUtil::th_date('j F Y, H:i น.', strtotime($lst['publishTime']))?></a></li>
						</ul>
						
					</div>
					</a>
				</div>
				<?php endforeach;?>
				<?php endif; ?>
			</div>
			<div class="col-lg-6 col-md-6 post">
				<?php $arrModel = array_splice($model['highlight'], 0 ,1);?>
				<?php if (!empty($arrModel)):?>
				<?php foreach ($arrModel as $lst):?>
				<div class="row inner">
					<a href="<?php echo Workflow::getLink($lst)?>" style="z-index: 2;">
					<?php echo Html::img(Workflow::getUripreview([
		'width'=>800,
		'height'=>400,
		'wartermark'=>'',
		'mediaId'=>$lst['thumbnail']]),['class'=>'featured-img', 'alt' => $lst['title']])?>
					<div class="row m0 content">
						<?php if(false):?>
						<?php if (!empty($lst['categoryId'])){?>
						<span class="category sports">
							<?php echo $lst['categoryId']?Workflow::$arrCategory[$lst['categoryId']]:''?>
						</span>
						<?php }?>
						<?php endif;?>
						<h2 class="title">
							<a class="dropShadow" href="<?php echo Workflow::getLink($lst)?>"><?php echo $lst['title']?></a>
						</h2>
						<ul class="post_meta nav nav-pills">
							<li><a href="#"><i class="fa fa-clock-o"></i> <?php echo DateUtil::th_date('j F Y, H:i น.', strtotime($lst['publishTime']))?></a></li>
						</ul>
					</div>
					</a>
				</div>
				<?php endforeach;?>
				<?php endif; ?>
			</div>
			<div class="col-lg-3 col-md-3 post">
				<?php $arrModel = array_splice($model['highlight'], 0 ,1);?>
				<?php if (!empty($arrModel)):?>
				<?php foreach ($arrModel as $lst):?>
				<div class="row inner">
					<a href="<?php echo Workflow::getLink($lst)?>" style="z-index: 2;">
					<?php echo Html::img(Workflow::getUripreview([
		'width'=>400,
		'height'=>400,
		'wartermark'=>'',
		'mediaId'=>$lst['thumbnail']]),['class'=>'featured-img', 'alt' => $lst['title']])?>
					<div class="row m0 content">
						<?php if(false):?>
						<?php if (!empty($lst['categoryId'])){?>
						<span class="category sports">
							<?php echo $lst['categoryId']?Workflow::$arrCategory[$lst['categoryId']]:''?>
						</span>
						<?php }?>
						<?php endif;?>
						<h2 class="title">
							<a class="dropShadow font20" href="<?php echo Workflow::getLink($lst)?>"><?php echo $lst['title']?></a>
						</h2>
						<ul class="post_meta nav nav-pills">
							<li><a href="#"><i class="fa fa-clock-o"></i> <?php echo DateUtil::th_date('j F Y, H:i น.', strtotime($lst['publishTime']))?></a></li>
						</ul>
					</div>
					</a>
				</div>
				<?php endforeach;?>
				<?php endif; ?>
			</div>
			<div class="col-lg-3 col-md-3 post">
				<?php $arrModel = array_splice($model['highlight'], 0 ,1);?>
				<?php if (!empty($arrModel)):?>
				<?php foreach ($arrModel as $lst):?>
				<div class="row inner">
					<a href="<?php echo Workflow::getLink($lst)?>" style="z-index: 2;">
					<?php echo Html::img(Workflow::getUripreview([
		'width'=>400,
		'height'=>400,
		'wartermark'=>'',
		'mediaId'=>$lst['thumbnail']]),['class'=>'featured-img', 'alt' => $lst['title']])?>
					<div class="row m0 content">
						<?php if(false):?>
						<?php if (!empty($lst['categoryId'])){?>
						<span class="category sports">
							<?php echo $lst['categoryId']?Workflow::$arrCategory[$lst['categoryId']]:''?>
						</span>
						<?php }?>
						<?php endif;?>
						<h2 class="title">
							<a class="dropShadow font20" href="<?php echo Workflow::getLink($lst)?>"><?php echo $lst['title']?></a>
						</h2>
						<ul class="post_meta nav nav-pills">
							<li><a href="#"><i class="fa fa-clock-o"></i> <?php echo DateUtil::th_date('j F Y, H:i น.', strtotime($lst['publishTime']))?></a></li>
						</ul>
					</div>
					</a>
				</div>
				<?php endforeach;?>
				<?php endif; ?>
			</div>
			
		</div>	
	</div>
</section>
<?php endif;?>


<?php if (!empty($model['hottopic'])):?>
<section class="row featured_posts">
	<div class="container-fluid">
		<section>
			<div class="row headlineBg"><a href="<?php echo Url::toRoute(['category/highlight']);?>" class="headline">เจาะประเด็น</a></div>
			<div class="row">
				<?php foreach ($model['hottopic'] as $lst):?>	
				<div class="col-lg-3 col-md-3 post">
				<div class="blog-data">
						<a href="<?php echo Workflow::getLink($lst)?>" style="z-index: 2;">
							<?php echo Html::img(Workflow::getUripreview([
		'width'=>400,
		'height'=>400,
		'wartermark'=>'',
		'mediaId'=>$lst['thumbnail']]),['class'=>'featured-img', 'alt' => $lst['title']])?>
						</a>
						<div class="content-detail">
							<a href="<?php echo Workflow::getLink($lst)?>"><h3><?php echo $lst['title']?$lst['title']:''?></h3></a>
							<span><?php echo $lst['abstract']?iconv_substr($lst['abstract'],0,60, "UTF-8"):'';?></span>
						</div>
					</div>
				</div>
				<?php endforeach;?>
			</div>
		</section>
	</div>
</section>
<?php endif;?>

<section class="row featured_posts">
	<div class="container-fluid">
		<div class="blog-data">
			<?php if (!empty($model['pol'])):?>
			<div class="col-lg-3 col-md-3">
				<div class="row headlineBg"><a href="<?php echo Url::toRoute(['category/pol']);?>" class="headline">การเมือง</a></div>
				<?php 
				$spliceModel = array_splice($model['pol'], 0,1);
				foreach ($spliceModel as $lst):?>
				<div class="post">
					<div class="blog-data">
						<a href="<?php echo Workflow::getLink($lst)?>" style="z-index: 2;">
							<?php echo Html::img(Workflow::getUripreview([
		'width'=>400,
		'height'=>400,
		'wartermark'=>'',
		'mediaId'=>$lst['thumbnail']]),['class'=>'featured-img', 'alt' => $lst['title']])?>
						</a>
						<div class="content-detail">
							<a href="<?php echo Workflow::getLink($lst)?>"><h3><?php echo $lst['title']?$lst['title']:''?></h3></a>
							<span><?php echo $lst['abstract']?iconv_substr($lst['abstract'],0,60, "UTF-8"):'';?></span>
						</div>
					</div>
				</div>
				<?php endforeach;?>
				<?php 
				$spliceModel = array_splice($model['pol'], 0,3);
				foreach ($spliceModel as $lst):?>
				<div class="post post-secondary">
					<div class="blog-data">
						<div class="content-detail">
							<a href="<?php echo Workflow::getLink($lst)?>"><?php echo $lst['title']?$lst['title']:''?></a>
						</div>
					</div>
				</div>
				<?php endforeach;?>
				
			</div>
			<?php endif;?>
			<?php if (!empty($model['economy'])):?>
			<div class="col-lg-3 col-md-3">
				<div class="row headlineBg"><a href="<?php echo Url::toRoute(['category/economy']);?>" class="headline">เศรษฐกิจ</a></div>
				<?php 
				$spliceModel = array_splice($model['economy'], 0,1);
				foreach ($spliceModel as $lst):?>
				<div class="post">
					<div class="blog-data">
						<a href="<?php echo Workflow::getLink($lst)?>" style="z-index: 2;">
							<?php echo Html::img(Workflow::getUripreview([
		'width'=>400,
		'height'=>400,
		'wartermark'=>'',
		'mediaId'=>$lst['thumbnail']]),['class'=>'featured-img', 'alt' => $lst['title']])?>
						</a>
						<div class="content-detail">
							<a href="<?php echo Workflow::getLink($lst)?>"><h3><?php echo $lst['title']?$lst['title']:''?></h3></a>
							<span><?php echo $lst['abstract']?iconv_substr($lst['abstract'],0,60, "UTF-8"):'';?></span>
						</div>
					</div>
				</div>
				<?php endforeach;?>
				<?php 
				$spliceModel = array_splice($model['economy'], 0,3);
				foreach ($spliceModel as $lst):?>
				<div class="post post-secondary">
					<div class="blog-data">
						<div class="content-detail">
							<a href="<?php echo Workflow::getLink($lst)?>"><?php echo $lst['title']?$lst['title']:''?></a>
						</div>
					</div>
				</div>
				<?php endforeach;?>
			</div>
			<?php endif;?>
			<?php if (!empty($model['crime'])):?>
			<div class="col-lg-3 col-md-3">
				<div class="row headlineBg"><a href="<?php echo Url::toRoute(['category/crime']);?>" class="headline">อาชญากรรม</a></div>
				<?php 
				$spliceModel = array_splice($model['crime'], 0,1);
				foreach ($spliceModel as $lst):?>
				<div class="post">
					<div class="blog-data">
						<a href="<?php echo Workflow::getLink($lst)?>" style="z-index: 2;">
							<?php echo Html::img(Workflow::getUripreview([
		'width'=>400,
		'height'=>400,
		'wartermark'=>'',
		'mediaId'=>$lst['thumbnail']]),['class'=>'featured-img', 'alt' => $lst['title']])?>
						</a>
						<div class="content-detail">
							<a href="<?php echo Workflow::getLink($lst)?>"><h3><?php echo $lst['title']?$lst['title']:''?></h3></a>
							<span><?php echo $lst['abstract']?iconv_substr($lst['abstract'],0,60, "UTF-8"):'';?></span>
						</div>
					</div>
				</div>
				<?php endforeach;?>
				<?php 
				$spliceModel = array_splice($model['crime'], 0,3);
				foreach ($spliceModel as $lst):?>
				<div class="post post-secondary">
					<div class="blog-data">
						<div class="content-detail">
							<a href="<?php echo Workflow::getLink($lst)?>"><?php echo $lst['title']?$lst['title']:''?></a>
						</div>
					</div>
				</div>
				<?php endforeach;?>
			</div>
			<?php endif;?>
			<?php if (!empty($model['oversea'])):?>
			<div class="col-lg-3 col-md-3">
				<div class="row headlineBg"><a href="<?php echo Url::toRoute(['category/oversea']);?>" class="headline">ต่างประเทศ</a></div>
				<?php 
				$spliceModel = array_splice($model['oversea'], 0,1);
				foreach ($spliceModel as $lst):?>
				<div class="post">
					<div class="blog-data">
						<a href="<?php echo Workflow::getLink($lst)?>" style="z-index: 2;">
							<?php echo Html::img(Workflow::getUripreview([
		'width'=>400,
		'height'=>400,
		'wartermark'=>'',
		'mediaId'=>$lst['thumbnail']]),['class'=>'featured-img', 'alt' => $lst['title']])?>
						</a>
						<div class="content-detail">
							<a href="<?php echo Workflow::getLink($lst)?>"><h3><?php echo $lst['title']?$lst['title']:''?></h3></a>
							<span><?php echo $lst['abstract']?iconv_substr($lst['abstract'],0,60, "UTF-8"):'';?></span>
						</div>
					</div>
				</div>
				<?php endforeach;?>
				<?php 
				$spliceModel = array_splice($model['oversea'], 0,3);
				foreach ($spliceModel as $lst):?>
				<div class="post post-secondary">
					<div class="blog-data">
						<div class="content-detail">
							<a href="<?php echo Workflow::getLink($lst)?>"><?php echo $lst['title']?$lst['title']:''?></a>
						</div>
					</div>
				</div>
				<?php endforeach;?>
			</div>
			<?php endif;?>
		</div>
	</div>
</section>

<section class="row featured_posts">
	<div class="container-fluid">
		<div class="blog-data">
			<?php if (!empty($model['royal'])):?>
			<div class="col-lg-3 col-md-3">
				<div class="row headlineBg"><a href="<?php echo Url::toRoute(['category/royal']);?>" class="headline">พระราชสำนัก</a></div>
				<?php 
				$spliceModel = array_splice($model['royal'], 0,1);
				foreach ($spliceModel as $lst):?>
				<div class="post">
					<div class="blog-data">
						<a href="<?php echo Workflow::getLink($lst)?>" style="z-index: 2;">
							<?php echo Html::img(Workflow::getUripreview([
		'width'=>400,
		'height'=>400,
		'wartermark'=>'',
		'mediaId'=>$lst['thumbnail']]),['class'=>'featured-img', 'alt' => $lst['title']])?>
						</a>
						<div class="content-detail">
							<a href="<?php echo Workflow::getLink($lst)?>"><h3><?php echo $lst['title']?$lst['title']:''?></h3></a>
							<span><?php echo $lst['abstract']?iconv_substr($lst['abstract'],0,60, "UTF-8"):'';?></span>
						</div>
					</div>
				</div>
				<?php endforeach;?>
				<?php 
				$spliceModel = array_splice($model['royal'], 0,3);
				foreach ($spliceModel as $lst):?>
				<div class="post post-secondary">
					<div class="blog-data">
						<div class="content-detail">
							<a href="<?php echo Workflow::getLink($lst)?>"><?php echo $lst['title']?$lst['title']:''?></a>
						</div>
					</div>
				</div>
				<?php endforeach;?>
			</div>
			<?php endif;?>
			<?php if (!empty($model['sport'])):?>
			<div class="col-lg-3 col-md-3">
				<div class="row headlineBg"><a href="<?php echo Url::toRoute(['category/sport']);?>" class="headline">กีฬา</a></div>
				<?php 
				$spliceModel = array_splice($model['sport'], 0,1);
				foreach ($spliceModel as $lst):?>
				<div class="post">
					<div class="blog-data">
						<a href="<?php echo Workflow::getLink($lst)?>" style="z-index: 2;">
							<?php echo Html::img(Workflow::getUripreview([
		'width'=>400,
		'height'=>400,
		'wartermark'=>'',
		'mediaId'=>$lst['thumbnail']]),['class'=>'featured-img', 'alt' => $lst['title']])?>
						</a>
						<div class="content-detail">
							<a href="<?php echo Workflow::getLink($lst)?>"><h3><?php echo $lst['title']?$lst['title']:''?></h3></a>
							<span><?php echo $lst['abstract']?iconv_substr($lst['abstract'],0,60, "UTF-8"):'';?></span>
						</div>
					</div>
				</div>
				<?php endforeach;?>
				<?php 
				$spliceModel = array_splice($model['sport'], 0,3);
				foreach ($spliceModel as $lst):?>
				<div class="post post-secondary">
					<div class="blog-data">
						<div class="content-detail">
							<a href="<?php echo Workflow::getLink($lst)?>"><?php echo $lst['title']?$lst['title']:''?></a>
						</div>
					</div>
				</div>
				<?php endforeach;?>
			</div>
			<?php endif;?>
			<?php if (!empty($model['ent'])):?>
			<div class="col-lg-3 col-md-3">
				<div class="row headlineBg"><a href="<?php echo Url::toRoute(['category/ent']);?>" class="headline">บันเทิง</a></div>
				<?php 
				$spliceModel = array_splice($model['ent'], 0,1);
				foreach ($spliceModel as $lst):?>
				<div class="post">
					<div class="blog-data">
						<a href="<?php echo Workflow::getLink($lst)?>" style="z-index: 2;">
							<?php echo Html::img(Workflow::getUripreview([
		'width'=>400,
		'height'=>400,
		'wartermark'=>'',
		'mediaId'=>$lst['thumbnail']]),['class'=>'featured-img', 'alt' => $lst['title']])?>
						</a>
						<div class="content-detail">
							<a href="<?php echo Workflow::getLink($lst)?>"><h3><?php echo $lst['title']?$lst['title']:''?></h3></a>
							<span><?php echo $lst['abstract']?iconv_substr($lst['abstract'],0,60, "UTF-8"):'';?></span>
						</div>
					</div>
				</div>
				<?php endforeach;?>
				<?php 
				$spliceModel = array_splice($model['ent'], 0,3);
				foreach ($spliceModel as $lst):?>
				<div class="post post-secondary">
					<div class="blog-data">
						<div class="content-detail">
							<a href="<?php echo Workflow::getLink($lst)?>"><?php echo $lst['title']?$lst['title']:''?></a>
						</div>
					</div>
				</div>
				<?php endforeach;?>
			</div>
			<?php endif;?>
			<?php if (!empty($model['region'])):?>
			<div class="col-lg-3 col-md-3">
				<div class="row headlineBg"><a href="<?php echo Url::toRoute(['category/region']);?>" class="headline">ภูมิภาค</a></div>
				<?php 
				$spliceModel = array_splice($model['region'], 0,1);
				foreach ($spliceModel as $lst):?>
				<div class="post">
					<div class="blog-data">
						<a href="<?php echo Workflow::getLink($lst)?>" style="z-index: 2;">
							<?php echo Html::img(Workflow::getUripreview([
		'width'=>400,
		'height'=>400,
		'wartermark'=>'',
		'mediaId'=>$lst['thumbnail']]),['class'=>'featured-img', 'alt' => $lst['title']])?>
						</a>
						<div class="content-detail">
							<a href="<?php echo Workflow::getLink($lst)?>"><h3><?php echo $lst['title']?$lst['title']:''?></h3></a>
							<span><?php echo $lst['abstract']?iconv_substr($lst['abstract'],0,60, "UTF-8"):'';?></span>
						</div>
					</div>
				</div>
				<?php endforeach;?>
				<?php 
				$spliceModel = array_splice($model['region'], 0,3);
				foreach ($spliceModel as $lst):?>
				<div class="post post-secondary">
					<div class="blog-data">
						<div class="content-detail">
							<a href="<?php echo Workflow::getLink($lst)?>"><?php echo $lst['title']?$lst['title']:''?></a>
						</div>
					</div>
				</div>
				<?php endforeach;?>
			</div>
			<?php endif;?>
		</div>
	</div>
</section>

<section class="row featured_posts">
	<div class="container-fluid">
		<div class="blog-data">
			<?php if (!empty($model['social'])):?>
			<div class="col-lg-3 col-md-3">
				<div class="row headlineBg"><a href="<?php echo Url::toRoute(['category/social']);?>" class="headline">วัฒนธรรม</a></div>
				<?php 
				$spliceModel = array_splice($model['social'], 0,1);
				foreach ($spliceModel as $lst):?>
				<div class="post">
					<div class="blog-data">
						<a href="<?php echo Workflow::getLink($lst)?>" style="z-index: 2;">
							<?php echo Html::img(Workflow::getUripreview([
		'width'=>400,
		'height'=>400,
		'wartermark'=>'',
		'mediaId'=>$lst['thumbnail']]),['class'=>'featured-img', 'alt' => $lst['title']])?>
						</a>
						<div class="content-detail">
							<a href="<?php echo Workflow::getLink($lst)?>"><h3><?php echo $lst['title']?$lst['title']:''?></h3></a>
							<span><?php echo $lst['abstract']?iconv_substr($lst['abstract'],0,60, "UTF-8"):'';?></span>
						</div>
					</div>
				</div>
				<?php endforeach;?>
				<?php 
				$spliceModel = array_splice($model['social'], 0,3);
				foreach ($spliceModel as $lst):?>
				<div class="post post-secondary">
					<div class="blog-data">
						<div class="content-detail">
							<a href="<?php echo Workflow::getLink($lst)?>"><?php echo $lst['title']?$lst['title']:''?></a>
						</div>
					</div>
				</div>
				<?php endforeach;?>
			</div>
			<?php endif;?>
			<?php if (!empty($model['it'])):?>
			<div class="col-lg-3 col-md-3">
				<div class="row headlineBg"><a href="<?php echo Url::toRoute(['category/it']);?>" class="headline">ไอที-นวัตกรรม</a></div>
				<?php 
				$spliceModel = array_splice($model['it'], 0,1);
				foreach ($spliceModel as $lst):?>
				<div class="post">
					<div class="blog-data">
						<a href="<?php echo Workflow::getLink($lst)?>" style="z-index: 2;">
							<?php echo Html::img(Workflow::getUripreview([
		'width'=>400,
		'height'=>400,
		'wartermark'=>'',
		'mediaId'=>$lst['thumbnail']]),['class'=>'featured-img', 'alt' => $lst['title']])?>
						</a>
						<div class="content-detail">
							<a href="<?php echo Workflow::getLink($lst)?>"><h3><?php echo $lst['title']?$lst['title']:''?></h3></a>
							<span><?php echo $lst['abstract']?iconv_substr($lst['abstract'],0,60, "UTF-8"):'';?></span>
						</div>
					</div>
				</div>
				<?php endforeach;?>
				<?php 
				$spliceModel = array_splice($model['it'], 0,3);
				foreach ($spliceModel as $lst):?>
				<div class="post post-secondary">
					<div class="blog-data">
						<div class="content-detail">
							<a href="<?php echo Workflow::getLink($lst)?>"><?php echo $lst['title']?$lst['title']:''?></a>
						</div>
					</div>
				</div>
				<?php endforeach;?>
			</div>
			<?php endif;?>
			<?php if (!empty($model['tech'])):?>
			<div class="col-lg-3 col-md-3">
				<div class="row headlineBg"><a href="<?php echo Url::toRoute(['category/tech']);?>" class="headline">นวัตกรรม</a></div>
				<?php 
				$spliceModel = array_splice($model['tech'], 0,1);
				foreach ($spliceModel as $lst):?>
				<div class="post">
					<div class="blog-data">
						<a href="<?php echo Workflow::getLink($lst)?>" style="z-index: 2;">
							<?php echo Html::img(Workflow::getUripreview([
		'width'=>400,
		'height'=>400,
		'wartermark'=>'',
		'mediaId'=>$lst['thumbnail']]),['class'=>'featured-img', 'alt' => $lst['title']])?>
						</a>
						<div class="content-detail">
							<a href="<?php echo Workflow::getLink($lst)?>"><h3><?php echo $lst['title']?$lst['title']:''?></h3></a>
							<span><?php echo $lst['abstract']?iconv_substr($lst['abstract'],0,60, "UTF-8"):'';?></span>
						</div>
					</div>
				</div>
				<?php endforeach;?>
				<?php 
				$spliceModel = array_splice($model['tech'], 0,3);
				foreach ($spliceModel as $lst):?>
				<div class="post post-secondary">
					<div class="blog-data">
						<div class="content-detail">
							<a href="<?php echo Workflow::getLink($lst)?>"><?php echo $lst['title']?$lst['title']:''?></a>
						</div>
					</div>
				</div>
				<?php endforeach;?>
			</div>
			<?php endif;?>
			<?php if (!empty($model['health'])):?>
			<div class="col-lg-3 col-md-3">
				<div class="row headlineBg"><a href="<?php echo Url::toRoute(['category/health']);?>" class="headline">สุขภาพ</a></div>
				<?php 
				$spliceModel = array_splice($model['health'], 0,1);
				foreach ($spliceModel as $lst):?>
				<div class="post">
					<div class="blog-data">
						<a href="<?php echo Workflow::getLink($lst)?>" style="z-index: 2;">
							<?php echo Html::img(Workflow::getUripreview([
		'width'=>400,
		'height'=>400,
		'wartermark'=>'',
		'mediaId'=>$lst['thumbnail']]),['class'=>'featured-img', 'alt' => $lst['title']])?>
						</a>
						<div class="content-detail">
							<a href="<?php echo Workflow::getLink($lst)?>"><h3><?php echo $lst['title']?$lst['title']:''?></h3></a>
							<span><?php echo $lst['abstract']?iconv_substr($lst['abstract'],0,60, "UTF-8"):'';?></span>
						</div>
					</div>
				</div>
				<?php endforeach;?>
				<?php 
				$spliceModel = array_splice($model['health'], 0,3);
				foreach ($spliceModel as $lst):?>
				<div class="post post-secondary">
					<div class="blog-data">
						<div class="content-detail">
							<a href="<?php echo Workflow::getLink($lst)?>"><?php echo $lst['title']?$lst['title']:''?></a>
						</div>
					</div>
				</div>
				<?php endforeach;?>
			</div>
			<?php endif;?>
		</div>
	</div>
</section>

<section class="row featured_posts">
	<div class="container-fluid">
		<section>
			<div class="row headlineBg"><a href="javascript:;" class="headline">สกู๊ปพิเศษ</a></div>
			<div class="row">
				<?php if (!empty($model['food'])):?>
				<?php 
				$spliceModel = array_splice($model['food'], 0,1);
				foreach ($spliceModel as $lst):?>
				<div class="col-lg-3 col-md-3 post">
				<div class="row inner" style="position: relative;">
					<div class="second-header"><a href="<?php echo Url::toRoute(['category/food']);?>">กิน</a></div>

					<a href="<?php echo Workflow::getLink($lst)?>" style="z-index: 2;">
							<?php echo Html::img(Workflow::getUripreview([
		'width'=>400,
		'height'=>400,
		'wartermark'=>'',
		'mediaId'=>$lst['thumbnail']]),['class'=>'featured-img', 'alt' => $lst['title']])?>
						
					
					<div class="row m0 content">
						<h2 class="title">
							<a class="dropShadow" href="<?php echo Workflow::getLink($lst)?>"><?php echo $lst['title']?$lst['title']:'';?></a>
						</h2>
					</div>
					</a>
				</div>
				</div>
				<?php endforeach;?>
				<?php endif;?>
				
				
				<?php if (!empty($model['shopping'])):?>
				<?php 
				$spliceModel = array_splice($model['shopping'], 0,1);
				foreach ($spliceModel as $lst):?>
				<div class="col-lg-3 col-md-3 post">
				<div class="row inner" style="position: relative;">
					<div class="second-header"><a href="<?php echo Url::toRoute(['category/shopping']);?>">ช๊อป</a></div>

					<a href="<?php echo Workflow::getLink($lst)?>" style="z-index: 2;">
							<?php echo Html::img(Workflow::getUripreview([
		'width'=>400,
		'height'=>400,
		'wartermark'=>'',
		'mediaId'=>$lst['thumbnail']]),['class'=>'featured-img', 'alt' => $lst['title']])?>
						
					
					<div class="row m0 content">
						<h2 class="title">
							<a class="dropShadow" href="<?php echo Workflow::getLink($lst)?>"><?php echo $lst['title']?$lst['title']:'';?></a>
						</h2>
					</div>
					</a>
				</div>
				</div>
				<?php endforeach;?>
				<?php endif;?>
				
				<?php if (!empty($model['horoscope'])):?>
				<?php 
				$spliceModel = array_splice($model['horoscope'], 0,1);
				foreach ($spliceModel as $lst):?>
				<div class="col-lg-3 col-md-3 post">
				<div class="row inner" style="position: relative;">
					<div class="second-header"><a href="<?php echo Url::toRoute(['category/horoscope']);?>">ดวง</a></div>

					<a href="<?php echo Workflow::getLink($lst)?>" style="z-index: 2;">
							<?php echo Html::img(Workflow::getUripreview([
		'width'=>400,
		'height'=>400,
		'wartermark'=>'',
		'mediaId'=>$lst['thumbnail']]),['class'=>'featured-img', 'alt' => $lst['title']])?>
						
					
					<div class="row m0 content">
						<h2 class="title">
							<a class="dropShadow" href="<?php echo Workflow::getLink($lst)?>"><?php echo $lst['title']?$lst['title']:'';?></a>
						</h2>
					</div>
					</a>
				</div>
				</div>
				<?php endforeach;?>
				<?php endif;?>
				
				<?php if (!empty($model['travel'])):?>
				<?php 
				$spliceModel = array_splice($model['travel'], 0,1);
				foreach ($spliceModel as $lst):?>
				<div class="col-lg-3 col-md-3 post">
				<div class="row inner" style="position: relative;">
					<div class="second-header"><a href="<?php echo Url::toRoute(['category/travel']);?>">เที่ยว-พักผ่อน</a></div>

					<a href="<?php echo Workflow::getLink($lst)?>" style="z-index: 2;">
							<?php echo Html::img(Workflow::getUripreview([
		'width'=>400,
		'height'=>400,
		'wartermark'=>'',
		'mediaId'=>$lst['thumbnail']]),['class'=>'featured-img', 'alt' => $lst['title']])?>
						
					
					<div class="row m0 content">
						<h2 class="title">
							<a class="dropShadow" href="<?php echo Workflow::getLink($lst)?>"><?php echo $lst['title']?$lst['title']:'';?></a>
						</h2>
					</div>
					</a>
				</div>
				</div>
				<?php endforeach;?>
				<?php endif;?>
				
				
			</div>
		</section>
	</div>
</section>

<?php if(false):?>
<a href="#all_posts" id="tap2allpost"><i class="fa fa-sort"></i></a>
<?php if (!empty($model['others'])):?>
<section class="row all_posts" id="all_posts">
	<div class="post_sizer"></div> <!--This is not a post-->
		
        <?php foreach ($model['others'] as $lst):?>
        
        <?php //if ($lst['theme'] == 1){?>
        <div class="col-sm-3 post post-1">
            <div class="row m0 inner">
                <div class="row m0 featured_img">
                    <a href="<?php echo Workflow::getLink($lst)?>">
                    <?php echo Html::img(Workflow::getUripreview([
		'width'=>538,
		'wartermark'=>'',
		'mediaId'=>$lst['thumbnail']]),['alt' => $lst['title']])?>
                    </a>
                </div>
                <div class="row m0 post_contents">
                	<?php if (false):?>
                	<?php if (!empty($lst['categoryId'])){?>
                    <div class="row m0 category politics">
                        <a href="#"><?php echo $lst['categoryId']?Workflow::$arrCategory[$lst['categoryId']]:''?></a>
                    </div>
                    <?php }?>
                    <?php endif;?>
                    <h3 class="post_title"><a href="<?php echo Workflow::getLink($lst)?>"><?php echo $lst['title']?></a></h3>
                    <p><?php echo $lst['abstract']?iconv_substr($lst['abstract'],0,60, "UTF-8")."...":'';?></p>
                    <hr>
                    <ul class="post_meta nav nav-pills">
                        <li><i class="fa fa-clock-o"></i> <i><?php echo DateUtil::th_date('j F Y, H:i น.', strtotime($lst['publishTime']))?></i></li>
                    </ul>                    
                </div>
            </div>
        </div>
        
        <?php if(false):?>
        <?php //}elseif ($lst['theme'] == 2){?>
        
        <div class="col-sm-3 post post-9">
            <div class="row m0 inner">
                <div class="row m0 featured_img">
                    <div class="owl-carousel post_dot_gallery">
                    	<?php echo Workflow::getThumbnailGallery($lst)?>
                    </div>
                </div>
                <div class="row m0 post_contents">
                	<?php if (false):?>
                	<?php if (!empty($lst['categoryId'])){?>
                    <div class="row m0 category world">
                        <a href="<?php echo Workflow::getLink($lst)?>"><?php echo $lst['categoryId']?Workflow::$arrCategory[$lst['categoryId']]:''?></a>
                    </div>
                    <?php }?>
                    <?php endif;?>
                    <h3 class="post_title">
                    	<a href="<?php echo Workflow::getLink($lst)?>"><?php echo $lst['title']?></a>
                    </h3>
                    <p><?php echo $lst['abstract']?iconv_substr($lst['abstract'],0,60, "UTF-8")."...":'';?></p>
                    <hr>
                    <ul class="post_meta nav nav-pills">
                        <li><i class="fa fa-clock-o"></i> <?php echo DateUtil::th_date('j F Y, H:i น.', strtotime($lst['publishTime']))?></li>
                    </ul>                    
                </div>
            </div>
        </div><!--Post-->
        <?php //}?>
        <?php endif;?>
        <?php endforeach;	?>

        
   
</section>  
<?php endif;?>
<?php endif;?>
