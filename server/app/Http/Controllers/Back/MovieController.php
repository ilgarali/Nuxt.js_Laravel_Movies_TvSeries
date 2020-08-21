<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Http\Requests\MovieRequest;
use App\Models\Category;
use App\Models\Movie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class MovieController extends Controller
{
    public function __construct()
    {
        view()->share('categories',Category::latest()->get());
        return $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movies = Movie::latest()->paginate(6);
        return view('back.movie.movie', compact('movies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('back.movie.addmovie');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MovieRequest $request)
    {
        $movie = new Movie();
        $movie->title = $request->title;
        $movie->slug = Str::slug($request->title);

        $movie->country = $request->country;
        $movie->imdb = $request->imdb;
        $movie->duration = $request->duration;
        $movie->released = $request->released;;
        $movie->description = $request->description;;
      

        if ($request->hasFile('img')) {
            $imgName = Str::slug($request->title) . '.' . $request->img->getClientOriginalExtension();
            $request->img->move(public_path('movie'), $imgName);
            $movie->img = 'movie/' . $imgName;
        }

        $movie->save();

        foreach ($request->category as $category) {
            $movie->categories()->attach($category);
        }


      
        if (strlen($request->dublaj_menbe) > 0) {
            $dublaj_menbe = explode(',', $request->dublaj_menbe);
            $dublaj_link = explode(',', $request->dublaj_link);
           
            for ($i = 0; $i < count($dublaj_menbe); $i++) {
                $movie->sources()->create([
                    'language' => 'dublaj',
                    'resource_name' => $dublaj_menbe[$i],
                    'sources' => $dublaj_link[$i]
                ]);
            }
        }

        if (strlen($request->altyazi_menbe) > 0) {
         
            $altyazi_menbe = explode(',', $request->altyazi_menbe);
            $altyazi_link = explode(',', $request->altyazi_link);
            for ($i = 0; $i < count($altyazi_menbe); $i++) {
                $movie->sources()->create([
                    'language' => 'altyazi',
                    'resource_name' => $altyazi_menbe[$i],
                    'sources' => $altyazi_link[$i]
                ]);
            }
            
        }

     



        return redirect()->route('movie.index')->with('success', 'You have added movie successfully');
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
        $movie = Movie::with(['sources','categories'])->findOrFail($id);
    
        return view('back.movie.editmovie',compact('movie'));
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
        
        $movie = Movie::findOrFail($id);
        $movie->title = $request->title;
        $movie->slug = Str::slug($request->title);

        $movie->country = $request->country;
        $movie->imdb = $request->imdb;
        $movie->duration = $request->duration;
        $movie->released = $request->released;;
        $movie->description = $request->description;;
      

        if ($request->hasFile('img')) {
            $imgName = Str::slug($request->title) . '.' . $request->img->getClientOriginalExtension();
            $request->img->move(public_path('movie'), $imgName);
            $movie->img = 'movie/' . $imgName;
        }

        $movie->save();

        foreach ($request->category as $category) {
            $movie->categories()->sync($category);
        }


      
        if (strlen($request->dublaj_menbe) > 0) {
           
            $dublaj_menbe = explode(',', $request->dublaj_menbe);
            $dublaj_link = explode(',', $request->dublaj_link);
            $movie->sources()->where('language','dublaj')->delete();
            for ($i = 0; $i < count($dublaj_menbe); $i++) {
                $movie->sources()->create([
                    'language' => 'dublaj',
                    'resource_name' => $dublaj_menbe[$i],
                    'sources' => $dublaj_link[$i]
                ]);
            }
        }

        if (strlen($request->altyazi_menbe) > 0) {
            
            $altyazi_menbe = explode(',', $request->altyazi_menbe);
            $altyazi_link = explode(',', $request->altyazi_link);
            $movie->sources()->where('language','altyazi')->delete();
            for ($i = 0; $i < count($altyazi_menbe); $i++) {
                $movie->sources()->create([
                    'language' => 'altyazi',
                    'resource_name' => $altyazi_menbe[$i],
                    'sources' => $altyazi_link[$i]
                ]);
            }
            
        }


        return redirect()->route('movie.index')->with('success', 'You have added movie successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $movie = Movie::findOrFail($id);
        $movie->categories()->detach();
        $movie->sources()->delete();
    

        if (File::exists($movie->img)) {
            File::delete(public_path('movie/' . $movie->img));
        }
        $movie->delete();

        return redirect()->route('movie.index')->with('success','You have successfully deleted new post');
    }
}
