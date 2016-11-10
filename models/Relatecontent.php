<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "relatecontent".
 *
 * @property integer $id
 * @property integer $contentId
 * @property integer $relateId
 * @property integer $orderNo
 * @property string $lastUpdateTime
 * @property integer $lastUpdateBy
 * @property integer $type
 */
class Relatecontent extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'relatecontent';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['contentId', 'relateId', 'orderNo', 'lastUpdateBy', 'type'], 'integer'],
            [['lastUpdateTime'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'contentId' => 'Content ID',
            'relateId' => 'Relate ID',
            'orderNo' => 'Order No',
            'lastUpdateTime' => 'Last Update Time',
            'lastUpdateBy' => 'Last Update By',
            'type' => 'Type',
        ];
    }
}
