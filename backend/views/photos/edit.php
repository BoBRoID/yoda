<?php
$this->title = 'Редактировать фото';
$this->params['breadcrumbs'][] = [
    'label' =>  'Фотографии',
    'url'   =>  ['photos/index']
];
$this->params['breadcrumbs'][] = $this->title;

echo $this->render('form', [
    'model' =>  $model
]);