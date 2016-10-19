<?php
/** @var \backend\models\SectionForm $model */

use yii\bootstrap\Html;

echo Html::tag('h2', $this->title);

$form = \yii\bootstrap\ActiveForm::begin();

echo $form->field($model, 'title'),
$form->field($model, 'lead')->textarea(),
$form->field($model, 'text')->textarea(),
$form->field($model, 'position')->dropDownList($model->getPossiblePositions());

echo Html::tag('div', Html::button('Сохранить', ['type' => 'submit', 'class' => 'btn btn-default btn-success']), ['class' => 'text-center']);

$form->end();