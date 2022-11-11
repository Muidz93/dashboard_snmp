<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class encoder extends Model
{
    use HasFactory;
    public function scopeFilter($query, array $filters)
    {
        if(isset($filters['search']) ? $filters['search'] : false)
        {
            return $query->where('merk', 'like', '%' . $filters['search'] . '%')
                ->orWhere('control', 'like', '%' . $filters['search']. '%')
                ->orWhere('sn', 'like', '%' . $filters['search']. '%')
                ->orWhere('owner', 'like', '%' . $filters['search']. '%')
                ->orWhere('type', 'like', '%' . $filters['search']. '%')
                ->orWhere('control', 'like', '%' . $filters['search']. '%')
                ->orWhere('used', 'like', '%' . $filters['search']. '%');
        }
    }
}
