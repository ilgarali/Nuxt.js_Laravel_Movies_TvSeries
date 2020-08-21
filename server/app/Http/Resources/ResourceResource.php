<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ResourceResource extends JsonResource
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
            'source_id'=>$this->id,
            
            'sources'=>$this->sources,
            'language'=>$this->language,
            
            'resource_name'=>$this->resource_name
        ];
    }
}
