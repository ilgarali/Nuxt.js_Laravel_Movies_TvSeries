<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\MovieResource;
use App\Models\Movie;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index()
    {
        $movies = Movie::latest()->paginate(3);
  
        return MovieResource::collection($movies);
    }

    public function single($slug)
    {
        $movie = Movie::where('slug',$slug)->firstOrFail();
        return new MovieResource($movie);
    }

   
}
