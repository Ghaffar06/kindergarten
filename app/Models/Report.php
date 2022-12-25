<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Report extends Model
{
    use HasFactory;

    protected $table = 'report';
    protected $fillable = [
        'title',
        'message',
        'handled',
        'user_id',
    ];

  

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
