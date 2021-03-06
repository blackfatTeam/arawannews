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
use app\models\Category;

class Sidebar extends Widget {
	public function run() {
				
		$web = 'bkk';
		$hotTopic = Hottopic::find()->where(['web'=>$web,'status'=>\app\lib\Workflow::HOTTOPIC_STATUS_PUBLISHED])->orderBy('orderNo asc')->all();
		
		$findCategory = Category::find();
		$findCategory->andWhere('active =:active', [':active' => 1]);
		$resultCategory = $findCategory->all();
		
		$arrCategory = [];
		if (!empty($resultCategory)){
			foreach ($resultCategory as $lst){
				$arrCategory[$lst->id] = [
						'id' => $lst->id,
						'title' => $lst->name?$lst->name:'',
						'titleEn' => $lst->nameEn?$lst->nameEn:'',
				];
			}
				
		}

		echo $this->render('sidebar',[
				'web'=>$web,
				'hotTopic'=>$hotTopic,
				'arrCategory' => $arrCategory
		]);
	}	
}

