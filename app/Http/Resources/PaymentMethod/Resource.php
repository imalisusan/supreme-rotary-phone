<?php

namespace App\Http\Resources\PaymentMethod;

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
            'method_name' => $this->method_name,
            'description' => $this->description,
            'transaction_fee' => $this->transaction_fee,
            'is_active' => $this->is_active,
            'transactions' => \App\Http\Resources\Transaction\Resource::collection($this->whenLoaded('transactions')),
            'groups' => \App\Http\Resources\Group\Resource::collection($this->whenLoaded('groups')),
            'participants' => \App\Http\Resources\Participant\Resource::collection($this->whenLoaded('participants')),
            'created_at' => $this->created_at,
        ];
    }
}
