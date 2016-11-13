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

class TagsController extends Controller
{

    public function actionIndex()
    {
        return $this->render('index');
    }
}
