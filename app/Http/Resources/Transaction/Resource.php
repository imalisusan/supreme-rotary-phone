<?php

namespace App\Http\Resources\Transaction;

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
            'payment_method_id' => $this->payment_method_id,
            'amount' => $this->amount,
            'transaction_date' => $this->transaction_date,
            'transaction_time' => $this->transaction_time,
            'payment_ref' => $this->payment_ref,
            'description' => $this->description,
            'response_code' => $this->response_code,
            'receipt_number' => $this->receipt_number,
            'campaign' => new \App\Http\Resources\Campaign\Resource($this->whenLoaded('campaign')),
            'payment_method' => new \App\Http\Resources\PaymentMethod\Resource($this->whenLoaded('paymentMethod')),
            'created_at' => $this->created_at,

        ];
    }
}
