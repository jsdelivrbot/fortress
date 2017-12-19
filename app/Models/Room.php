<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $table = 'room';

    public function messages()
    {
        return $this->hasMany(Messages::class);
    }


    public function admin()
    {
        $this->hasOne(Admin::class,'id');
    }
}
