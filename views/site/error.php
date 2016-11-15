<?php 
use app\lib\OnlineConfig;
$baseUri = Yii::getAlias('@web');
$baseUriCss = $baseUri.'/assets/theme';
?>
<section class="row content_404">
        <div class="col-sm-12 banner_404">
            <div class="inner row m0">
                <div class="notified_404 row m0">
                    <h2>404</h2>
                    <h3>page not found, check entered url, use search to find needed information</h3>
                </div>
                <div class="row m0 search_by_cat">
                    <h3 class="pull-left m0">Search by category:</h3>
                    <h4 class="category pull-left politics"><a href="#">politics</a></h4>
                    <h4 class="category pull-left sports"><a href="#">sports</a></h4>
                    <h4 class="category pull-left money"><a href="#">money</a></h4>
                    <h4 class="category pull-left world"><a href="#">world</a></h4>
                </div>
            </div>
        </div> <!--404-->
        
    </section>
    <!--404 Content Here-->