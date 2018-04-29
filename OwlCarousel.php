<?php

namespace victororozco\owlcarousel;

use yii\base\Widget;
/**
 * This is just an example.
 */
class OwlCarousel extends Widget
{
    public function init()
    {
        parent::init();
        AppAsset::register($this->view);
        ob_start();
    }

    public function run()
    {
        $content = ob_get_clean();
        return $content;
    }

}