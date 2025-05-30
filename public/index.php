<?php

/**
 * Ponto de entrada da aplicação
 * 
 * Este arquivo é responsável por iniciar a aplicação e processar
 * as requisições HTTP.
 */

// Carrega o bootstrap da aplicação
$app = require __DIR__ . '/../bootstrap/app.php';

// Processa a requisição HTTP
$response = $app->handle(
    \Lady\Core\Http\Request::capture()
);

// Envia a resposta
$response->send(); 