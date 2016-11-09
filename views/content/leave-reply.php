<?php
$baseUri = Yii::getAlias ( '@web' );
$baseUriCss = $baseUri . '/assets/theme';
?>
<div class="row m0 comment_form">
	<h3 class="heading">leave a reply</h3>
	<form action="#" class="row m0 commentForm">
		<div class="input-group">
			<input type="text" class="form-control" placeholder="Name"> <span
				class="input-group-addon"><i class="fa fa-user"></i></span>
		</div>
		<div class="input-group">
			<input type="email" class="form-control" placeholder="Email"> <span
				class="input-group-addon"><i class="fa fa-envelope"></i></span>
		</div>
		<div class="input-group">
			<input type="url" class="form-control" placeholder="Website"> <span
				class="input-group-addon"><i class="fa fa-globe"></i></span>
		</div>
		<div class="input-group">
			<textarea class="form-control" placeholder="Your Message"></textarea>
			<span class="input-group-addon"><i class="fa fa-pencil"></i></span>
		</div>
		<div class="row m0">
			<input type="checkbox" id="notify" class="hidden"> <label
				for="notify" class="notify">Notify me when new comments are posted.</label>
			<input type="submit" value="post a comment" class="btn">
		</div>
	</form>
</div>