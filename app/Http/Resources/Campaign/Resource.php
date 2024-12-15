<?php

namespace App\Http\Resources\Campaign;

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
            'title' => $this->title,
            'description' => $this->description,
            'start_date' => $this->start_date,
            'end_date' => $this->end_date,
            'time' => $this->time,
            'group' => new \App\Http\Resources\Group\Resource($this->whenLoaded('group')),
            'contributions' => \App\Http\Resources\Contribution\Resource::collection($this->whenLoaded('contributions')),
            'transactions' => \App\Http\Resources\Transaction\Resource::collection($this->whenLoaded('transactions')),
            'created_at' => $this->created_at,
        ];
    }
}
