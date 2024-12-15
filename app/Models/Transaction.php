<?php

namespace App\Models;

use App\Traits\HasUlid;
use Cknow\Money\Money;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transaction extends Model
{
    use HasFactory, HasUlid, SoftDeletes;

    protected $fillable = [
        'contribution_id',
        'payment_method_id',
        'amount',
        'payment_ref',
        'description',
        'receipt_number',
        'ulid',
        'transaction_code',
        'status',
        'payment_details',
    ];

    protected $casts = [
        'payment_details' => 'json',
    ];

    public function contribution()
    {
        return $this->belongsTo(Contribution::class);
    }

    public function paymentMethod()
    {
        return $this->belongsTo(PaymentMethod::class);
    }

    protected function amount(): Attribute
    {
        return Attribute::make(
            get: fn (int $value) => Money::KES($value),
            set: fn ($value) => match (gettype($value)) {
                'float' => Money::KES($value)->getAmount(),
                'object' => $value->getAmount(),
                default => Money::KES($value)->getAmount(),
            },
        );
    }
}
