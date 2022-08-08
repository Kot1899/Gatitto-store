<?php

return array(
// method get data from browser string
//    'news/([a-z]+)/([0-9]+)' => 'news/View/$1',
//    '' => 'main/Main',
    'about' => 'about/Index', //request => controller/action
    'goods' => 'goods/Goods',
    'app' => 'app/App',
    'main' => 'main/Main',
    'contact' => 'contact/Contact',
    'product/([0-9]+)' => 'product/Index/$1',
    'prod/([0-9]+)' => 'prod/Prod/$1',
    'cart' => 'cart/Cart',
    'account' => 'account/Index',
    'user/registration' => 'user/registration',
    'user/login' => 'user/login',
    'user/logout' => 'user/logout',
);
