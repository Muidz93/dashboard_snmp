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
    
    public function scopeFilter($query, array $filters)
    {
        if(isset($filters['search']) ? $filters['search'] : false)
        {
            return $query->where('nama_chn', 'like', '%' . $filters['search'] . '%')
                ->orWhere('nmr', 'like', '%' . $filters['search']. '%')
                ->orWhere('downlink', 'like', '%' . $filters['search']. '%')
                ->orWhere('source', 'like', '%' . $filters['search']. '%')
                ->orWhere('freq', 'like', '%' . $filters['search']. '%')
                ->orWhere('pol', 'like', '%' . $filters['search']. '%')
                ->orWhere('sr', 'like', '%' . $filters['search']. '%')
                ->orWhere('metro', 'like', '%' . $filters['search']. '%')
                ->orWhere('multicast', 'like', '%' . $filters['search']. '%')
                ->orWhere('port', 'like', '%' . $filters['search']. '%')
                ->orWhere('kualitas', 'like', '%' . $filters['search']. '%');
        }
    }
    protected $casts = [
        'updated_at' => 'datetime',
        'created_at' => 'datetime'
    ];
}
