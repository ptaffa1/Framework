<?php

// framework/front.php
require_once __DIR__.'/vendor/autoload.php';

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

$request = Request::createFromGlobals();
$response = new Response();

// 1. Este es nuestro "mapa" de rutas.
$map = [
    '/hello' => __DIR__.'/hello.php', // Si la URL es /hello, carga este archivo
    '/bye'   => __DIR__.'/bye.php',   // Si la URL es /bye, carga este archivo
];

// 2. Obtenemos la URL que pide el usuario
$path = $request->getPathInfo();

// 3. Revisamos si la URL está en nuestro mapa
if (isset($map[$path])) {
    require $map[$path]; // Cargamos el script (ej. hello.php)
} else {
    // 4. Si no está, es un error 404
    $response->setStatusCode(404);
    $response->setContent('Not Found');
}

$response->send();