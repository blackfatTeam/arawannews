<?php
use app\lib\DateUtil;

$baseUri = Yii::getAlias ( '@web' );
$baseUriCss = $baseUri . '/assets/theme';
?>
<!--Single Blog Here-->
<div class="col-sm-8 single-blog sticky content_col">
	<div class="row m0 inner">
		<div class="row m0 feature_img">
			<img src="<?php echo $thumbnail->fullPath?>" alt=""class="img-responsive">
		</div>
		<div class="post_inner row m0">
			<div class="row m0 category politics">
				<a href="#">politics</a>
				<div class="dropdown pull-right social_share_drop">
					<button type="button" data-toggle="dropdown" aria-haspopup="true"
						aria-expanded="false">
						<i class="fa fa-ellipsis-v"></i>
					</button>
					<ul class="dropdown-menu">
						<li><a href="#"><i class="fa fa-facebook"></i> Facebook</a></li>
						<li><a href="#"><i class="fa fa-twitter"></i> Twitter</a></li>
						<li><a href="#"><i class="fa fa-google-plus"></i> Google Plus</a></li>
						<li><a href="#"><i class="fa fa-pinterest"></i> Pinterest</a></li>
						<li><a href="#"><i class="fa fa-linkedin"></i> LinkedIn</a></li>
					</ul>
				</div>
				<ul class="post_meta nav nav-pills">
					<li><a href="#"><?php echo DateUtil::th_date('d M Y',strtotime($content->publishTime))?></a></li>
					<li><a href="#"><i class="fa fa-thumbs-o-up"></i>1456</a></li>
					<li><a href="#"><i class="fa fa-commenting"></i>32</a></li>
				</ul>
			</div>
			<h3 class="post_title"><?php echo $content->title?></h3>
			<div class="post_content row m0">
				<?php echo $content->content?>
			</div>
		</div>
		<div class="sticky_icon">
			<img src="<?= $baseUriCss?>/images/posts/sticky.png" alt="">
		</div>
	</div>
	<ul class="pager">
		<li class="previous">
			<div class="media">
				<div class="media-left">
					<a href="single-blog.html"><img
						src="<?= $baseUriCss?>/images/posts/pager1.jpg" alt=""></a>
				</div>
				<div class="media-body">
					<a href="#" class="prev_link"><i class="fa fa-angle-double-left"></i>Prev
						Post</a><br> <a href="#" class="post_link">no post here</a>
				</div>
			</div>
		</li>
		<li class="next">
			<div class="media">
				<div class="media-body">
					<a href="#" class="next_link">Next Post<i
						class="fa fa-angle-double-right"></i></a><br> <a
						href="single-blog.html" class="post_link">Autopsy: St. Louis man
						killed by police was shot in back</a>
				</div>
				<div class="media-right">
					<a href="single-blog.html"><img
						src="<?= $baseUriCss?>/images/posts/pager2.jpg" alt=""></a>
				</div>
			</div>
		</li>
	</ul>
	<div class="row m0 related_post_row">
		<div class="title_row row m0">
			<h3 class="fleft">related posts</h3>
			<div class="fright" id="related_post_dots"></div>
		</div>
		<div class="related_posts row m0">
			<div class="owl-carousel related_posts_carousel">
				<?php foreach ($relateContent as $item){?>
				<div class="item">
					<div class="featured_img row m0">
						<img src="<?= $item['thumbnail']?>" alt="">
							
					</div>
					<h3>
						<a href="#"><?php echo $item['title']?></a>
					</h3>
				</div>
				<?php }?>
			</div>
		</div>
	</div>
</div>
<!--Single Blog Here-->