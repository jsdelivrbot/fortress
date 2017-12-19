<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Storage;
use App\Models\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{

    public function show($id){
        $admin = Admin::query()->find($id);
        return view('admin.profile.info')->with(['admin' => $admin]);
    }

    public function edit($id)
    {
        $admin = Admin::query()->find($id);
        return view('admin.profile.profile')->with(['admin' => $admin]);
    }


    public function update(Request $request, $id)
    {
        $admin = Admin::findOrFail($id);
        $admin->name = $request->name;
        $admin->surname = $request->surname;


        if ($request->avatar != null) {

//            $path = Storage::disk('local')->put('avatars', $request->avatar);
//            dd($request->avatar);
//            dd($path);
            $path = file_url('app/avatars'.$request->avatar);
            $admin->avatar = $path;
        }


        if ($request->email != null) {
            $admin->email = $request->email;
        }
        if ($request->password != null) {
            $admin->password = Hash::make($request->password);
        }
        $admin->save();
        return redirect()->back();
    }

    public function destroy($id)
    {
        $target = Admin::findOrFail($id);
        $target->delete();

        return redirect()->back();
    }

















}
