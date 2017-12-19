<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    protected $table = 'content';

    public $timestamps = false;

    //RELATIONS
    public function lang()
    {
        return $this->belongsTo(Lang::class);
    }
}
