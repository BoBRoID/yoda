<?php
use kartik\date\DatePicker;
use yii\bootstrap\Html;

/** @var \backend\models\PhotoForm $model */

echo Html::tag('h2', $this->title);

$form = \yii\bootstrap\ActiveForm::begin();

if(!$model->path){
    echo $form->field($model, 'file')->fileInput();
}else{
    echo Html::tag('div', Html::img($model->fullPath));
}

echo $form->field($model, 'date')->widget(DatePicker::className(), [
    'type'  => DatePicker::TYPE_INPUT,
    'value' => $model->date,
    'pluginOptions' => [
        'autoclose' =>  true,
        'format'    => 'yyyy-mm-dd'
    ]
]),
    $form->field($model, 'text')->textarea(),
    $form->field($model, 'tags');

echo Html::tag('div', Html::button('Сохранить', ['type' => 'submit', 'class' => 'btn btn-default btn-success']), ['class' => 'text-center']);

$form->end();