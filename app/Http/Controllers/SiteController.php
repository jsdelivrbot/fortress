<?php

namespace App\Http\Controllers;

use App\Models\Lang;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {
        $langs = Lang::query()
            ->where('active','=','1')
            ->get();

        return view('pages.home')->with([
            'langs' => $langs,
        ]);
    }
}
