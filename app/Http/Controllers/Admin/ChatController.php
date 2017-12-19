<?php

namespace App\Http\Controllers\Admin;

//use App\Models\Admin;
use App\Models\Admin;
use App\Models\Room;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ChatController extends Controller
{
    public function index($id)
    {
        $rooms = Room::query()
            ->where('first_user','=',$id)
            ->distinct()
//            ->whereHas('admin',function (Builder $builder){
//                dd($builder);
//                return $builder->where('id','second_user');
//            })
            ->get([
                'first_user',
                'second_user'
            ]);
//            ->toSql();
            dd($rooms->toArray());


        return view('admin.chat.index')
            ->with([
                'rooms' => $rooms,

            ]);
    }

//    public function conversation(){
//
//    }

}
