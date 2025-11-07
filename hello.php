<?php

// framework/hello.php
$name = $request->query->get('name', 'World');// 1. TOMA el dato del Request (entrada)
?>

Hello <?= htmlspecialchars($name, ENT_QUOTES, 'UTF-8') ?>