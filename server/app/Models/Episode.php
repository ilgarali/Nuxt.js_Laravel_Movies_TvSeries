<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use ShiftOneLabs\LaravelCascadeDeletes\CascadesDeletes;

class Episode extends Model
{
    use CascadesDeletes;
  
    protected $guarded = [];
    protected $cascadeDeletes = ['resources'];

    
    public function season()
    {
        return $this->belongsTo(Season::class);
    }
    public function resources()
    {
        return $this->morphMany(Resource::class,'resourceable');
    }
   
}
