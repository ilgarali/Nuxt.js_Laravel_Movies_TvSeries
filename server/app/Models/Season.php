<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Season extends Model
{

    protected $guarded = [];
    public function tvshow()
    {
        return $this->belongsTo(Tvshow::class);
    }

    public function sources()
    {
        return $this->hasMany(Resource::class);
    }
    public function episodes()
    {
        return $this->hasMany(Episode::class);
    }
}
