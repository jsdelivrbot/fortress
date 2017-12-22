<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Models\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class ProfileController extends Controller
{

    public function show($id){
        $admin = Admin::query()->find($id);
        return view('admin.profile.info')->with(['admin' => $admin]);
    }

    public function edit($id)
    {

        if(Auth::user()->super_admin == 1){
            $admin = Admin::query()->find($id);
        }else{
            $admin = Admin::query()->find(Auth::user()->id);
        }
        return view('admin.profile.profile')->with(['admin' => $admin]);
    }

    public function updateAvatar(Request $request)
    {

        $validation = Validator::make($request->all(), [
            'avatar' => 'required|image',
        ])->validate();

//        dd($validation->fails());
        if ($validation->fails())
        {
            return redirect()->back()->withErrors($validation->errors());
        }

        $admin = Admin::findOrFail(Auth::user()->id);
        $path = $request->file('avatar')->store('public/avatars');
        $admin->avatar = file_url($path);
        $admin->save();

        return redirect()->back();
    }

    public function updateInfo(Request $request)
    {
        $admin = Admin::findOrFail(Auth::user()->id);
        $admin->name = $request->name;
        $admin->surname = $request->surname;

        if ($request->email != null) {
            $admin->email = $request->email;
        }

        $admin->save();
        return redirect()->back();
    }

    public function updatePassword(Request $request)
    {
        $admin = Admin::findOrFail(Auth::user()->id);
        $admin->password = bcrypt($request->password);
        $admin->save();
        return redirect()->back();
    }


    public function destroy($id)
    {
        if(Auth::user()->super_admin == 1){
            $target = Admin::findOrFail($id);
            $target->delete();
        }
        return redirect()->back();
    }

















}
