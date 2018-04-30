<?php
/**
 * @copyright Copyright &copy; Victor Orozco, 2018
 * @package yii2-owlcarousel2
 * @version 0.1.0
 */
namespace victororozco\owlcarousel;


class AppAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@vendor/victororozco/yii2-owlcarousel2';
    public $css = [
        'dist/assets/owl.carousel.min.css',
        'dist/assets/animated.css',
    ];
    public $js = [
        'dist/owl.carousel.min.js',
    ];
    public $depends = ['yii\web\YiiAsset'];
}
