<?php 

use yii\bootstrap\Html;
use app\lib\Workflow;

?>

<?php echo Html::img(Workflow::getUripreview([
		'width'=>300,
		'height'=>300,
		'wartermark'=>Workflow::WATER_MARK_1,
		'mediaId'=>4]),['class'=>'img-responsive'])?>