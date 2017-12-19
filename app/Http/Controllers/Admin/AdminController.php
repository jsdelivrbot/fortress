<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }

    public function show()
    {
        $admins = Admin::all();
        return view('admin.list')->with(['admins' => $admins]);
    }

    public function form(){
        return view('admin.create');
    }

    public function create(Request $request)
    {

        Admin::create([
            'name'     => $request->name,
            'surname'  => $request->surname,
            'email'    => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect(route('admins.list'));
    }

}
