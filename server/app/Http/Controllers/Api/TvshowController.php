<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\EpisodeResource;
use App\Http\Resources\SeasonResource;
use App\Http\Resources\TvshowResource;
use App\Models\Episode;
use App\Models\Season;
use App\Models\Tvshow;
use Illuminate\Http\Request;

class TvshowController extends Controller
{
    public function index()
    {
        $tvshows = Tvshow::latest()->get();
        return TvshowResource::collection($tvshows);
    }

    public function single($slug)
    {
        $tvshow = Tvshow::where('slug', $slug)->first();
        return new TvshowResource($tvshow);
    }

    public function singleepisode($episode)
    {


        $episode = Episode::findOrFail($episode);

        return new EpisodeResource($episode);
    }
}
