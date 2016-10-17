<?php
/**
 * Created by PhpStorm.
 * User: gilko.nikolai
 * Date: 17.10.2016
 * Time: 18:48
 */

namespace frontend\assets;


use yii\web\AssetBundle;

class PhotosAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/4-col-portfolio.css',
    ];
    public $js = [
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'frontend\assets\AppAsset',
    ];
}