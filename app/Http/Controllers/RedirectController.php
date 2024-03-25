<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RedirectController extends Controller
{
    public function check_role(){
        if (auth()->user()->role == 'admin'){
            return redirect()->route('admin.unverified_user_data');
        }else{
            return redirect()->route('student.index');
        }

        return redirect()->route('root');
    }
}
