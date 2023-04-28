<?php

namespace App\Http\Resources\api;

use Illuminate\Http\Resources\Json\JsonResource;

class ResumeResource extends JsonResource
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
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'job_role' => $this->job_role,
            'year_of_exp' => $this->year_of_exp,
            'current_ctc' => $this->current_ctc,
            'exp_ctc' => $this->exp_ctc,
            'job_sector' => $this->job_sector,
            'resume' => $this->resume,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
