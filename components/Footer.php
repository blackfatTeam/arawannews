<?php
namespace app\components;

use yii\base\Widget;

use app\lib\Conf;
use yii\helpers\Url;
use app\Auth;
use app\OnlineConfig;
use app\models\Contents;
use app\models\Online;
use app\models\Category;
use app\lib\Workflow;
use app\controllers\ConfigController;

class Footer extends Widget {
	public function run() {
		$section = 'bkk';
		 
		$query = Online::find();
		$query->andWhere('web = :web', [':web' => $section]);
		$query->andWhere('section = :section', [':section' => 'home']);
		$arrOnline = $query->all();
		$currentTime = date('Y-m-d H:i:s');
		$model = [];
		if (!empty($arrOnline)){
		
			foreach ($arrOnline as $lst){
				$contents = null;
				
				$query = Contents::find();
				/* if ($lst->type == Workflow::TYPE_CONTENT){
					$query = Contents::find();
				}elseif ($lst->type == Workflow::TYPE_GALLARY){
					$query = Gallary::find();
				} */
				 
				$query->andWhere('id = :id', [':id' => $lst->contentId]);
				$query->andWhere('status = :status', [':status' => Workflow::STATUS_PUBLISHED]);
				$query->andWhere('publishTime <= :publishTime', [':publishTime' => $currentTime]);
				 
				$contents = $query->one();
				 
				if (!empty($contents)){
					if ($contents->status == Workflow::STATUS_PUBLISHED){
						$model[] = [
								'id' => $contents->id,
								'title' => $contents->title,
								'abstract' => $contents->abstract,
								'thumbnail' => $contents->thumbnail,
								'orderNo' => $lst->orderNo,
								'type' => $lst->type,
								'publishTime' => $contents->publishTime,
								'theme' => $contents->theme,
								'postTitle' => $contents->postTitle,
								'categoryId' => $contents->categoryId
						];
							
					}
				}
			}
		}
		
		$findCategory = Category::find();
		$findCategory->andWhere('active =:active', [':active' => 1]);
		$resultCategory = $findCategory->all();
		
		$arrCategory = [];
		if (!empty($resultCategory)){
			foreach ($resultCategory as $lst){
				$arrCategory[$lst->id] = $lst->name;
			}
		
		}
		
		echo $this->render('footer', [
				'model' => $model,
				'arrCategory' => $arrCategory
		]);
	}	
}

