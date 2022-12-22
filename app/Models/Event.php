<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
    ];

    protected $casts = [
        'announcement_date' => 'datetime',
        'event_date' => 'datetime',
    ];
}
