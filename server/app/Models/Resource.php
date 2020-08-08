<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Resource extends Model
{    protected $guarded = [];
    public function movie()
    {
        return $this->morphTo();
    }


}
