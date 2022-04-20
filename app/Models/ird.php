<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ird extends Model
{
    use HasFactory;
    protected $fillable = [
        'title', 'irds'
    ];

    protected $guarded = ['updated_at' , 'created_at'];

    public function scopeFilter($query, array $filters)
    {
        if(isset($filters['search']) ? $filters['search'] : false)
        {
            return $query->where('merk', 'like', '%' . $filters['search'] . '%')
                ->orWhere('control', 'like', '%' . $filters['search']. '%')
                ->orWhere('sn', 'like', '%' . $filters['search']. '%')
                ->orWhere('owner', 'like', '%' . $filters['search']. '%') 
                ->orWhere('channel', 'like', '%' . $filters['search']. '%');
        }
    }

    protected $casts = [
        'updated_at' => 'datetime',
        'created_at' => 'datetime'
    ];
}
