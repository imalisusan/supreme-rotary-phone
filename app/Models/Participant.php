<?php

namespace App\Models;

use App\Traits\HasUlid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Participant extends Model
{
    use HasFactory, HasUlid, SoftDeletes;

    protected $fillable = [
        'group_id',
        'user_id',
        'participant_type',
        'status',
        'ulid',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function group()
    {
        return $this->belongsTo(Group::class, 'group_id');
    }

    public function contribution()
    {
        return $this->hasMany(Contribution::class);
    }
}
