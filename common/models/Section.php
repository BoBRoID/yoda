<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "sections".
 *
 * @property integer $id
 * @property string $position
 * @property string $title
 * @property string $lead
 * @property string $text
 * @property string $order
 */
class Section extends \yii\db\ActiveRecord
{

    const POSITION_INDEX = 1;

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'sections';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['position', 'order'], 'integer'],
            [['title', 'lead', 'text'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'position' => 'Position',
            'title' => 'Title',
            'lead' => 'Lead',
            'text' => 'Text',
            'order' => 'Order',
        ];
    }

    public function getPossiblePositions()
    {
        return [
            self::POSITION_INDEX => 'Главная страница'
        ];
    }
}
