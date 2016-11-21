<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\Media;
use app\lib\Workflow;


class MediaController extends Controller
{

	public function actionTest(){
		return $this->render('test');
	}
	public function actionGenmedia(){
	
		$w = \Yii::$app->request->get('w');
		$h = \Yii::$app->request->get('h');
		$wtm = \Yii::$app->request->get('wtm');
		$mId = \Yii::$app->request->get('mId');
	
		$mediaId = $mId;
		$watermark = $wtm;
		$width =  $w;
		$height = $h;
	
	
		$media = Media::find()->where(['id'=>$mediaId])->one();
	
		if($media){
			$arrpathath = json_decode($media->srcPath);
			$originPath = $arrpathath->{'origin'};
	
			$image = Yii::$app->image->load($originPath);
	
	
			if(!empty($width)&&!empty($height)){
				$image->resize($width,$height,\yii\image\drivers\Image::CROP);
			}elseif(!empty($width)){
				$image->resize($width,$height,\yii\image\drivers\Image::WIDTH);
			}elseif(!empty($height)){
				$image->resize($width,$height,\yii\image\drivers\Image::HEIGHT);
			}
	
	
			if(!empty($watermark)){
				$watermarkSrc = Workflow::$arrWaterMark[$watermark];
				$watermarkFile = Yii::$app->image->load($watermarkSrc);
				$watermarkFile->resize($image->width,$image->height,\yii\image\drivers\Image::CROP);
				$image->watermark($watermarkFile, NULL, NULL, 50);
			}
	
			header("Content-Type: ".$image->mime);
			echo $image->render();
		}
	}
	
    
}
