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
use yii\data\Pagination;

class TagsController extends Controller
{

    public function actionIndex()
    {
    	$q = Yii::$app->request->get('q');
    	$offset = Yii::$app->request->get('offset',0);
    	
    	$query = Contents::find();
    	$query->where(['like','tags',$q]);
    	$query->andWhere(['status'=>Workflow::STATUS_PUBLISHED]);
    	$query->andWhere(['<','publishTime',date('Y-m-d H:i:s',time())]);
    	$query->orderBy('publishTime desc');
    	
    	
    	$countQuery = clone $query;
    	$pages = new Pagination(['totalCount' => $countQuery->count()]);
    	$pages->setPageSize(5);

    	$models = $query->offset($offset)
    	->limit($pages->limit)
    	->all();
    	

    	$list = [];
    	foreach($models as $index => $model){
    		$list[$index] = $model->getAttributes()+['thumbnailPath'=>''];
    		
    		$media = Media::findOne([$model->thumbnail]);
    		if($media){
    			if($media->watermarkNo){
    				$arrPath = json_decode($media->thumbPath);
    				$list[$index]['thumbnailPath'] = $arrPath->{Workflow::SIZE_WATERMARK};
    			}else{
    				$arrPath = json_decode($media->thumbPath);
    				$list[$index]['thumbnailPath'] = $arrPath->{Workflow::SIZE_MID};
    			}
    		}
    	}

        return $this->render('index',[
        		'q'=>$q,
        		'list'=>$list,
        		'pages'=>$pages,
        		'offset'=>$offset
        ]);
    }
}
