<?php
use rmrevin\yii\fontawesome\FA;
use yii\bootstrap\Html;

\rmrevin\yii\fontawesome\cdn\AssetBundle::register($this);

$this->title = 'Фотографии';
$this->params['breadcrumbs'][] = $this->title;

$css = <<<'CSS'
.portfolio-item {
    margin-bottom: 25px;
}
CSS;

$this->registerCss($css);

echo Html::tag('div',
    Html::a(FA::i('plus').' добавить', ['photos/add'], ['class' => 'btn btn-default']),
    [
        'class' =>  'btn-group',
        'style' =>  'margin: 15px;'
    ]);

echo \yii\widgets\ListView::widget([
    'dataProvider'  =>  $photosProvider,
    'itemView'      =>  function($model){
        return Html::tag('div', Html::a(Html::img($model->path, ['class' => 'img-responsive']), ['photos/edit/'.$model->id]), ['class' => 'col-md-3 portfolio-item']);
    },
    'layout'    =>  '{items}'.Html::tag('div', '{summary}', ['class' => 'text-center']).Html::tag('div', Html::tag('div', '{pager}', ['class' => 'col-lg-12']), ['class' => 'row text-center'])
]);