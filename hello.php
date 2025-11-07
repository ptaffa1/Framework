<?php

// framework/hello.php
$name = $request->query->get('name', 'World');// 1. TOMA el dato del Request (entrada)
$response->setContent(sprintf('Hello %s', htmlspecialchars($name, ENT_QUOTES, 'UTF-8')));// 2. CONFIGURA el objeto Response (salida)