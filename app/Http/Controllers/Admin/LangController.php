<?php

namespace App\Http\Controllers\Admin;

use App\Models\Lang;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LangController extends Controller
{
    public function index()
    {

        $langs = Lang::all();

        return view('admin.langs.index')
            ->with([
            'langs' => $langs,
        ]);
    }

    public function show($id)
    {
        $lang = Lang::findOrFail($id);
        return view('admin.langs.edit')
            ->with([
                'lang' =>$lang,
            ]);
    }

    public function edit(Request $request,$id)
    {
        if($request->active === null){
            $request->active = false;
        }else{
            $request->active = true;
        }

        $lang = Lang::findOrFail($id);
        $lang->name   = $request->name;
        $lang->code   = $request->code;
        $lang->active = $request->active;
        $lang->flag   = $request->flag;
        $lang->save();

        return redirect()->back();
    }

    public function destroy($id)
    {
        $lang = Lang::findOrFail($id);
        $lang->delete();

        return redirect()->back();
    }

}
