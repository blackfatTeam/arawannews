<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\Contents;
use app\models\Media;
use app\lib\Workflow;
use app\models\Relatecontent;
use yii\helpers\ArrayHelper;
use app\models\Online;
use app\lib\OnlineConfig;

class CategoryController extends Controller
{

    public function actionIndex()
    {
    	$request = Yii::$app->request;
		$section = $request->post('section');
    	$web = 'bkk';
    	if (empty($section)){
    		$section = $request->get('section');
    	}
	
    	$sectionTitle = $section?OnlineConfig::$arrSection[$section]:'';

    	$query = Online::find();
    	$query->andWhere('web = :web', [':web' => $web]);
    	$query->andWhere('section = :section', [':section' => $section]);
    	$query->orderBy('orderNo ASC');
    	$arrOnline = $query->all();
    	
    	$model = [];
    	if (!empty($arrOnline)){

    		foreach ($arrOnline as $lst){
    			$contents = null;
    			if ($lst->type == Workflow::TYPE_CONTENT){
    				$contents = Contents::find()->where(['id'=>$lst->contentId])->one();
    			}elseif ($lst->type == Workflow::TYPE_GALLARY){
    				$contents = Gallary::find()->where(['id'=>$lst->contentId])->one();
    			}
    			
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
        return $this->render('index', [
        		'model' => $model,
        		'sectionTitle' => $sectionTitle
        ]);
    }
}
