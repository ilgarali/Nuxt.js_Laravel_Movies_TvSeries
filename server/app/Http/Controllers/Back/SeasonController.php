<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\Season;
use App\Models\Tvshow;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SeasonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        dd($id);
        $tvshow = Tvshow::findOrFail($id);
        return view('back.season.addseason',compact('tvshow'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $season = Season::findOrFail($id);
        
        return view('back.season.season',compact('season'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $season = Season::findOrFail($id);
        
        return view('back.season.editseason',compact('season'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $season = Season::findOrFail($id);
        $season->delete();
        return redirect()->route('tvshow.index')->with('success','You have deleted season successfully');
    }

    public function createSeason($id)
    {
        
        $tvshow = Tvshow::findOrFail($id);
        return view('back.season.addseason',compact('tvshow'));
    }

    public function storeSeason(int $id,Request $request)
    {
        $tvshow = Tvshow::findOrFail($id);
        $tvshow->seasons()->create([
            'season'=> $request->season,
            'slug'=>Str::slug($request->season)
        ]);
        return redirect()->route('tvshow.index')->with('success','You have added new season successfully');
    }
}
