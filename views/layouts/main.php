<?php 
use yii\helpers\Html;
use app\components\Sidebar;
use app\components\Footer;


$baseUri = Yii::getAlias('@web');
$baseUriCss = $baseUri.'/assets/theme';

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
	<meta charset="<?= Yii::$app->charset ?>"/>
    <?= Html::csrfMetaTags() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?= Html::encode($this->title);?></title>
	<!--Favicons-->
    <link rel="apple-touch-icon" sizes="57x57" href="<?= $baseUriCss?>/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?= $baseUriCss?>/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?= $baseUriCss?>/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?= $baseUriCss?>/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?= $baseUriCss?>/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?= $baseUriCss?>/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?= $baseUriCss?>/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?= $baseUriCss?>/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?= $baseUriCss?>/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="<?= $baseUriCss?>/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= $baseUriCss?>/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?= $baseUriCss?>/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= $baseUriCss?>/favicon/favicon-16x16.png">
    <link rel="manifest" href="<?= $baseUriCss?>/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#e74c3c">
    <meta name="msapplication-TileImage" content="<?= $baseUriCss?>/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#e74c3c">
    
    <!--Bootstrap-->
    <link rel="stylesheet" href="<?= $baseUriCss?>/css/bootstrap.min.css">    
    
    <!-- Vendors -->
    <link rel="stylesheet" href="<?= $baseUriCss?>/vendors/owl.carousel/owl.carousel.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= $baseUriCss?>/css/magnific-popup.css">
    <link rel="stylesheet" href="<?= $baseUriCss?>/vendors/flexslider/flexslider.css">
    <link rel="stylesheet" href="<?= $baseUriCss?>/vendors/mCustomScrollbar/jquery.mCustomScrollbar.css">
    
    <!--Fonts-->
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    
    <!--Theme Styles-->
    <link rel="stylesheet" href="<?= $baseUriCss?>/css/default/style.css">
    <link rel="stylesheet" href="<?= $baseUriCss?>/css/responsive/responsive.css">
    <link rel="stylesheet" href="<?= $baseUri?>/assets/custom.css">
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<?php $this->head() ?>
</head>

<body class="home">
<?php $this->beginBody();?>

	<?= Sidebar::widget()?>
	<?= $content?>
	<?= Footer::widget()?>			
	
	<!--*****************************************************************************************************************-->
    <!--jQuery, Bootstrap and other vendor JS-->
    
    <!--jQuery-->
    <script src="<?= $baseUriCss?>/js/jquery-2.1.4.min.js"></script>
    
    <!--Show Date-->
    <script src="<?= $baseUriCss?>/js/date.js"></script>
        
    <!--Bootstrap JS-->
    <script src="<?= $baseUriCss?>/js/bootstrap.min.js"></script>
        
    <!--mCustom Scrollbar-->
    <script src="<?= $baseUriCss?>/vendors/mCustomScrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    
    <!--Owl Carousel-->
    <script src="<?= $baseUriCss?>/vendors/owl.carousel/owl.carousel.min.js"></script>
    
    <!--Counter Up-->
    <script src="<?= $baseUriCss?>/vendors/counterup/jquery.counterup.min.js"></script>
    
    <!--Waypoints-->
    <script src="<?= $baseUriCss?>/vendors/waypoints/waypoints.min.js"></script>
    
    <!--FlexSlider-->
    <script src="<?= $baseUriCss?>/vendors/flexslider/jquery.flexslider-min.js"></script>
    
    <!--Magnific Popup-->
    <script src="<?= $baseUriCss?>/js/jquery.magnific-popup.js"></script>
    
    <!--Instafeed-->
    <!-- <script src="<?= $baseUriCss?>/vendors/instafeed/instafeed.min.js"></script>  -->
    
    <!--ImageLoaded-->
    <script src="<?= $baseUriCss?>/vendors/imagesloaded/imagesloaded.pkgd.min.js"></script>
    
    <!--Isotope-->
    <script src="<?= $baseUriCss?>/vendors/isotope/isotope.min.js"></script>
    
    <!--Isotope-->
    <script src="<?= $baseUriCss?>/vendors/infinitescrol/jquery.infinitescroll.min.js"></script>
    
    <!--Theme JS-->
    <script src="<?= $baseUriCss?>/js/theme.js"></script>
    <script src="<?= $baseUriCss?>/js/infinite1.js"></script>
    <script>
    /* $( document ).ready(function() {
    	$('.scrollspyMenu').toggleClass('show');
        return false
    }); */

    </script>	
<?php $this->endBody() ?>
</body>
<!-- END BODY -->
</html>
<?php $this->endPage() ?>