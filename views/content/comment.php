<?php
$baseUri = Yii::getAlias('@web');
$baseUriCss = $baseUri.'/assets/theme';
?>
<?php if (!empty($relateContent)):?>
<div class="row m0 comments">
	<h3 class="heading">ข่าวที่เกี่ยวข้อง</h3>
	<div class="comments_row row m0">
		<?php foreach ($relateContent as $lst):?>
		<div class="media comment">
			<div class="media-left">
				<a href="#" class="comment_img"><img src="<?= $lst['thumbnail']?>" alt=""></a> 
			</div>
			<div class="media-body">
				<h4>
					<?php echo $lst['title']?>
				</h4>
				<p><?php echo $lst['abstract']?></p>
			</div>
		</div>
		<?php endforeach;?>
		
	</div>
</div>
<?php endif;?>