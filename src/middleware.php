<?php

use Slim\App;

$app->add(new Tuupola\Middleware\JwtAuthentication([
    "path" => "/api", /* or ["/api", "/admin"] */
    "header" => "X-Token",
    "regexp" => "/(.*)/",
    "ignore" => ["/api/token"],
    "secret" => $container->get('settings')['secretKey']
]));

// e.g: $app->add(new \Slim\Csrf\Guard);
$app->add(function ($req, $res, $next) {
    $response = $next($req, $res);
    return $response
            ->withHeader('Access-Control-Allow-Origin', '*')
            ->withHeader('Access-Control-Allow-Headers', 'X-Requested-With, Content-Type, Accept, Origin, Authorization')
            ->withHeader('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, PATCH, OPTIONS');
});
