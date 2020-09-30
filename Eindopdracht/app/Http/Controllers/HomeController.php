<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class HomeController extends Controller
{
    public function index()
    {
        if(Auth::check()) {
            $user = auth()->user();
            return view('dashboard', [
                'bands' => $this->getBandsOwnerByUserID($user->id)
            ]);
        }
        return view('guests');
    }
}
