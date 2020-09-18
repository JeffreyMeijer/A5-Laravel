<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $band = $this->getBandByID($id);
        if(!$band) abort(404);
        return view('bandpage', [
            'band' => $this->getBandByID($id)
        ]);
    }

}
