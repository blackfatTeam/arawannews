<?php 
$baseUri = Yii::getAlias('@web');
$baseUriCss = $baseUri.'/assets/theme';
?>

<!-- last update -->
<?= yii\base\View::render('lastupdate', [

]); ?>


<!--Blog Section Here-->
<section class="row">
	<div class="container-fluid">
		<div class="row">
			<!--Single Blog Here-->
			<?= yii\base\View::render('single-blog', [

			]); ?>
			<!--Sidebar Here-->						
			<div class="col-sm-4 sidebar">
			
				<!--About Author-->
				<?= yii\base\View::render('about-author', [
	
				]); ?>				
				
				<!--Comments-->
				<?= yii\base\View::render('comment', [
	
				]); ?>	
				
				<!--leave reply-->
				<?= yii\base\View::render('leave-reply', [
	
				]); ?>
				
				<!--tags-->
				<?= yii\base\View::render('tags', [
	
				]); ?>
				
			</div>
			<!--Sidebar Here-->
		</div>
	</div>
</section>
<!--Blog Section Here-->
