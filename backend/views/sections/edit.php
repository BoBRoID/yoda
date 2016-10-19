<?php
$this->title = 'Редактировать секцию';
$this->params['breadcrumbs'][] = [
    'label' =>  'Секции',
    'url'   =>  ['sections/index']
];
$this->params['breadcrumbs'][] = $this->title;

echo $this->render('form', [
    'model' =>  $model
]);