<?php
use rmrevin\yii\fontawesome\FA;
use yii\bootstrap\Html;
use yii\widgets\ListView;

$this->title = 'Секции';
$this->params['breadcrumbs'][] = $this->title;

echo Html::tag('h2', $this->title);
echo Html::tag('div',
    Html::a(FA::i('plus').' добавить', ['sections/add'], ['class' => 'btn btn-default']),
    [
        'class' =>  'btn-group',
        'style' =>  'margin: 15px;'
    ]);
echo ListView::widget([
    'dataProvider'  =>  $sectionsProvider,
    'summary'       =>  false,
    'itemView'      =>  function($model){
        $position = array_key_exists($model->position, $model->getPossiblePositions()) ? $model->getPossiblePositions()[$model->position] : $model->position;

        return Html::tag('div', Html::a($model->title, ['sections/edit/'.$model->id]).Html::tag('small', $position), ['class' => 'col-xs-12', 'style' => 'padding: 20px 0;']);
    }
]);