<?php

namespace App\Http\Resources;


use Illuminate\Http\Resources\Json\JsonResource;

class CategoryTvshowResource extends JsonResource
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
            'category_id'=>$this->id,
            'category'=>$this->category,
            'category_slug'=>$this->slug,
            'tvshows'=>TvshowResource::collection($this->tvshows)
        ];
    }
}
