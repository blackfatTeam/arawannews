<?php
namespace app\components;

use yii\base\Widget;

use app\lib\Conf;
use yii\helpers\Url;
use app\Auth;
use app\Workflow;
use app\OnlineConfig;
use app\controllers\ConfigController;
use app\models\Hottopic;

class Sidebar extends Widget {
	public function run() {
				
		$web = 'bkk';
		$hotTopic = Hottopic::find()->where(['web'=>$web,'status'=>\app\lib\Workflow::HOTTOPIC_STATUS_PUBLISHED])->orderBy('orderNo asc')->all();
		
		echo $this->render('sidebar',[
				'web'=>$web,
				'hotTopic'=>$hotTopic
		]);
	}	
}

