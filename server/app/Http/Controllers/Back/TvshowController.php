<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Tvshow;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class TvshowController extends Controller
{

    public function __construct() {
        $categories = Category::get();
        view()->share('categories', $categories);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tvshows = Tvshow::latest()->paginate(6);
        return view('back.tvshow.show',compact('tvshows'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.tvshow.addshow');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tvshow = new Tvshow();
        $tvshow->title = $request->title;
        $tvshow->slug = Str::slug($request->title);

        $tvshow->country = $request->country;
        $tvshow->imdb = $request->imdb;
        $tvshow->duration = $request->duration;
        $tvshow->released = $request->released;;
        $tvshow->description = $request->description;;
      

        if ($request->hasFile('img')) {
            $imgName = Str::slug($request->title) . '.' . $request->img->getClientOriginalExtension();
            $request->img->move(public_path('tvshow'), $imgName);
            $tvshow->img = 'tvshow/' . $imgName;
        }

        $tvshow->save();

        foreach ($request->category as $category) {
            $tvshow->categories()->attach($category);
        }

        return redirect()->route('tvshow.index')->with('success', 'You have added tvshow successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tvshow =Tvshow::findOrFail($id); 
        return view('back.tvshow.editshow',compact('tvshow'));
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
        $tvshow =Tvshow::findOrFail($id); 
        $tvshow->categories->detach();
        $tvshow->seasons->delete();

        if (File::exists($tvshow->img)) {
            File::delete(public_path('tvshow/'.$tvshow->img));
        }
        $tvshow->delete();

        return redirect()->route('tvshow.index')->with('success','You have deleted tvshow successfully');
    }
}
