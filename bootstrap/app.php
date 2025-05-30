<?php

/**
 * Bootstrap da aplicação
 * 
 * Este arquivo é responsável por inicializar o framework e carregar
 * todas as dependências necessárias para a aplicação.
 */

// Define o diretório raiz da aplicação
define('LADY_ROOT', dirname(__DIR__));

// Carrega o autoloader do Composer
require LADY_ROOT . '/vendor/autoload.php';

// Define constantes do framework
define('LADY_START', microtime(true));
define('LADY_VERSION', '1.0.0');

// Inicializa a aplicação
$app = new \Lady\Core\Application\Application(
    LADY_ROOT
);

// Carrega as configurações
$app->loadConfig();

// Carrega o ambiente
$app->loadEnvironment();

// Registra os provedores de serviço
$app->registerProviders();

// Inicializa a aplicação
$app->bootstrap();

// Retorna a instância da aplicação
return $app; 