<?php

namespace App\Http\Resources\Participant;

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
            'group_id' => $this->group_id,
            'participant_type' => $this->participant_type,
            'group' => new \App\Http\Resources\Group\Resource($this->whenLoaded('group')),
            'created_at' => $this->created_at,
        ];
    }
}
