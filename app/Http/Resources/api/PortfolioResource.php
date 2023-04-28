<?php

namespace App\Http\Resources\api;

use Illuminate\Http\Resources\Json\JsonResource;

class PortfolioResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'portfolio_category' => $this->portfolio_category,
            'title' => $this->title,
            'tags' => $this->tags,
            'description' => $this->description,
            'portfolio_image' => env('APP_URL') . '/uploads/portfolio/' . $this->portfolio_image,

        ];
    }






    
}
