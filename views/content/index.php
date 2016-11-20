<?php 
$baseUri = Yii::getAlias('@web');
$baseUriCss = $baseUri.'/assets/theme';
?>
<style>
img{
	margin: 0 auto;
	max-width: 100%;
}
</style>
<!-- last update -->
<?php if(false):?>
<?php echo yii\base\View::render('lastupdate', [

]); ?>
<?php endif;?>
<!-- <section class="row special_projects" id="projects">
        <div class="media">
            <div class="media-left">special projects</div>
            <div class="media-body">
                <div class="col-sm-3 special_project special_project1">
                    <a href="#">World Humanitarian Day: voices from the field revisited</a>
                </div>
                <div class="col-sm-3 special_project special_project2">
                    <a href="#">Breaking news on 2016 year and interview with many people</a>
                </div>
                <div class="col-sm-3 special_project special_project3">
                    <a href="#">Forbes Billionaires: Full List Of Th Richest People In The World</a>
                </div>
                <div class="col-sm-3 special_project special_project4">
                    <a href="#">Most top places and the best apartments with AirBNB service</a>
                </div>
            </div>
        </div>
    </section> -->

<!--Blog Section Here-->
<section class="row" style="margin-top: 30px;">
	<div class="container-fluid">
		<div class="row">

			<?= yii\base\View::render('single-blog', [
        		'content'=>$content,
        		'thumbnail'=>$thumbnail,
				'relateContent'=>$relateContent
        ]);?>
			<!--Sidebar Here-->						
			<div class="col-sm-4 sidebar">
				
				<!--Comments-->
				<?= yii\base\View::render('about-author', [
	
				]); ?>	
				
				<!--Comments-->
				<?= yii\base\View::render('comment', [
					'relateContent'=>$relateContent
				]); ?>	
			
				<!--tags-->
				<?= yii\base\View::render('tags', [
					'arrTags' => $arrTags
				]); ?>
				
			</div>
			<!--Sidebar Here-->
		</div>
	</div>
</section>
<!--Blog Section Here-->
