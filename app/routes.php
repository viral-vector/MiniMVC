<?php


return [
    '/' => [
        'execute' => function() {
            return 'Got Home';
        },
        'methods' => ['get'],
        'filters' => [''],
    ],
    '/about' => [
        'execute' => function() {
            return 'Got About';
        },
        'methods' => ['get'],
        'filters' => ['app'],
    ],
    '/about/class/{id}' => [
        'execute' => 'App\\Controllers\\HomeController.hello',
        'methods' => ['get', 'delete'],
        'filters' => ['app'], 
        'matches' => ['id' => '\d+']
    ],
    '/about/class/{id}/{type}?' => [
        'execute' => 'App\\Controllers\\HomeController.about',
        'methods' => ['get', 'post'],
        'filters' => ['app'],
    ],
];