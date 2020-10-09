<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Band;
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

    public function search()
    {
        $query = request()->input('query');
        if($query) {
            $bands = Band::where('name', 'LIKE', '%' . $query . '%')->get();
            if(count($bands) > 0) {
                // return back()->withMessage('Bands gevonden')
                return view('guests', [
                    'bands' => $bands
                ]);
            }
        }
        return back()->withMessage('Geen bands gevonden');
    }
}
