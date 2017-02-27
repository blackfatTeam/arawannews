<?php
use app\lib\OnlineConfig;
use app\lib\DateUtil;
use app\lib\Workflow;
use yii\bootstrap\Html;
$baseUri = Yii::getAlias('@web');
$baseUriCss = $baseUri.'/assets/theme';
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
<?php if (!empty($model[OnlineConfig::ONLINE_HOME])):?>
<section class="row featured_posts">
	<div class="container-fluid">

		<div class="row">
			<div class="col-lg-6 col-md-6 post">
				<?php $arrModel = array_splice($model[OnlineConfig::ONLINE_HOME], 0 ,1);?>
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
				<?php $arrModel = array_splice($model[OnlineConfig::ONLINE_HOME], 0 ,1);?>
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
				<?php $arrModel = array_splice($model[OnlineConfig::ONLINE_HOME], 0 ,1);?>
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
				<?php $arrModel = array_splice($model[OnlineConfig::ONLINE_HOME], 0 ,1);?>
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



<section class="row featured_posts">
	<div class="container-fluid">
		<section>
			<div class="row headline">เจาะประเด็น</div>
			<div class="row">
				<?php for ($i=1;$i<=4;$i++){?>
				<div class="col-lg-3 col-md-3 post">
				<div class="blog-data">
						<a href="#" style="z-index: 2;">
							<img src="http://localhost/arawannews/web/media/genmedia?w=400&h=400&wtm=0&mId=10" class="featured-img"/>
						</a>
						<div class="content-detail">
							<h3>เปิดตัวสมาร์ทโฟนรุ่นล่าสุดจากตระกูล Z SERIES</h3>
							<span>ปัจจุบันวิวัฒนาการความงามก้าวไกลไปค่อนข้างมาก โดยเฉพาะนวัตกรรม</span>
						</div>
					</div>
				</div>
				<?php }?>
			</div>
		</section>
	</div>
</section>

