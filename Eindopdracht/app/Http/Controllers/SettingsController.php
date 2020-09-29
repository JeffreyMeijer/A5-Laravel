<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SettingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = auth()->user();
        $bands = $this->getBandsOwnerByUserID($user->id);
        return view('settings.generalSettings', [
            'bands' => $bands
        ]);
    }

    public function showBand($id)
    {
        $band = $this->getBandByID($id);
        return view('settings.individualSettings', [
            'band' => $band
        ]);
    }

    public function showNamePage($id)
    {
        $band = $this->getBandByID($id);
        return view('settings.changeName', [
            'band' => $band
        ]);
    }
    public function showPhotoPage($id)
    {
        $band = $this->getBandByID($id);
        return view('settings.changePhoto', [
            'band' => $band
        ]);
    }
    public function showTextPage($id)
    {
        $band = $this->getBandByID($id);
        return view('settings.changeTexts', [
            'band' => $band
        ]);
    }
    public function showEmbedPage($id)
    {
        $band = $this->getBandByID($id);
        return view('settings.changeEmbeds', [
            'band' => $band
        ]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $bandID)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:4096',
        ]);

        $band = $this->getBandByID($bandID);
        $imgname = $band->id.'_image'.time().'.'.request()->image->getClientOriginalExtension();

        $request->image->storeAs('images', $imgname);

        $band->image = $imgname;
        $band->save();

        return back()->with('success', 'Afbeelding gewijzigd');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
