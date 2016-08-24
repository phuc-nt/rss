<?php
use Cake\Routing\RouteBuilder;
use Cake\Routing\Router;

Router::plugin(
    'RSS',
    ['path' => '/r-s-s'],
    function (RouteBuilder $routes) {
        $routes->fallbacks('DashedRoute');
    }
);
