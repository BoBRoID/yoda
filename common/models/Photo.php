<?php

namespace common\models;

use Yii;
use yii\helpers\Url;

/**
 * This is the model class for table "photos".
 *
 * @property integer $id
 * @property string $path
 * @property string $date
 * @property string $text
 * @property string $tags
 * @property string $order
 */
class Photo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'photos';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['path', 'text', 'tags'], 'string'],
            [['date'], 'required'],
            [['date', 'order'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'path' => 'Path',
            'date' => 'Date',
            'text' => 'Text',
            'tags' => 'Tags',
            'order' => 'Order',
        ];
    }

    public function getFullPath(){
        $fullPath = $this->path;

        if(!preg_match('/^http(s|):\/\//', $fullPath)){
            $fullPath = \Yii::$app->params['frontend'].$fullPath;
        }

        return $fullPath;
    }

    public function beforeSave($insert)
    {
        if(!$this->date){
            $this->date = time();
        }

        if(!$this->order){
            $this->order = self::find()->select('MAX(`order`)')->scalar() + 1;
        }

        return parent::beforeSave($insert); // TODO: Change the autogenerated stub
    }
}
