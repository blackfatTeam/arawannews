<?php
namespace app\components;

use yii\base\Widget;

use app\lib\Conf;
use yii\helpers\Url;
use app\Auth;
use app\Workflow;
use app\OnlineConfig;
use app\controllers\ConfigController;

class Footer extends Widget {
	public function run() {
				
		echo $this->render('footer');
	}	
}

