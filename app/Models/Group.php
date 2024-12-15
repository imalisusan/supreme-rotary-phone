<?php

namespace App\Models;

use App\Traits\HasUlid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Group extends Model
{
    use HasFactory, HasUlid, SoftDeletes;

    protected $fillable = [
        'name',
        'description',
        'ulid',

    ];

    public function campaigns()
    {
        return $this->hasMany(Campaign::class);
    }

    public function participants()
    {
        return $this->hasMany(Participant::class);
    }

    public function paymentMethod()
    {
        return $this->belongsToMany(PaymentMethod::class);
    }
}
