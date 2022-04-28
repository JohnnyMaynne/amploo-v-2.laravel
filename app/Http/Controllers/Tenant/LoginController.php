<?php

namespace App\Http\Controllers\Tenant;

use App\Http\Controllers\Controller;
use Illuminate\Validation\ValidationException;
use Laravel\Sanctum\Http\Middleware\EnsureFrontendRequestsAreStateful;

class LoginController extends Controller
{
    public function __invoke()
    {
        request()->validate([
            'email' => ['email','required'],
            'password' => ['required'],
        ]);

        if(EnsureFrontendRequestsAreStateful::fromFrontend(request()))
        {
            $this->authenticateFrontend();
        }
    }

    private function authenticateFrontend()
    {
        if(!auth()
            ->guard('web')
            ->attempt(
                request()->only('email','password'),
                request('remember')
            )) {

            throw ValidationException::withMessages([
                'email'  => 'Ошибка'
            ]);
        }
    }
}
