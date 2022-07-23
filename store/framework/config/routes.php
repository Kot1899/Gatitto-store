<?php

return array(
// method get data from browser string
    'news/([a-z]+)/([0-9]+)' => 'news/View/$1',

    'news' => 'news/Index', //request => controller/action
    'goods' => 'goods/Goods',
    'main' => 'main/Main',

);
