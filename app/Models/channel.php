<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class channel extends Model
{
    use HasFactory;
    protected $fillable = [
        'title', 'channels'
    ];

    protected $guarded = ['id', 'updated_at' , 'created_at'];

    protected $casts = [
        'updated_at' => 'datetime',
        'created_at' => 'datetime'
    ];
}
