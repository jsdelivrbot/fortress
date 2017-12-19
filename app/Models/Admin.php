<?php

namespace App\Models;

use Illuminate\Support\Carbon;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    use Notifiable;
    protected $table = 'administrators';

    protected $fillable = [
        'name',
        'surname',
        'avatar',
        'last_visited',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    //RELATIONS
//    public function room()
//    {
//        return $this->belongsTo(Room::class);
//    }

    //MUTATORS
    public function getTimeAgoAttribute()
    {
        return $this->last_visited = Carbon::createFromTimeStamp(strtotime($this->last_visited))->diffForHumans();
    }

}