<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\Contents;
use app\models\Media;
use app\lib\Workflow;
use app\models\Relatecontent;
use yii\helpers\ArrayHelper;

class ContentController extends Controller
{

    public function actionIndex()
    {
    	$id = \Yii::$app->request->get('id');
    	$id = 1;
    	$thumbnail = null;
    	$relateContent = [];
    	$content = Contents::findOne($id);
    	if($content){
    		$thumbnail = Media::findOne([$content->thumbnail]);
    		$models = Relatecontent::find()->where(['contentId'=>$content->id,'type'=>Workflow::TYPE_CONTENT])->all();
    		$arrId = ArrayHelper::map($models, 'id', 'relateId');

    		$models = Contents::find()->where(['in','id',$arrId])->all();
    		foreach ($models as $model){
    			$modelThumb = Media::findOne([$model->thumbnail]);
    			$arrPath = json_decode($modelThumb->thumbPath);
    			
    			$relateContent[$model->id] = [
    					'id'=>$model->id,
    					'title'=>$model->title,
    					'abstract'=>$model->abstract,
    					'thumbnail'=>$arrPath->{Workflow::SIZE_LIT}
    			];
    		}
    	}

        return $this->render('index',[
        		'content'=>$content,
        		'thumbnail'=>$thumbnail,
        		'relateContent'=>$relateContent
        ]);
    }
}
