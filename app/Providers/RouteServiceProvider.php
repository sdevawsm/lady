<?php

namespace App\Providers;

use Lady\Core\ServiceProvider\ServiceProvider;
use Lady\Core\Application\Application;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * Registra os serviços de rota.
     */
    public function register(): void
    {
        // Registra os serviços de rota
    }

    /**
     * Inicializa os serviços de rota.
     */
    public function boot(): void
    {
        // Carrega as rotas da aplicação
        $this->loadRoutes();
    }

    /**
     * Carrega as rotas da aplicação.
     */
    protected function loadRoutes(): void
    {
        // Carrega as rotas da aplicação
        $this->app->router->group([
            'namespace' => 'App\\Http\\Controllers',
        ], function ($router) {
            require base_path('routes/web.php');
            require base_path('routes/api.php');
        });
    }
} 