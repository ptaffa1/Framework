<?php

//framework/index.php
//1-Cargar el autocargador de Composer
require_once __DIR__ . '/vendor/autoload.php';

//2-Importar las clases que queremos usar
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

//3-Crear el objeto Request desde las variables globales
$request = Request::createFromGlobals();

//4-Usar el objeto Request para obtener el parametro (con valor por defecto)
$name = $request->query->get('name', 'World');

// 5- Crear el objeto Response (aún usando htmlspecialchars por ahora)
$response = new Response(
    sprintf('Hello %s', htmlspecialchars($name, ENT_QUOTES, 'UTF-8'))
);

// 6. Enviar la respuesta al navegador
$response->send();