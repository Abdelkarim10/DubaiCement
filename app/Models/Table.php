<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Table extends Model
{
    use HasFactory;

    protected $table = 'tables';
    protected $primaryKey = 'id';
    protected $fillable = [

        'date',
        'time',
        'kilo_current',
        'kilo_consumed',
        'hour_current',
        'hour_consumed',
        'dieselQty',
        'concreteQtyM3',
        'trips',
        'tripPerGal',
        'concreteM3PerGal',
        'maintlbs_id',
    ];

  
    public function maintlbs()
    {
        return $this->belongsTo(Maintlbs::class, 'maintlbs_id');
    }
    public function scopeSumDieselQty($query, $maintlbsId)
    {
        return $query->where('maintlbs_id', $maintlbsId)->sum('dieselQty');
    }
}

