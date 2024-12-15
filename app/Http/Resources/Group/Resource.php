<?php

namespace App\Http\Resources\Group;

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
            'name' => $this->name,
            'description' => $this->description,
            'campaigns' => \App\Http\Resources\Campaign\Resource::collection($this->whenLoaded('campaigns')),
            'contributions' => \App\Http\Resources\Contribution\Resource::collection($this->whenLoaded('contributions')),
            'payment_methods' => \App\Http\Resources\PaymentMethod\Resource::collection($this->whenLoaded('paymentMethods')),
            'created_at' => $this->created_at,
        ];
    }
}
