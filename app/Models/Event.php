<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Event extends Model
{
    use HasFactory;

    protected $table = 'event';
    protected $fillable = [
        'title',
        'text',
        'announcement_date',
        'event_date',
        'level',
        'user_id',
    ];

    protected $casts = [
        'announcement_date' => 'datetime',
        'event_date' => 'datetime',
    ];

    public function eventSubscriptions(): HasMany
    {
        return $this->hasMany(EventSubscription::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }


}
