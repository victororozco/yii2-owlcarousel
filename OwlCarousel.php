<?php

/**
 * @copyright Copyright &copy; Victor Orozco, 2018
 * @package yii2-owlcarousel2
 * @version 0.1.0
 */

namespace victororozco\owlcarousel;

use yii\base\Widget;
/**
 * This is just an example.
 */
class OwlCarousel extends Widget
{
    /**
     * Type: String/Boolean
     * Default: slideOutDown
     * Class for CSS3 animation out.
     */
    public $animateOut = false;

    /**
     * Type: String/Boolean
     * Default: fadeInLeft
     * Class for CSS3 animation in.
     */
    public $animateIn = false;

    /**
     * Type: Number
     * Default: 0
     * margin-right(px) on item.
     */
    public $margin = 0;

    /**
     * Type: Number
     * Default: 3
     * The number of items you want to see on the screen.
     */
    public $item = 3;

    /**
     * Type: Boolean
     * Default: false
     * Infinity loop. Duplicate last and first items to get loop illusion.
     */
    public $loop = false;

    /**
     * Type: Number
     * Default: 0
     * Padding left and right on stage (can see neighbours).
     */
    public $stagePadding = 0;

    /**
     * Type: Number
     * Default: 250
     * Speed Calculate. More info to come..
     */
    public $smartSpeed = 250;

    /**
     * Type: Boolean
     * Default: false
     * Autoplay.
     */
    public $autoplay = false;

    /**
     * Type: Number
     * Default: 5000
     * Autoplay interval timeout.
     */
    public $autoplayTimeout = 5000;

    /**
     * Type: Boolean
     * Default: false
     * Pause on mouse hover.
     */
    public $autoplayHoverPause = false;

    /**
     * Type: String/Boolean
     * Default: false
     * Class for CSS3 height.
     */
    public $height = false;

    public function init()
    {
        parent::init();
        AppAsset::register($this->view);
        ob_start();
    }

    public function run()
    {

        $js = <<<JS
    $('.owl-carousel').owlCarousel({
        autoplayHoverPause: "$this->autoplayHoverPause",
        autoplayTimeout:    $this->autoplayTimeout,
        stagePadding:       $this->stagePadding,
        smartSpeed:         $this->smartSpeed,
        animateOut:         "$this->animateOut",
        animateIn:          "$this->animateIn",
        autoplay:           "$this->autoplay",
        margin:             $this->margin,
        items:              $this->item,
        loop:               "$this->loop",
    });
JS;

        $css = <<<CSS
.item, .item > img {
    height: $this->height; /*slider height*/
}
CSS;
        $this->view->registerCss($css);
        $this->view->registerJs($js);

        $content = "<div class=\"owl-carousel owl-theme\">";
        $content .= ob_get_clean();
        $content .= "</div>";

        return $content;


    }

}