<?php

namespace App\Actions\Fortify;

use Illuminate\Support\Facades\Auth;
use Laravel\Fortify\Contracts\LoginResponse as LoginResponseContract;

class LoginResponse implements LoginResponseContract
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
                auth()->user()->role == 'admin' ? route('admin.unverified_user_data') : route('student.index')
            );
        }
    }

}