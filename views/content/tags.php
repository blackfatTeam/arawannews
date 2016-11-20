<?php
$baseUri = Yii::getAlias ( '@web' );
$baseUriCss = $baseUri . '/assets/theme';
?>
<?php if (!empty($arrTags)):?>
<div class="row m0 post_tags">
	<h3 class="heading">tags</h3>
	<div class="tag_row">
		<?php foreach ($arrTags as $lst):?>
		<a href="#" class="tag"><?php echo $lst?></a>
		<?php endforeach;?>
	</div>
</div>
<?php endif;?>