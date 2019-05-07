<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MainController extends Controller
{
    public function actionMain(){
        return view('main');
    }

    public function actionLogout(Request $request)
    {
        Auth::guard()->logout();
        $request->session()->invalidate();
        return redirect('/');
    }

}
