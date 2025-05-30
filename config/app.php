<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Nome da Aplicação
    |--------------------------------------------------------------------------
    |
    | Este valor é o nome da sua aplicação. Este valor é usado quando o
    | framework precisa colocar o nome da aplicação em uma notificação
    | ou qualquer outro local onde o nome da aplicação seja necessário.
    |
    */
    'name' => env('APP_NAME', 'LadyPHP'),

    /*
    |--------------------------------------------------------------------------
    | Ambiente da Aplicação
    |--------------------------------------------------------------------------
    |
    | Este valor determina o "ambiente" em que sua aplicação está rodando.
    | Isso pode determinar como você configura vários serviços que sua
    | aplicação utiliza. Defina isso em seu arquivo ".env".
    |
    */
    'env' => env('APP_ENV', 'production'),

    /*
    |--------------------------------------------------------------------------
    | Modo de Debug
    |--------------------------------------------------------------------------
    |
    | Quando sua aplicação está em modo debug, mensagens de erro detalhadas
    | serão mostradas em cada erro que ocorre em sua aplicação. Se
    | desativado, uma página de erro genérica será mostrada.
    |
    */
    'debug' => env('APP_DEBUG', false),

    /*
    |--------------------------------------------------------------------------
    | URL da Aplicação
    |--------------------------------------------------------------------------
    |
    | Esta URL é usada pelo console para gerar URLs corretas quando usando
    | o comando Artisan. Você deve definir isso para a raiz da sua
    | aplicação para que seja usado ao executar tarefas Artisan.
    |
    */
    'url' => env('APP_URL', 'http://localhost'),

    /*
    |--------------------------------------------------------------------------
    | Fuso Horário da Aplicação
    |--------------------------------------------------------------------------
    |
    | Aqui você pode especificar o fuso horário padrão para sua aplicação,
    | que será usado pelo PHP date e date-time functions.
    |
    */
    'timezone' => 'UTC',

    /*
    |--------------------------------------------------------------------------
    | Locale da Aplicação
    |--------------------------------------------------------------------------
    |
    | O locale da aplicação determina o locale padrão que será usado
    | pelo serviço de tradução. Você é livre para definir este valor
    | para qualquer um dos locales que serão suportados pela aplicação.
    |
    */
    'locale' => 'pt_BR',

    /*
    |--------------------------------------------------------------------------
    | Application Fallback Locale
    |--------------------------------------------------------------------------
    */
    'fallback_locale' => 'en',

    /*
    |--------------------------------------------------------------------------
    | Encryption Key
    |--------------------------------------------------------------------------
    */
    'key' => env('APP_KEY'),

    /*
    |--------------------------------------------------------------------------
    | Framework Version
    |--------------------------------------------------------------------------
    */
    'version' => env('FRAMEWORK_VERSION', '1.0'),

    /*
    |--------------------------------------------------------------------------
    | Provedores de Serviço
    |--------------------------------------------------------------------------
    |
    | Os provedores de serviço listados aqui serão carregados automaticamente
    | na inicialização da aplicação. Sinta-se livre para adicionar seus
    | próprios provedores de serviço a esta lista para registrar
    | serviços e funcionalidades adicionais.
    |
    */
    'providers' => [
        // Provedores do Framework
        \Lady\Core\ServiceProvider\CoreServiceProvider::class,
        \Lady\Core\ServiceProvider\RouteServiceProvider::class,
        \Lady\Core\ServiceProvider\EventServiceProvider::class,
        \Lady\Core\ServiceProvider\LogServiceProvider::class,

        // Provedores da Aplicação
        \App\Providers\AppServiceProvider::class,
        \App\Providers\RouteServiceProvider::class,
    ],

    /*
    |--------------------------------------------------------------------------
    | Aliases de Classe
    |--------------------------------------------------------------------------
    |
    | Esta array de aliases de classe será registrada quando a aplicação
    | iniciar. No entanto, sinta-se livre para registrar quantos
    | aliases você quiser, já que eles são "lazy" carregados.
    |
    */
    'aliases' => [
        'App' => \Lady\Core\Support\Facades\App::class,
        'Config' => \Lady\Core\Support\Facades\Config::class,
        'Env' => \Lady\Core\Support\Facades\Env::class,
        'Log' => \Lady\Core\Support\Facades\Log::class,
        'Route' => \Lady\Core\Support\Facades\Route::class,
    ],
]; 