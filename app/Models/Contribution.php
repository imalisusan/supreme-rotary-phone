<?php

namespace App\Models;

use App\Traits\HasUlid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Contribution extends Model
{
    use HasFactory, HasUlid, SoftDeletes;

    protected $fillable = [
        'participant_id',
        'amount',
        'ulid',
        'status',
        'transaction_reference',
        'payment_details',
    ];

    protected $casts = [
        'status' => 'string',
        'payment_details' => 'json',
    ];

    const INCLUDES = [
        'participant',
        'transactions',
    ];

    public function participant()
    {
        return $this->belongsTo(Participant::class);
    }

    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }
}
