<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tvshow extends Model
{
    protected $guarded = [];
    public function categories()
    {
        return $this->morphToMany(Category::class,'categoriable');
    }

    // public function resources()
    // {
    //     return $this->morphMany(Resource::class,'resourceable');
    // }

    public function seasons()
    {
        return $this->hasMany(Season::class);
    }
  
}
