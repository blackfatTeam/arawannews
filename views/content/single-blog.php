<?php
use app\lib\DateUtil;

$baseUri = Yii::getAlias ( '@web' );
$baseUriCss = $baseUri . '/assets/theme';
?>
<!--Single Blog Here-->
<div class="col-sm-8 single-blog sticky content_col">
	
	
	<div class="row m0 inner">
		
		<div class="post_inner row m0">
                            <div class="row m0 category politics">
                                <a href="#">politics</a>
                                <div class="dropdown pull-right social_share_drop">
                                    <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fa fa-ellipsis-v"></i>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a href="#"><i class="fa fa-facebook"></i> Facebook</a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i> Twitter</a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i> Google Plus</a></li>
                                    </ul>
                                </div>                                
                                <ul class="post_meta nav nav-pills">
                                    <li><i class="fa fa-calendar-check-o" aria-hidden="true"></i> เผยแพร่เมื่อ: <?php echo DateUtil::th_date('d M Y, H:i น.',strtotime($content->publishTime))?></li>
      
                                </ul>
                            </div>
                            <h3 class="post_title"><?php echo $content->title?></h3>
                            
                        </div>
		
		<div class="post_inner row m0">
			<div class="post_content row m0">
				<img src="<?php echo $thumbnail->fullPath?>" alt=""class="img-responsive">
				<?php echo $content->content?>
			</div>
		</div>
	</div>
	
	<!-- <div class="row m0 related_post_row">
		<div class="title_row row m0">
			<h3 class="fleft">ข่าวที่เกี่ยวข้อง</h3>
			<div class="fright" id="related_post_dots"></div>
		</div>
		<div class="related_posts row m0">
			<div class="owl-carousel related_posts_carousel">
				<?php //foreach ($relateContent as $item){?>
				<div class="item">
					<div class="featured_img row m0">
						<img src="<?php //echo $item['thumbnail']?>" alt="">
							
					</div>
					<h3>
						<a href="#"><?php //echo $item['title']?></a>
					</h3>
				</div>
				<?php //}?>
			</div>
		</div>
	</div> -->
</div>
<!--Single Blog Here-->