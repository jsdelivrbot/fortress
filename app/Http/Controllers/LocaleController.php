<?php

namespace App\Http\Controllers;

use App\Models\Lang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class LocaleController extends Controller
{

    public function store($loсale)
    {
        session(['locale' => $loсale]);
        return redirect('/');
    }

}
