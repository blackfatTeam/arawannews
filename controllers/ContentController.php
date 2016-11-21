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
use yii\helpers\Url;
use app\models\Relatecontent;
use yii\helpers\ArrayHelper;

class ContentController extends Controller
{

    public function actionIndex()
    {
    	$postTitle = \Yii::$app->request->get('postTitle');

    	$thumbnail = null;
    	$relateContent = [];
    	
    	$currentTime = date('Y-m-d H:i:s');
    	$query = Contents::find();
    	$query->andWhere('postTitle = :postTitle', [':postTitle' => $postTitle]);
    	$query->andWhere('status = :status', [':status' => Workflow::STATUS_PUBLISHED]);
    	$query->andWhere('publishTime <= :publishTime', [':publishTime' => $currentTime]);
    	$content = $query->one();
    	if (empty($content)) {
    		echo $this->redirect(Url::toRoute(['site/error']));
    	}
    	
    	$arrMedia = [];
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
    		
    		//ถ้าเป็น content gallery
    		if ($content->theme == 2){
    			$query = Media::find();
    			$query->andWhere('refId = :refId', [':refId' => $content->id]);
    			$query->andWhere('type = :type', [':type' => Workflow::TYPE_CONTENT]);
    			$query->orderBy('id ASC');
    			$arrMedia = $query->all();
    		}
    	}
    	$arrTags = [];
    	if (!empty($content->tags)){

    		$arrTags = explode(',', $content->tags);
    		if (empty($arrTags)){
    			$arrTags = [];
    		}
    	}

    	
        return $this->render('index',[
        		'content'=>$content,
        		'thumbnail'=>$thumbnail,
        		'relateContent'=>$relateContent,
        		'arrTags' => $arrTags,
        		'arrMedia' => $arrMedia
        ]);
    }
}
