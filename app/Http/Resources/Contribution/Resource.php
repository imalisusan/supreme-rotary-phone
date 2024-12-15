<?php

namespace App\Http\Resources\Contribution;

use Illuminate\Http\Resources\Json\JsonResource;

class Resource extends JsonResource
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
            'id' => $this->id,
            'ulid' => $this->ulid,
            'campaign_id' => $this->campaign_id,
            'amount' => $this->amount,
            'time' => $this->time,
            'date' => $this->date,
            'campaign' => new \App\Http\Resources\Campaign\Resource($this->whenLoaded('campaign')),
            'created_at' => $this->created_at,
        ];
    }
}
