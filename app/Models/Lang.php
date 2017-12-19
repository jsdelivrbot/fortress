<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;


class Lang extends Model
{
    protected $casts = [
        'active' => 'boolean',
    ];

    //MUTATORS
    public function getUpdatedAgoAttribute()
    {
        if ($this->updated_at != null){
            return $this->updated_at->diffForHumans();
        }
        else return null;
    }

    public function getCreatedAgoAttribute()
    {
        if ($this->created_at != null){
            return $this->created_at->diffForHumans();
        }
        else return null;
    }

//    RELATIONS
    public function content()
    {
        return $this->hasMany(Content::class);
    }

}
