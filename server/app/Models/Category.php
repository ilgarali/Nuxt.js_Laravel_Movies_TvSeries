<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];
   


    public function movies()
    {
        return $this->morphedByMany(Movie::class,'categoriable');
    }

    public function tvshows()
    {
        return $this->morphedByMany(Tvshow::class,'categoriable');
    }
}
