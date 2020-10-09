<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Band;
use App\Models\User;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    // Returns Band Object
    public function getBandsOwnerByUserID($id)
    {
        $user = User::findOrFail($id);
        $bands = $user->bands;
        return $bands;
    }
    // Returns Band Object
    public function getBandByID($id)
    {
        $band = Band::where('id',$id)->first();
        return $band;
    }
}
