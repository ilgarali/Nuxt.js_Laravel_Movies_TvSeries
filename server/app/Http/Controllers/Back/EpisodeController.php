<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\Episode;
use App\Models\Season;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class EpisodeController extends Controller
{
    public function episode($id)
    {
        $season = Season::findOrFail($id);
        
        return view('back.episode.addepisode',compact('season'));


    }

    public function store($id,Request $request)
    {
     
        $season = Season::findOrFail($id);
        $episode =  $season->episodes()->create([
            'episode_name'=>$request->episode_name,
            'slug'=>Str::slug($request->episode_name)
        ]);
        if (strlen($request->dublaj_menbe) > 0) {
            $dublaj_menbe = explode(',', $request->dublaj_menbe);
            $dublaj_link = explode(',', $request->dublaj_link);
           
            for ($i = 0; $i < count($dublaj_menbe); $i++) {
                $episode->resources()->create([
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
                $episode->resources()->create([
                    'language' => 'altyazi',
                    'resource_name' => $altyazi_menbe[$i],
                    'sources' => $altyazi_link[$i]
                ]);
            }
            
        }

        return redirect()->route('tvshow.index');


    }

    public function edit(int $id)
    {
        $episode = Episode::findOrFail($id);

        return view('back.episode.editepisode',compact('episode'));
    }

    public function update(int $id,Request $request)
    {
       
        $episode =  Episode::findOrFail($id);
     
        $episode->episode_name = $request->episode_name;
        $episode->slug = Str::slug($request->episode_name);
        $episode->resources()->delete();

        if (strlen($request->dublaj_menbe) > 0) {
            $dublaj_menbe = explode(',', $request->dublaj_menbe);
            $dublaj_link = explode(',', $request->dublaj_link);
           
            for ($i = 0; $i < count($dublaj_menbe); $i++) {
                $episode->resources()->create([
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
                $episode->resources()->create([
                    'language' => 'altyazi',
                    'resource_name' => $altyazi_menbe[$i],
                    'sources' => $altyazi_link[$i]
                ]);
            }
            
        }
        $episode->save();


        return redirect()->route('season.index')->with('success', 'You have edited Episode successfully');
    }

    public function destroy(int $id)
    {
        $episode = Episode::findOrFail($id);
        $episode->resources()->delete();
        dd($episode->resources());
        $episode->delete();
        return redirect()->back()->with('success', 'You have deleted Episode successfully');
    }
}
