<?php
use app\lib\OnlineConfig;
$baseUri = Yii::getAlias('@web');
$baseUriCss = $baseUri.'/assets/theme';
?>
<div style="margin: 15px;">
	<h2>เจาะประเด็น</h2>
</div>
<hr>
<section class="row featured_posts featured_posts2">
        <div class="container-fluid">
            <div class="row" id="featured_posts2">
                <div class="col-sm-6 post">
                    <div class="row inner">
                        <img src="<?= $baseUriCss?>/images/posts/features/7.jpg" alt="" class="featured-img">
                        <div class="row m0 content">
                            <h4 class="category sports"><a href="#">sports</a></h4>
                            <h2 class="title"><a href="single-blog.html">Nullam vel sem. Pellentesque libero tortor, tincidunt et</a></h2>
                            <ul class="post_meta nav nav-pills">
                                <li><a href="#">August 6, 2015</a></li>
                                <li><a href="#"><i class="fa fa-thumbs-o-up"></i>1456</a></li>
                                <li><a href="#"><i class="fa fa-commenting"></i>32</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 post">
                    <div class="row inner">
                        <img src="<?= $baseUriCss?>/images/posts/features/8.jpg" alt="" class="featured-img">
                        <div class="row m0 content">
                            <h4 class="category sports"><a href="#">sports</a></h4>
                            <h2 class="title"><a href="single-blog.html">Etiam feugiat lorem non metus. Vestibulum dapibus nunc</a></h2>
                            <ul class="post_meta nav nav-pills">
                                <li><a href="#">August 6, 2015</a></li>
                                <li><a href="#"><i class="fa fa-thumbs-o-up"></i>1456</a></li>
                                <li><a href="#"><i class="fa fa-commenting"></i>32</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 post">
                    <div class="row inner">
                        <img src="<?= $baseUriCss?>/images/posts/features/8.jpg" alt="" class="featured-img">
                        <div class="row m0 content">
                            <h4 class="category sports"><a href="#">sports</a></h4>
                            <h2 class="title"><a href="single-blog.html">Etiam feugiat lorem non metus. Vestibulum dapibus nunc</a></h2>
                            <ul class="post_meta nav nav-pills">
                                <li><a href="#">August 6, 2015</a></li>
                                <li><a href="#"><i class="fa fa-thumbs-o-up"></i>1456</a></li>
                                <li><a href="#"><i class="fa fa-commenting"></i>32</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 post">
                    <div class="row inner">
                        <img src="<?= $baseUriCss?>/images/posts/features/8.jpg" alt="" class="featured-img">
                        <div class="row m0 content">
                            <h4 class="category sports"><a href="#">sports</a></h4>
                            <h2 class="title"><a href="single-blog.html">Etiam feugiat lorem non metus. Vestibulum dapibus nunc</a></h2>
                            <ul class="post_meta nav nav-pills">
                                <li><a href="#">August 6, 2015</a></li>
                                <li><a href="#"><i class="fa fa-thumbs-o-up"></i>1456</a></li>
                                <li><a href="#"><i class="fa fa-commenting"></i>32</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <!--Header 04-->
    
    <section class="row all_posts" id="all_posts">
	<div class="post_sizer"></div> <!--This is not a post-->

        <div class="col-sm-3 post post-1">
            <div class="row m0 inner">
                <div class="row m0 featured_img">
                    <a href="single-blog.html"><img src="<?= $baseUriCss?>/images/posts/3.jpg" alt=""></a>
                </div>
                <div class="row m0 post_contents">
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
                                <li><a href="#"><i class="fa fa-pinterest"></i> Pinterest</a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i> LinkedIn</a></li>
                            </ul>
                        </div>
                    </div>
                    <h3 class="post_title"><a href="#">what happend this week? take our weekly news quiz</a></h3>
                    <ul class="post_meta nav nav-pills">
                        <li><a href="#">August 6, 2015</a></li>
                    </ul>                    
                </div>
            </div>
        </div><!--Post-->
        
        <div class="col-sm-3 post post-9">
            <div class="row m0 inner">
                <div class="row m0 featured_img">
                    <div class="owl-carousel post_dot_gallery">
                        <div class="item"><img src="<?= $baseUriCss?>/images/posts/7.jpg" alt=""></div>
                        <div class="item"><img src="<?= $baseUriCss?>/images/posts/7.jpg" alt=""></div>
                        <div class="item"><img src="<?= $baseUriCss?>/images/posts/7.jpg" alt=""></div>
                        <div class="item"><img src="<?= $baseUriCss?>/images/posts/7.jpg" alt=""></div>
                    </div>
                </div>
                <div class="row m0 post_contents">
                    <div class="row m0 category world">
                        <a href="#">world</a>
                        <div class="dropdown pull-right social_share_drop">
                            <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                    </div>
                    <h3 class="post_title"><a href="#">Autopsy: St. Louis man killed by police was shot in back</a></h3>
                    <ul class="post_meta nav nav-pills">
                        <li><a href="#">August 6, 2015</a></li>
                         
                         
                    </ul>                    
                </div>
            </div>
        </div><!--Post-->
        
        <div class="col-sm-3 post post-1">
            <div class="row m0 inner">
                <div class="row m0 featured_img">
                    <a href="single-blog.html"><img src="<?= $baseUriCss?>/images/posts/3.jpg" alt=""></a>
                </div>
                <div class="row m0 post_contents">
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
                                <li><a href="#"><i class="fa fa-pinterest"></i> Pinterest</a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i> LinkedIn</a></li>
                            </ul>
                        </div>
                    </div>
                    <h3 class="post_title"><a href="#">what happend this week? take our weekly news quiz</a></h3>
                    <ul class="post_meta nav nav-pills">
                        <li><a href="#">August 6, 2015</a></li>
                    </ul>                    
                </div>
            </div>
        </div><!--Post-->
        
        <div class="col-sm-3 post post-9">
            <div class="row m0 inner">
                <div class="row m0 featured_img">
                    <div class="owl-carousel post_dot_gallery">
                        <div class="item"><img src="<?= $baseUriCss?>/images/posts/7.jpg" alt=""></div>
                        <div class="item"><img src="<?= $baseUriCss?>/images/posts/7.jpg" alt=""></div>
                        <div class="item"><img src="<?= $baseUriCss?>/images/posts/7.jpg" alt=""></div>
                        <div class="item"><img src="<?= $baseUriCss?>/images/posts/7.jpg" alt=""></div>
                    </div>
                </div>
                <div class="row m0 post_contents">
                    <div class="row m0 category world">
                        <a href="#">world</a>
                        <div class="dropdown pull-right social_share_drop">
                            <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                    </div>
                    <h3 class="post_title"><a href="#">Autopsy: St. Louis man killed by police was shot in back</a></h3>
                    <ul class="post_meta nav nav-pills">
                        <li><a href="#">August 6, 2015</a></li>
                         
                         
                    </ul>                    
                </div>
            </div>
        </div><!--Post-->
        
        <div class="col-sm-3 post post-1">
            <div class="row m0 inner">
                <div class="row m0 featured_img">
                    <a href="single-blog.html"><img src="<?= $baseUriCss?>/images/posts/3.jpg" alt=""></a>
                </div>
                <div class="row m0 post_contents">
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
                                <li><a href="#"><i class="fa fa-pinterest"></i> Pinterest</a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i> LinkedIn</a></li>
                            </ul>
                        </div>
                    </div>
                    <h3 class="post_title"><a href="#">what happend this week? take our weekly news quiz</a></h3>
                    <ul class="post_meta nav nav-pills">
                        <li><a href="#">August 6, 2015</a></li>
                    </ul>                    
                </div>
            </div>
        </div><!--Post-->
        
        <div class="col-sm-3 post post-9">
            <div class="row m0 inner">
                <div class="row m0 featured_img">
                    <div class="owl-carousel post_dot_gallery">
                        <div class="item"><img src="<?= $baseUriCss?>/images/posts/7.jpg" alt=""></div>
                        <div class="item"><img src="<?= $baseUriCss?>/images/posts/7.jpg" alt=""></div>
                        <div class="item"><img src="<?= $baseUriCss?>/images/posts/7.jpg" alt=""></div>
                        <div class="item"><img src="<?= $baseUriCss?>/images/posts/7.jpg" alt=""></div>
                    </div>
                </div>
                <div class="row m0 post_contents">
                    <div class="row m0 category world">
                        <a href="#">world</a>
                        <div class="dropdown pull-right social_share_drop">
                            <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                    </div>
                    <h3 class="post_title"><a href="#">Autopsy: St. Louis man killed by police was shot in back</a></h3>
                    <ul class="post_meta nav nav-pills">
                        <li><a href="#">August 6, 2015</a></li>
                         
                         
                    </ul>                    
                </div>
            </div>
        </div><!--Post-->
        
        <div class="col-sm-3 post post-1">
            <div class="row m0 inner">
                <div class="row m0 featured_img">
                    <a href="single-blog.html"><img src="<?= $baseUriCss?>/images/posts/3.jpg" alt=""></a>
                </div>
                <div class="row m0 post_contents">
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
                                <li><a href="#"><i class="fa fa-pinterest"></i> Pinterest</a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i> LinkedIn</a></li>
                            </ul>
                        </div>
                    </div>
                    <h3 class="post_title"><a href="#">what happend this week? take our weekly news quiz</a></h3>
                    <ul class="post_meta nav nav-pills">
                        <li><a href="#">August 6, 2015</a></li>
                    </ul>                    
                </div>
            </div>
        </div><!--Post-->
        
        <div class="col-sm-3 post post-9">
            <div class="row m0 inner">
                <div class="row m0 featured_img">
                    <div class="owl-carousel post_dot_gallery">
                        <div class="item"><img src="<?= $baseUriCss?>/images/posts/7.jpg" alt=""></div>
                        <div class="item"><img src="<?= $baseUriCss?>/images/posts/7.jpg" alt=""></div>
                        <div class="item"><img src="<?= $baseUriCss?>/images/posts/7.jpg" alt=""></div>
                        <div class="item"><img src="<?= $baseUriCss?>/images/posts/7.jpg" alt=""></div>
                    </div>
                </div>
                <div class="row m0 post_contents">
                    <div class="row m0 category world">
                        <a href="#">world</a>
                        <div class="dropdown pull-right social_share_drop">
                            <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                    </div>
                    <h3 class="post_title"><a href="#">Autopsy: St. Louis man killed by police was shot in back</a></h3>
                    <ul class="post_meta nav nav-pills">
                        <li><a href="#">August 6, 2015</a></li>
                         
                         
                    </ul>                    
                </div>
            </div>
        </div><!--Post-->
        
        <div class="col-sm-3 post post-1">
            <div class="row m0 inner">
                <div class="row m0 featured_img">
                    <a href="single-blog.html"><img src="<?= $baseUriCss?>/images/posts/3.jpg" alt=""></a>
                </div>
                <div class="row m0 post_contents">
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
                                <li><a href="#"><i class="fa fa-pinterest"></i> Pinterest</a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i> LinkedIn</a></li>
                            </ul>
                        </div>
                    </div>
                    <h3 class="post_title"><a href="#">what happend this week? take our weekly news quiz</a></h3>
                    <ul class="post_meta nav nav-pills">
                        <li><a href="#">August 6, 2015</a></li>
                    </ul>                    
                </div>
            </div>
        </div><!--Post-->
        
        <div class="col-sm-3 post post-9">
            <div class="row m0 inner">
                <div class="row m0 featured_img">
                    <div class="owl-carousel post_dot_gallery">
                        <div class="item"><img src="<?= $baseUriCss?>/images/posts/7.jpg" alt=""></div>
                        <div class="item"><img src="<?= $baseUriCss?>/images/posts/7.jpg" alt=""></div>
                        <div class="item"><img src="<?= $baseUriCss?>/images/posts/7.jpg" alt=""></div>
                        <div class="item"><img src="<?= $baseUriCss?>/images/posts/7.jpg" alt=""></div>
                    </div>
                </div>
                <div class="row m0 post_contents">
                    <div class="row m0 category world">
                        <a href="#">world</a>
                        <div class="dropdown pull-right social_share_drop">
                            <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                    </div>
                    <h3 class="post_title"><a href="#">Autopsy: St. Louis man killed by police was shot in back</a></h3>
                    <ul class="post_meta nav nav-pills">
                        <li><a href="#">August 6, 2015</a></li>
                         
                         
                    </ul>                    
                </div>
            </div>
        </div><!--Post-->
        
        <div class="col-sm-3 post post-1">
            <div class="row m0 inner">
                <div class="row m0 featured_img">
                    <a href="single-blog.html"><img src="<?= $baseUriCss?>/images/posts/3.jpg" alt=""></a>
                </div>
                <div class="row m0 post_contents">
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
                                <li><a href="#"><i class="fa fa-pinterest"></i> Pinterest</a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i> LinkedIn</a></li>
                            </ul>
                        </div>
                    </div>
                    <h3 class="post_title"><a href="#">what happend this week? take our weekly news quiz</a></h3>
                    <ul class="post_meta nav nav-pills">
                        <li><a href="#">August 6, 2015</a></li>
                    </ul>                    
                </div>
            </div>
        </div><!--Post-->
        
        <div class="col-sm-3 post post-9">
            <div class="row m0 inner">
                <div class="row m0 featured_img">
                    <div class="owl-carousel post_dot_gallery">
                        <div class="item"><img src="<?= $baseUriCss?>/images/posts/7.jpg" alt=""></div>
                        <div class="item"><img src="<?= $baseUriCss?>/images/posts/7.jpg" alt=""></div>
                        <div class="item"><img src="<?= $baseUriCss?>/images/posts/7.jpg" alt=""></div>
                        <div class="item"><img src="<?= $baseUriCss?>/images/posts/7.jpg" alt=""></div>
                    </div>
                </div>
                <div class="row m0 post_contents">
                    <div class="row m0 category world">
                        <a href="#">world</a>
                        <div class="dropdown pull-right social_share_drop">
                            <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                    </div>
                    <h3 class="post_title"><a href="#">Autopsy: St. Louis man killed by police was shot in back</a></h3>
                    <ul class="post_meta nav nav-pills">
                        <li><a href="#">August 6, 2015</a></li>
                    </ul>                    
                </div>
            </div>
        </div><!--Post-->
        
   
</section>