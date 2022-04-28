<?php

namespace App\Http\Controllers\Tenant;

use App\Http\Controllers\Controller;
use Laravel\Sanctum\Http\Middleware\EnsureFrontendRequestsAreStateful;

class LogoutController extends Controller
{
    public function __invoke()
    {
        if(EnsureFrontendRequestsAreStateful::fromFrontend(request()))
        {
            auth()->guard('web')->logout();

            request()->session()->invalide();

            request()->session()->regenerateToken();
        }
    }
}
