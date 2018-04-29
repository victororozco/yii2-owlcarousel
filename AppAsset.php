<?php
/**
 * Created by PhpStorm.
 * User: victor
 * Date: 28/4/2018
 * Time: 11:00 PM
 */
namespace victororozco\owlcarousel;


class AppAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@vendor/victororozco';
    public $css = [
        'dist/assets/owl.carousel.min.css',
    ];
    public $js = [
        'dist/owl.carousel.min.js',
    ];
    public $depends = ['yii\web\YiiAsset'];
}
