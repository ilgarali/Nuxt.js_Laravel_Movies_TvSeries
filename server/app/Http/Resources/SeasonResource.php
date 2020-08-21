<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SeasonResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'season_id'=>$this->id,
            'season'=>$this->season,
            'season_slug'=>$this->slug,
            'episodes'=>EpisodeResource::collection($this->episodes),
            // 'tv_show'=>new TvshowResource($this->tvshow)
        ];
    }
}
