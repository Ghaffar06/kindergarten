<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;
    protected $table = 'report';
    protected $fillable = [
        'title',
        'message',
        'date_repo',
        'handled',
    ];

    protected $casts = [
        'date_repo' => 'datetime',
    ];
}
