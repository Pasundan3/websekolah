<?php

namespace App\Actions\Fortify;

use Illuminate\Support\Facades\Auth;
use Laravel\Fortify\Contracts\RegisterResponse as RegisterResponseContract;

class RegisterResponse implements RegisterResponseContract
{

    public function toResponse($request)
    {
        
        // below is the existing response
        // replace this with your own code
        // the user can be located with Auth facade
        if ($request->wantsJson()) {
            return response()->json(['two_factor' => false]);
        } else {
            return redirect()->intended(
                route('student.index')
            );
        }
    }

}