<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EntertainmentVideo extends Model
{
    use HasFactory;

    protected $table = 'entertainment_video';
    protected $fillable = [
        'url',
        'cost',
        'user_id',
    ];
}
