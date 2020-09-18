<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bands;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = auth()->user();
        return view('dashboard', [
            'bands' => $this->getBandsOwnerByUserID($user->id)
        ]);
    }

    // Returns Band Object
    private function getBandsOwnerByUserID($id)
    {
        $bands = Bands::where('user_id', $id)->get();
        return $bands;
    }
}