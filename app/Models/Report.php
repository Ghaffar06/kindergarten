<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Report extends Model
{
    use HasFactory;

    protected $table = 'report';
    public $timestamps = false;
    protected $fillable = [
        'title',
        'message',
        'date_repo',
        'handled',
        'user_id',
    ];

    protected $casts = [
        'date_repo' => 'datetime',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
