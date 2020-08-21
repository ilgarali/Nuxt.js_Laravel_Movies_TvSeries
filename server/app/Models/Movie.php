<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $guarded = [];
   
    public function categories()
    {
        return $this->morphToMany(Category::class,'categoriable');
    }

    public function sources()
    {
        return $this->morphMany(Resource::class,'resourceable');
    }

    
   
}
