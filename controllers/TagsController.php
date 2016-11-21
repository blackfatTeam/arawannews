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
    	$q = Yii::$app->request->get('q','');
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
    	
    	
        return $this->render('index',[
        		'q'=>$q,
        		'models'=>$models,
        		'pages'=>$pages,
        		'offset'=>$offset
        ]);
    }
}
