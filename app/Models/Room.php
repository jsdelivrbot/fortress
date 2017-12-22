<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $table = 'room';
    protected $fillable = [
        'first_user',
        'second_user'
    ];
    public $timestamps = false;

    public function messages()
    {
        return $this->hasMany(Messages::class);
    }


    public function admin()
    {
        $this->hasOne(Admin::class,'id');
    }

    public function firstUser()
    {
        return $this->belongsTo(Admin::class, 'first_user');
    }

    public function secondUser()
    {
        return $this->belongsTo(Admin::class, 'second_user');
    }
}
