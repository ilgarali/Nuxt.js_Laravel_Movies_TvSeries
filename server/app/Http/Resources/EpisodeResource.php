<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class EpisodeResource extends JsonResource
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
            'episode_id'=>$this->id,
            'episode_name'=>$this->episode_name,
            'episode_slug'=>$this->slug,
            'resource'=> ResourceResource::collection($this->resources)->groupBy('language'),
           
        ];
    }
}
