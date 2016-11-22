<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\Contents;
use app\models\Online;
use app\lib\Workflow;
use app\lib\OnlineConfig;
class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
    	$section = 'bkk';
    	
    	$query = Online::find();
    	$query->andWhere('web = :web', [':web' => $section]);
    	$query->andWhere(['in','orderNo',[1,2,3,4]]);
    	$arrOnline = $query->all();
    	$currentTime = date('Y-m-d H:i:s');
    	$model = [];
    	if (!empty($arrOnline)){

    		foreach ($arrOnline as $lst){
    			$contents = null;
    			if ($lst->type == Workflow::TYPE_CONTENT){
    				$query = Contents::find();
    			}elseif ($lst->type == Workflow::TYPE_GALLARY){
    				$query = Gallary::find();
    			}
    			$query->andWhere('id = :id', [':id' => $lst->contentId]);
    			$query->andWhere('status = :status', [':status' => Workflow::STATUS_PUBLISHED]);
    			$query->andWhere('publishTime <= :publishTime', [':publishTime' => $currentTime]);
    			$contents = $query->one();

    			if (!empty($contents)){
    				if ($contents->status == Workflow::STATUS_PUBLISHED){
    					if ($lst->section == 'home'){
    						$key = 'home';
    					}elseif ($lst->section == 'howto'){
    						$key = 'howTo';
    					}else{
    						$key = 'others';
    					}
    				
		    			$model[$key][] = [
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
        		'model' => $model
        ]);
    }

    /**
     * Login action.
     *
     * @return string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return string
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }
}
