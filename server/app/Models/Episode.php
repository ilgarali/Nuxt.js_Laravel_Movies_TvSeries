<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Episode extends Model
{
    protected $guarded = [];
    public function season()
    {
        return $this->belongsTo(Season::class);
    }
    public function resources()
    {
        return $this->morphMany(Resource::class,'resourceable');
    }
}
