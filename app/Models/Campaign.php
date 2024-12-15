<?php

namespace App\Models;

use App\Traits\HasUlid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Campaign extends Model
{
    use HasFactory, HasUlid, SoftDeletes;

    protected $fillable = [
        'title',
        'description',
        'start_date',
        'end_date',
        'time',
        'ulid',
    ];

    public function group()
    {
        return $this->belongsTo(Group::class);
    }

    public function contributions()
    {
        return $this->hasMany(Contribution::class);
    }
}
