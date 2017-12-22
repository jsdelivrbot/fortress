<?php

namespace App\Http\Controllers\Admin;

//use App\Models\Admin;
use App\Models\Admin;
use App\Models\Room;
use App\Models\Messages;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ChatController extends Controller
{
    public function index()
    {
        $admins = Admin::all();
//        dd($admins);
        $rooms = Room::query()
            ->with('firstUser', 'secondUser')
            ->where('first_user','=', Auth::user()->id)
            ->orWhere('second_user', Auth::user()->id)
            ->get()->toArray();

        return view('admin.chat.index')
            ->with([
                'rooms'  => $rooms,
                'admins' => $admins
            ]);
    }

    public function findChat($id)
    {
//        dd($id);
//        if ($id != Auth::user()->id) {
            $room = Room::query()
                ->where(function (Builder $builder) use ($id) {
                    return $builder->where('first_user', '=', $id)
                        ->where('second_user', '=', Auth::user()->id);
                })->orWhere(function (Builder $builder) use ($id) {
                    return $builder->where('second_user', '=', $id)
                        ->where('first_user', '=', Auth::user()->id);
                })
                ->orWhere('second_user', '=', $id)
                ->firstOrCreate([
                    'first_user' => Auth::user()->id,
                    'second_user' => (int)$id
                ]);
            return redirect()->route('dialog', ['id' => $room['id']]);
//        }
//        return redirect()->back();
    }

    public function dialog($room_id){

        $dialogs = Messages::query()
            ->with('user')
            ->where('room_id', $room_id)
            ->get();

//        dd($room_id);
        return(view('admin.chat.conversation')
            ->with([
                'dialogs' => $dialogs,
                'room'    => $room_id
            ]));
    }

    public function message(Request $request,$id)
    {
//        dd($id);
        Messages::query()->create([
           'room_id' => $id,
           'user_id' => Auth::user()->id,
           'message' => $request->message
        ]);

        return redirect()->back();
    }

}
