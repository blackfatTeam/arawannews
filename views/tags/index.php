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
                    <?php echo Workflow::getThumbnail($model)?>
                </div>
                <div class="row m0 post_contents">
                    <div class="row m0 category politics">
                        <a href="javascript:;"><?php echo isset(Workflow::$arrCategory[$model->categoryId])?Workflow::$arrCategory[$model->categoryId]:''?></a>
                    </div>
                    <h3 class="post_title"><a href="<?php echo Workflow::getLink($model)?>"><?php echo $model->title?></a></h3>
                    <ul class="post_meta nav nav-pills">
                        <li><a href="javascript:;"><?php echo date(DateUtil::th_date('d M Y',strtotime($model->publishTime)))?></a></li>
                    </ul>                    
                </div>
            </div>
        </div><!--Post-->
        <?php }?>

        
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