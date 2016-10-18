<?php
use yii\bootstrap\Html;

/** @var \backend\models\PhotoForm $model */

echo Html::tag('h2', $this->title);

$form = \yii\bootstrap\ActiveForm::begin();

if(!$model->path){
    echo $form->field($model, 'file')->fileInput();
}else{
    echo Html::tag('div', Html::img($model->path));
}

echo $form->field($model, 'date'),
    $form->field($model, 'text')->textarea(),
    $form->field($model, 'tags');

echo Html::tag('div', Html::button('Сохранить', ['type' => 'submit', 'class' => 'btn btn-default btn-success']), ['class' => 'text-center']);

$form->end();