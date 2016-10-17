<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<a name="about"></a>
<div class="intro-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="intro-message">
                    <h1>Landing Page</h1>
                    <h3>A Template by Start Bootstrap</h3>
                    <hr class="intro-divider">
                    <ul class="list-inline intro-social-buttons">
                        <li>
                            <a href="https://twitter.com/SBootstrap" class="btn btn-default btn-lg"><i class="fa fa-twitter fa-fw"></i> <span class="network-name">Twitter</span></a>
                        </li>
                        <li>
                            <a href="https://github.com/IronSummitMedia/startbootstrap" class="btn btn-default btn-lg"><i class="fa fa-github fa-fw"></i> <span class="network-name">Github</span></a>
                        </li>
                        <li>
                            <a href="#" class="btn btn-default btn-lg"><i class="fa fa-linkedin fa-fw"></i> <span class="network-name">Linkedin</span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
$content = [
    [
        'heading'   =>  'Death to the Stock Photo:<br>Special Thanks',
        'lead'      =>  'A special thanks to <a target="_blank" href="http://join.deathtothestockphoto.com/">Death to the Stock Photo</a> for providing the photographs that you see in this template. Visit their website to become a member.',
        'image'     =>  '/img/ipad.png',
        'name'      =>  'services'
    ],[
        'heading'   =>  '3D Device Mockups<br>by PSDCovers',
        'lead'      =>  'Turn your 2D designs into high quality, 3D product shots in seconds using free Photoshop actions by <a target="_blank" href="http://www.psdcovers.com/">PSDCovers</a>! Visit their website to download some of their awesome, free photoshop actions!',
        'image'     =>  '/img/dog.png',
    ],[
        'heading'   =>  'Google Web Fonts and<br>Font Awesome Icons',
        'lead'      =>  'This template features the \'Lato\' font, part of the <a target="_blank" href="http://www.google.com/fonts">Google Web Font library</a>, as well as <a target="_blank" href="http://fontawesome.io">icons from Font Awesome</a>.',
        'image'     =>  '/img/phones.png',
    ],
];
?>

<?php foreach($content as $key => $item){
    $letter = $key % 2 == 0 ? 'b' : 'a';

    if(array_key_exists('name', $item)){?>
    <a name="<?=$item['name']?>"></a>
    <?php } ?>
    <div class="content-section-<?=$letter?>">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-sm-6<?=$letter == 'b' ? ' col-lg-offset-1 col-sm-push-6' : ''?>">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h2 class="section-heading"><?=$item['heading']?></h2>
                    <p class="lead"><?=$item['lead']?></p>
                </div>
                <div class="col-lg-5 <?=$letter == 'b' ? 'col-sm-pull-6' : 'col-lg-offset-2'?> col-sm-6">
                    <img class="img-responsive" src="<?=$item['image']?>" alt="<?=strip_tags($item['heading'])?>">
                </div>
            </div>
        </div>
    </div>
<?php } ?>

<a  name="contact"></a>
<div class="banner">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h2>Connect to Start Bootstrap:</h2>
            </div>
            <div class="col-lg-6">
                <ul class="list-inline banner-social-buttons">
                    <li>
                        <a href="https://twitter.com/SBootstrap" class="btn btn-default btn-lg"><i class="fa fa-twitter fa-fw"></i> <span class="network-name">Twitter</span></a>
                    </li>
                    <li>
                        <a href="https://github.com/IronSummitMedia/startbootstrap" class="btn btn-default btn-lg"><i class="fa fa-github fa-fw"></i> <span class="network-name">Github</span></a>
                    </li>
                    <li>
                        <a href="#" class="btn btn-default btn-lg"><i class="fa fa-linkedin fa-fw"></i> <span class="network-name">Linkedin</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>