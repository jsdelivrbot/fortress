<?php

namespace App\Http\Controllers\Admin;

use App\Models\Content;
use App\Models\Lang;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContentController extends Controller
{
    public function index()
    {
        $content = Lang::query()
            ->with('content')
            ->whereHas('content')
            ->get();

        return view('admin.content.index')
            ->with(['content' => $content]);
    }

    public function edit(Request $request,$id)
    {
        $collection = collect($request);
        $collection->forget('_token');

        $content = Content::findOrFail($id);
        $content->value = $collection->first();
        $content->save();
        
        return redirect()->back();
    }

    public function store()
    {
        
    }
    
    
}
