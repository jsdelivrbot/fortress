<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Messages extends Model
{
    protected $table = 'messages';
    protected $fillable = [
        'room_id',
        'user_id',
        'message'
    ];

    public $timestamps = false;

    public function user()
    {
        return $this->belongsTo(Admin::class, 'user_id');
    }
}
