<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class EventSubscription extends Model
{
    use HasFactory;

    protected $table = 'event_subscription';
    protected $fillable = [
        'event_id',
        'child_id',
    ];

    public function child(): BelongsTo
    {
        return $this->belongsTo(Child::class);
    }

    public function event(): BelongsTo
    {
        return $this->belongsTo(Event::class);
    }

    public function eventSubscription(): BelongsTo
    {
        return $this->belongsTo(EventSubscription::class);
    }

}
