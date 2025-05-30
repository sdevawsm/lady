<?php

namespace App\Features\Auth\Controllers;

use App\Features\Shared\Controllers\BaseController;
use App\Features\Auth\Services\AuthService;

class RegisterController extends BaseController
{
    private AuthService $authService;

    public function __construct(AuthService $authService)
    {
        $this->authService = $authService;
    }

    public function show()
    {
        // TODO: Implementar exibição do formulário de registro
    }

    public function register()
    {
        // TODO: Implementar lógica de registro
    }
} 