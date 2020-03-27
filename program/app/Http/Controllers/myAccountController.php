<?php

namespace App\Http\Controllers;

use App\TravelPackages;
use Illuminate\Http\Request;
use App\Http\Requests\myAccountRequest;
use App\Http\Requests\photoprofileRequest;
use App\User;
use Illuminate\Support\Facades\Auth;
use Alert;
use App\photoprofile;
use App\profile;
use UxWeb\SweetAlert\SweetAlert;

class myAccountController extends Controller
{
    public function index($id)
    {

        $user = User::findOrfail($id);

        return view('pages.myaccount.index', [
            'user' => $user
        ]);
    }
    public function edit($id)
    {

        $user = User::findOrFail($id);

        return view('pages.myaccount.edit', [
            'user' => $user
        ]);
    }

    public function update(myAccountRequest $request, $id)
    {
        // dd($request->all());
        $user = User::findOrFail($id);
        $user->name = $request->get('name');
        $user->username = $request->get('username');
        $user->email = $request->get('email');
        $user->handphone = $request->get('handphone');

        $check = strlen($request->get('handphone'));

        if ($request->hasFile('avatar')) {


            $image = $request->file('avatar');

            $imagename = md5($image->getClientOriginalName()) . '.' . $image->getClientOriginalExtension();


            $image->move('storage/assets/profile', $imagename);

            $user->image = $imagename;

            // Storage::disk('public')->put($request->file('avatar')->getFilename() . '.' . $extension,  File::get($request->file('avatar'));

            // $user->image = $request->file('avatar')->getClientOriginalName();
        }

        if ($check < 12) {
            alert()->error('error', 'No Handphone Salah !!!');
            return redirect()->route('myAccountEdit', Auth::user()->id)->withInput();
        } else {


            $user->save();

            // alert('sukses', 'ini judul');
            // Alert::message('Message', 'Optional Title');
            // alert()->warning('Warning Message', 'Optional Title');
            // alert()->basic('Basic Message', 'Mandatory Title')->autoclose(3500);
            alert()->success('Done', 'Profile Update !!');
            return redirect()->route('myAccount', Auth::user()->id);
        }
    }
};
