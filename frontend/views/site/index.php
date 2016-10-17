<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';

/** @var \common\models\Section[] $sections */
$firstSection = array_pop($sections);

?>
<header class="image-bg-fluid-height">
    <img class="img-responsive img-center" src="http://placehold.it/200x200&text=Logo" alt="">
</header>

<?php if($firstSection){ ?>
<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <?php if($title = $firstSection->title){ ?>
                    <h1 class="section-heading"><?=$title?></h1>
                <?php }
                if($lead = $firstSection->lead){ ?>
                    <p class="lead section-lead"><?=$lead?></p>
                <?php }
                if($text = $firstSection->text){ ?>
                    <p class="section-paragraph"><?=$text?></p>
                <?php } ?>
            </div>
        </div>
    </div>
</section>
<aside class="image-bg-fixed-height"></aside>
<?php }

if($sections){
    foreach($sections as $section){
?>
<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <?php if($title = $firstSection->title){ ?>
                    <h1 class="section-heading"><?=$title?></h1>
                <?php }
                if($lead = $firstSection->lead){ ?>
                    <p class="lead section-lead"><?=$lead?></p>
                <?php }
                if($text = $firstSection->text){ ?>
                    <p class="section-paragraph"><?=$text?></p>
                <?php } ?>
            </div>
        </div>
    </div>
</section>
<?php
    }
}?>