OwlCarousel
===========
Carousel adapted for yii2 framework

## Animation:
[animated.css](https://daneden.github.io/animate.css/)

# Owl Carousel 
[owl.carousel.js](https://owlcarousel2.github.io)

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist victororozco/yii2-owlcarousel2 "*"
```

or add

```
"victororozco/yii2-owlcarousel2": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

```php
use victororozco\owlcarousel\OwlCarousel;

<?php OwlCarousel::begin([
    'item'          => 1,
    'loop'          => true,
    'margin'        => 10,
    'autoplay'      => true,
    'animateIn'     => 'fadeInLeft',
    'animateOut'    => 'slideOutDown',
]); ?>

<div class="item">
    <img src="https://lorempixel.com/1024/480/technics/5/" />
</div>

<div class="item">
    <img src="https://lorempixel.com/1024/480/technics/2/" />
</div>

<div class="item">
    <img src="https://lorempixel.com/1024/480/technics/3/" />
</div>

<?php OwlCarousel::end(); ?>
```