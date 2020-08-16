<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\Tvshow;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SeasonController extends Controller
{
 
    public function season($id)
    {
        $tvshow = Tvshow::findOrFail($id);
        
        return view('back.season.addseason',compact('tvshow'));


    }

    public function store($id,Request $request)
    {
     
        $tvshow = Tvshow::findOrFail($id);
        $tvshow->seasons()->create([
            'season'=>$request->season,
            'slug'=>Str::slug($request->season)
        ]);
        return view('back.season.addseason',compact('tvshow'));


    }
}
