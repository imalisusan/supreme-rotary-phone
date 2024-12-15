<?php

namespace App\Models;

use App\Traits\HasUlid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class GroupCampaign extends Model
{
    use HasFactory, HasUlid, SoftDeletes;

    protected $fillable = [
        'group_id',
        'campaign_id',
        'ulid',
    ];

    public function group()
    {
        return $this->belongsTo(Group::class);
    }

    public function campaign()
    {
        return $this->belongsTo(Campaign::class);
    }
}
