<?php

namespace App\Models;

use App\Traits\HasUlid;
use Cknow\Money\Money;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Activitylog\LogOptions;
use Spatie\Activitylog\Traits\LogsActivity;

class Disbursement extends Model
{
    use HasFactory;
    use HasUlid;
    use LogsActivity;
    use SoftDeletes;

    protected $fillable = [
        'contribution_id',
        'disbursement_reference',
        'amount',
        'status',
        'disbursement_details',
    ];

    protected $casts = [
        'disbursement_details' => 'array',
    ];

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

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
            ->logAll();
    }
}