<section class="row featured_posts">
	<div class="container-fluid">
		<div class="blog-data">
			<div class="col-lg-3 col-md-3">
				<div class="row headline">การเมือง</div>
				<div class="post">
					<div class="blog-data">
						<a href="#" style="z-index: 2;">
							<img src="http://localhost/arawannews/web/media/genmedia?w=400&h=400&wtm=0&mId=10" class="featured-img"/>
						</a>
						<div class="content-detail">
							<h3>เปิดตัวสมาร์ทโฟนรุ่นล่าสุดจากตระกูล Z SERIES</h3>
							<span>ปัจจุบันวิวัฒนาการความงามก้าวไกลไปค่อนข้างมาก โดยเฉพาะนวัตกรรม</span>
						</div>
					</div>
				</div>
				<div class="post post-secondary">
					<div class="blog-data">
						<div class="content-detail">
							<a href="#">เปิดตัวสมาร์ทโฟนรุ่นล่าสุดจากตระกูล Z SERIES</a>
						</div>
					</div>
				</div>
				<div class="post post-secondary">
					<div class="blog-data">
						<div class="content-detail">
							<a href="#">เปิดตัวสมาร์ทโฟนรุ่นล่าสุดจากตระกูล Z SERIES</a>
						</div>
					</div>
				</div>
				<div class="post post-secondary">
					<div class="blog-data">
						<div class="content-detail">
							<a href="#">เปิดตัวสมาร์ทโฟนรุ่นล่าสุดจากตระกูล Z SERIES</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-3">
				<div class="row headline">เศรษฐกิจ</div>
				<div class="post">
					<div class="blog-data">
						<a href="#" style="z-index: 2;">
							<img src="http://localhost/arawannews/web/media/genmedia?w=400&h=400&wtm=0&mId=10" class="featured-img"/>
						</a>
						<div class="content-detail">
							<h3>เปิดตัวสมาร์ทโฟนรุ่นล่าสุดจากตระกูล Z SERIES</h3>
							<span>ปัจจุบันวิวัฒนาการความงามก้าวไกลไปค่อนข้างมาก โดยเฉพาะนวัตกรรม</span>
						</div>
					</div>
				</div>
				<div class="post post-secondary">
					<div class="blog-data">
						<div class="content-detail">
							<a href="#">เปิดตัวสมาร์ทโฟนรุ่นล่าสุดจากตระกูล Z SERIES</a>
						</div>
					</div>
				</div>
				<div class="post post-secondary">
					<div class="blog-data">
						<div class="content-detail">
							<a href="#">เปิดตัวสมาร์ทโฟนรุ่นล่าสุดจากตระกูล Z SERIES</a>
						</div>
					</div>
				</div>
				<div class="post post-secondary">
					<div class="blog-data">
						<div class="content-detail">
							<a href="#">เปิดตัวสมาร์ทโฟนรุ่นล่าสุดจากตระกูล Z SERIES</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-3">
				<div class="row headline">อาชญากรรม</div>
				<div class="post">
					<div class="blog-data">
						<a href="#" style="z-index: 2;">
							<img src="http://localhost/arawannews/web/media/genmedia?w=400&h=400&wtm=0&mId=10" class="featured-img"/>
						</a>
						<div class="content-detail">
							<h3>เปิดตัวสมาร์ทโฟนรุ่นล่าสุดจากตระกูล Z SERIES</h3>
							<span>ปัจจุบันวิวัฒนาการความงามก้าวไกลไปค่อนข้างมาก โดยเฉพาะนวัตกรรม</span>
						</div>
					</div>
				</div>
				<div class="post post-secondary">
					<div class="blog-data">
						<div class="content-detail">
							<a href="#">เปิดตัวสมาร์ทโฟนรุ่นล่าสุดจากตระกูล Z SERIES</a>
						</div>
					</div>
				</div>
				<div class="post post-secondary">
					<div class="blog-data">
						<div class="content-detail">
							<a href="#">เปิดตัวสมาร์ทโฟนรุ่นล่าสุดจากตระกูล Z SERIES</a>
						</div>
					</div>
				</div>
				<div class="post post-secondary">
					<div class="blog-data">
						<div class="content-detail">
							<a href="#">เปิดตัวสมาร์ทโฟนรุ่นล่าสุดจากตระกูล Z SERIES</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-3">
				<div class="row headline">ต่างประเทศ</div>
				<div class="post">
					<div class="blog-data">
						<a href="#" style="z-index: 2;">
							<img src="http://localhost/arawannews/web/media/genmedia?w=400&h=400&wtm=0&mId=10" class="featured-img"/>
						</a>
						<div class="content-detail">
							<h3>เปิดตัวสมาร์ทโฟนรุ่นล่าสุดจากตระกูล Z SERIES</h3>
							<span>ปัจจุบันวิวัฒนาการความงามก้าวไกลไปค่อนข้างมาก โดยเฉพาะนวัตกรรม</span>
						</div>
					</div>
				</div>
				<div class="post post-secondary">
					<div class="blog-data">
						<div class="content-detail">
							<a href="#">เปิดตัวสมาร์ทโฟนรุ่นล่าสุดจากตระกูล Z SERIES</a>
						</div>
					</div>
				</div>
				<div class="post post-secondary">
					<div class="blog-data">
						<div class="content-detail">
							<a href="#">เปิดตัวสมาร์ทโฟนรุ่นล่าสุดจากตระกูล Z SERIES</a>
						</div>
					</div>
				</div>
				<div class="post post-secondary">
					<div class="blog-data">
						<div class="content-detail">
							<a href="#">เปิดตัวสมาร์ทโฟนรุ่นล่าสุดจากตระกูล Z SERIES</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="row featured_posts">
	<div class="container-fluid">
		<div class="blog-data">
			<div class="col-lg-3 col-md-3">
				<div class="row headline">พระราชสำนัก</div>
				<div class="post">
					<div class="blog-data">
						<a href="#" style="z-index: 2;">
							<img src="http://localhost/arawannews/web/media/genmedia?w=400&h=400&wtm=0&mId=10" class="featured-img"/>
						</a>
						<div class="content-detail">
							<h3>เปิดตัวสมาร์ทโฟนรุ่นล่าสุดจากตระกูล Z SERIES</h3>
							<span>ปัจจุบันวิวัฒนาการความงามก้าวไกลไปค่อนข้างมาก โดยเฉพาะนวัตกรรม</span>
						</div>
					</div>
				</div>
				<div class="post post-secondary">
					<div class="blog-data">
						<div class="content-detail">
							<a href="#">เปิดตัวสมาร์ทโฟนรุ่นล่าสุดจากตระกูล Z SERIES</a>
						</div>
					</div>
				</div>
				<div class="post post-secondary">
					<div class="blog-data">
						<div class="content-detail">
							<a href="#">เปิดตัวสมาร์ทโฟนรุ่นล่าสุดจากตระกูล Z SERIES</a>
						</div>
					</div>
				</div>
				<div class="post post-secondary">
					<div class="blog-data">
						<div class="content-detail">
							<a href="#">เปิดตัวสมาร์ทโฟนรุ่นล่าสุดจากตระกูล Z SERIES</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-3">
				<div class="row headline">กีฬา</div>
				<div class="post">
					<div class="blog-data">
						<a href="#" style="z-index: 2;">
							<img src="http://localhost/arawannews/web/media/genmedia?w=400&h=400&wtm=0&mId=10" class="featured-img"/>
						</a>
						<div class="content-detail">
							<h3>เปิดตัวสมาร์ทโฟนรุ่นล่าสุดจากตระกูล Z SERIES</h3>
							<span>ปัจจุบันวิวัฒนาการความงามก้าวไกลไปค่อนข้างมาก โดยเฉพาะนวัตกรรม</span>
						</div>
					</div>
				</div>
				<div class="post post-secondary">
					<div class="blog-data">
						<div class="content-detail">
							<a href="#">เปิดตัวสมาร์ทโฟนรุ่นล่าสุดจากตระกูล Z SERIES</a>
						</div>
					</div>
				</div>
				<div class="post post-secondary">
					<div class="blog-data">
						<div class="content-detail">
							<a href="#">เปิดตัวสมาร์ทโฟนรุ่นล่าสุดจากตระกูล Z SERIES</a>
						</div>
					</div>
				</div>
				<div class="post post-secondary">
					<div class="blog-data">
						<div class="content-detail">
							<a href="#">เปิดตัวสมาร์ทโฟนรุ่นล่าสุดจากตระกูล Z SERIES</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-3">
				<div class="row headline">บันเทิง</div>
				<div class="post">
					<div class="blog-data">
						<a href="#" style="z-index: 2;">
							<img src="http://localhost/arawannews/web/media/genmedia?w=400&h=400&wtm=0&mId=10" class="featured-img"/>
						</a>
						<div class="content-detail">
							<h3>เปิดตัวสมาร์ทโฟนรุ่นล่าสุดจากตระกูล Z SERIES</h3>
							<span>ปัจจุบันวิวัฒนาการความงามก้าวไกลไปค่อนข้างมาก โดยเฉพาะนวัตกรรม</span>
						</div>
					</div>
				</div>
				<div class="post post-secondary">
					<div class="blog-data">
						<div class="content-detail">
							<a href="#">เปิดตัวสมาร์ทโฟนรุ่นล่าสุดจากตระกูล Z SERIES</a>
						</div>
					</div>
				</div>
				<div class="post post-secondary">
					<div class="blog-data">
						<div class="content-detail">
							<a href="#">เปิดตัวสมาร์ทโฟนรุ่นล่าสุดจากตระกูล Z SERIES</a>
						</div>
					</div>
				</div>
				<div class="post post-secondary">
					<div class="blog-data">
						<div class="content-detail">
							<a href="#">เปิดตัวสมาร์ทโฟนรุ่นล่าสุดจากตระกูล Z SERIES</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-3">
				<div class="row headline">ภูมิภาค</div>
				<div class="post">
					<div class="blog-data">
						<a href="#" style="z-index: 2;">
							<img src="http://localhost/arawannews/web/media/genmedia?w=400&h=400&wtm=0&mId=10" class="featured-img"/>
						</a>
						<div class="content-detail">
							<h3>เปิดตัวสมาร์ทโฟนรุ่นล่าสุดจากตระกูล Z SERIES</h3>
							<span>ปัจจุบันวิวัฒนาการความงามก้าวไกลไปค่อนข้างมาก โดยเฉพาะนวัตกรรม</span>
						</div>
					</div>
				</div>
				<div class="post post-secondary">
					<div class="blog-data">
						<div class="content-detail">
							<a href="#">เปิดตัวสมาร์ทโฟนรุ่นล่าสุดจากตระกูล Z SERIES</a>
						</div>
					</div>
				</div>
				<div class="post post-secondary">
					<div class="blog-data">
						<div class="content-detail">
							<a href="#">เปิดตัวสมาร์ทโฟนรุ่นล่าสุดจากตระกูล Z SERIES</a>
						</div>
					</div>
				</div>
				<div class="post post-secondary">
					<div class="blog-data">
						<div class="content-detail">
							<a href="#">เปิดตัวสมาร์ทโฟนรุ่นล่าสุดจากตระกูล Z SERIES</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="row featured_posts">
	<div class="container-fluid">
		<div class="blog-data">
			<div class="col-lg-3 col-md-3">
				<div class="row headline">วัฒนธรรม</div>
				<div class="post">
					<div class="blog-data">
						<a href="#" style="z-index: 2;">
							<img src="http://localhost/arawannews/web/media/genmedia?w=400&h=400&wtm=0&mId=10" class="featured-img"/>
						</a>
						<div class="content-detail">
							<h3>เปิดตัวสมาร์ทโฟนรุ่นล่าสุดจากตระกูล Z SERIES</h3>
							<span>ปัจจุบันวิวัฒนาการความงามก้าวไกลไปค่อนข้างมาก โดยเฉพาะนวัตกรรม</span>
						</div>
					</div>
				</div>
				<div class="post post-secondary">
					<div class="blog-data">
						<div class="content-detail">
							<a href="#">เปิดตัวสมาร์ทโฟนรุ่นล่าสุดจากตระกูล Z SERIES</a>
						</div>
					</div>
				</div>
				<div class="post post-secondary">
					<div class="blog-data">
						<div class="content-detail">
							<a href="#">เปิดตัวสมาร์ทโฟนรุ่นล่าสุดจากตระกูล Z SERIES</a>
						</div>
					</div>
				</div>
				<div class="post post-secondary">
					<div class="blog-data">
						<div class="content-detail">
							<a href="#">เปิดตัวสมาร์ทโฟนรุ่นล่าสุดจากตระกูล Z SERIES</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-3">
				<div class="row headline">ไอที-นวัตกรรม</div>
				<div class="post">
					<div class="blog-data">
						<a href="#" style="z-index: 2;">
							<img src="http://localhost/arawannews/web/media/genmedia?w=400&h=400&wtm=0&mId=10" class="featured-img"/>
						</a>
						<div class="content-detail">
							<h3>เปิดตัวสมาร์ทโฟนรุ่นล่าสุดจากตระกูล Z SERIES</h3>
							<span>ปัจจุบันวิวัฒนาการความงามก้าวไกลไปค่อนข้างมาก โดยเฉพาะนวัตกรรม</span>
						</div>
					</div>
				</div>
				<div class="post post-secondary">
					<div class="blog-data">
						<div class="content-detail">
							<a href="#">เปิดตัวสมาร์ทโฟนรุ่นล่าสุดจากตระกูล Z SERIES</a>
						</div>
					</div>
				</div>
				<div class="post post-secondary">
					<div class="blog-data">
						<div class="content-detail">
							<a href="#">เปิดตัวสมาร์ทโฟนรุ่นล่าสุดจากตระกูล Z SERIES</a>
						</div>
					</div>
				</div>
				<div class="post post-secondary">
					<div class="blog-data">
						<div class="content-detail">
							<a href="#">เปิดตัวสมาร์ทโฟนรุ่นล่าสุดจากตระกูล Z SERIES</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-3">
				<div class="row headline">นวัตกรรม</div>
				<div class="post">
					<div class="blog-data">
						<a href="#" style="z-index: 2;">
							<img src="http://localhost/arawannews/web/media/genmedia?w=400&h=400&wtm=0&mId=10" class="featured-img"/>
						</a>
						<div class="content-detail">
							<h3>เปิดตัวสมาร์ทโฟนรุ่นล่าสุดจากตระกูล Z SERIES</h3>
							<span>ปัจจุบันวิวัฒนาการความงามก้าวไกลไปค่อนข้างมาก โดยเฉพาะนวัตกรรม</span>
						</div>
					</div>
				</div>
				<div class="post post-secondary">
					<div class="blog-data">
						<div class="content-detail">
							<a href="#">เปิดตัวสมาร์ทโฟนรุ่นล่าสุดจากตระกูล Z SERIES</a>
						</div>
					</div>
				</div>
				<div class="post post-secondary">
					<div class="blog-data">
						<div class="content-detail">
							<a href="#">เปิดตัวสมาร์ทโฟนรุ่นล่าสุดจากตระกูล Z SERIES</a>
						</div>
					</div>
				</div>
				<div class="post post-secondary">
					<div class="blog-data">
						<div class="content-detail">
							<a href="#">เปิดตัวสมาร์ทโฟนรุ่นล่าสุดจากตระกูล Z SERIES</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-3">
				<div class="row headline">สุขภาพ</div>
				<div class="post">
					<div class="blog-data">
						<a href="#" style="z-index: 2;">
							<img src="http://localhost/arawannews/web/media/genmedia?w=400&h=400&wtm=0&mId=10" class="featured-img"/>
						</a>
						<div class="content-detail">
							<h3>เปิดตัวสมาร์ทโฟนรุ่นล่าสุดจากตระกูล Z SERIES</h3>
							<span>ปัจจุบันวิวัฒนาการความงามก้าวไกลไปค่อนข้างมาก โดยเฉพาะนวัตกรรม</span>
						</div>
					</div>
				</div>
				<div class="post post-secondary">
					<div class="blog-data">
						<div class="content-detail">
							<a href="#">เปิดตัวสมาร์ทโฟนรุ่นล่าสุดจากตระกูล Z SERIES</a>
						</div>
					</div>
				</div>
				<div class="post post-secondary">
					<div class="blog-data">
						<div class="content-detail">
							<a href="#">เปิดตัวสมาร์ทโฟนรุ่นล่าสุดจากตระกูล Z SERIES</a>
						</div>
					</div>
				</div>
				<div class="post post-secondary">
					<div class="blog-data">
						<div class="content-detail">
							<a href="#">เปิดตัวสมาร์ทโฟนรุ่นล่าสุดจากตระกูล Z SERIES</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="row featured_posts">
	<div class="container-fluid">
		<section>
			<div class="row headline">สกู๊ปพิเศษ</div>
			<div class="row">
				<?php for ($i=1;$i<=4;$i++){?>
				<div class="col-lg-3 col-md-3 post">
				<div class="row inner" style="position: relative;">
					<div class="second-header"><a href="#">การเมือง</a></div>
					<a href="#" style="z-index: 2;">
					<img src="http://localhost/arawannews/web/media/genmedia?w=400&h=400&wtm=0&mId=10" class="featured-img">
					
					<div class="row m0 content">
						<h2 class="title">
							<a class="dropShadow" href="#">ทดสอบระบบการกรอกข่าว</a>
						</h2>
					</div>
					</a>
				</div>
				
					
				</div>
				<?php }?>
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
<?php if(false):?>
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
					<a class="linkTitleWhite" href="<?php echo Workflow::getLink($lst)?>"><?php echo $lst['title']?></a>
				</div>
				<br>
                 <p class="linkAbstractWhite"><?php echo $lst['abstract']?iconv_substr($lst['abstract'],0,60, "UTF-8")."...":'';?></p>
                </div>
				<?php endforeach;?>
            </div>
        </div>
    </section>
    <?php endif;?>
 <?php endif;?>
    <!--Popular Videos Here-->