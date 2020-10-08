<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Band;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    // Returns Band Object
    public function getBandsOwnerByUserID($id)
    {
        $bands = Band::where('user_id', $id)->get();
        return $bands;
    }
    // Returns Band Object
    public function getBandByID($id)
    {
        $band = Band::where('id',$id)->first();
        return $band;
    }
}
