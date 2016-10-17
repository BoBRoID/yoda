<?php
use yii\bootstrap\Html;

$this->title = 'Галерея';

\frontend\assets\PhotosAsset::register($this);
?>

<div class="container">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header"><?=$this->title?>
                <small>Secondary Text</small>
            </h1>
        </div>
    </div>
    <!-- /.row -->

    <?=\yii\widgets\ListView::widget([
        'dataProvider'  =>  $photosProvider,
        'itemView'      =>  function($model){
            return Html::tag('div', Html::a(Html::img($model->path, ['class' => 'img-responsive']), '#'), ['class' => 'col-md-3 portfolio-item']);
        },
        'layout'    =>  '{summary}{items}'.Html::tag('hr').Html::tag('div', Html::tag('div', '{pager}', ['class' => 'col-lg-12']), ['class' => 'row text-center'])
    ])?>


</div>