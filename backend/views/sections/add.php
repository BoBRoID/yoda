<?php
$this->title = 'Добавить секцию';
$this->params['breadcrumbs'][] = [
    'label' =>  'Секции',
    'url'   =>  ['sections/index']
];
$this->params['breadcrumbs'][] = $this->title;

echo $this->render('form', [
    'model' =>  $model
]);