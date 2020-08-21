<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class MovieResource extends JsonResource
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
            'movie_id'=>$this->id,
            'movie_title'=>$this->title,
            'movie_slug'=>$this->slug,
            'movie_img'=>$this->img,
            'country'=>$this->country,
            'imdb'=>$this->imdb,
            'duration'=>$this->duration,
            'released'=>$this->released,
            'post_description'=>$this->description,
            
            'categories'=> CategoryResource::collection($this->categories),
            'sources'=>ResourceResource::collection($this->sources)->groupBy('language')

        ];
    }
}
