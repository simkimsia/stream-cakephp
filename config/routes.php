<?php
use Cake\Routing\Router;

Router::plugin('StreamCake', function ($routes) {
    $routes->fallbacks('DashedRoute');
});
