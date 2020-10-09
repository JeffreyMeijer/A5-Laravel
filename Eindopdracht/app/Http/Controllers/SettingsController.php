<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bands;
use App\Models\User;

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
        foreach($bands as $band) {
            $band->addUser($user->id);
        }
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
    public function showOwnerPage($id)
    {
        $band = $this->getBandByID($id);
        $users = User::all();
        return view('settings.addOwner', [
            'users' => $users,
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
    public function storePhoto(Request $request, $bandID)
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

    public function storeName(Request $request, $bandID)
    {
        $request->validate([
            'name' => 'required'
        ]);

        $band = $this->getBandByID($bandID);
        $band->name = request()->input('name');
        $band->save();
        
        return back()->with('success', 'Naam gewijzigd');
    }

    public function storeOwner(Request $request, $bandID)
    {
        $band = $this->getBandByID($bandID);
        $band->addUser(request()->input('users'));
        return back()->with('success', 'Band owner toegevoegd');
    }

    public function storeText(Request $request, $bandID)
    {
        // $request->validate([
        //     'shortDescription' => 'required',
        //     'biography' => 'required'
        // ]);

        $band = $this->getBandByID($bandID);
        $band->description = request()->input('shortDescription');
        $band->biography = request()->input('biography');
        $band->save();

        return back()->with('success', 'Teksten gewijzigd');
    }
    public function storeEmbed(Request $request, $bandID)
    {
        // $request->validate([
        //     'shortDescription' => 'required',
        //     'biography' => 'required'
        // ]);

        $band = $this->getBandByID($bandID);
        $band->embed_url_1 = request()->input('embed_1');
        $band->embed_url_2 = request()->input('embed_2');
        $band->embed_url_3 = request()->input('embed_3');
        $band->save();

        return back()->with('success', 'Embeds gewijzigd');
    }

    public function deleteOwner($bandID, $id)
    {
        $band = $this->getBandByID($bandID);
        $band->users()->detach($id);

        return back()->with('success', 'Eigenaar verwijderd');
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
