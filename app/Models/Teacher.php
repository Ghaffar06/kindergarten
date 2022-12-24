<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Teacher extends Model
{
    use HasFactory;

    protected $table = 'teacher';
    public $timestamps = false;
    protected $fillable = [
        'id',
        'admin_confirmed',
        'user_id',
    ];

    public function articles(): HasMany
    {
        return $this->hasMany(Article::class);
    }

    public function entertainmentVideos(): HasMany
    {
        return $this->hasMany(EntertainmentVideo::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
