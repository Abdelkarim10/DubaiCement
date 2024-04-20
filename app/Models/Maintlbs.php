<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Maintlbs extends Model
{
    use HasFactory;
    protected $fillable = [
        // add this line
        // your other attributes go here
        'name',
        'area',
        'equipeCode',
        'from_date',
        'to_date',
        // other attributes...
    ];

    public function tables()
    {
        return $this->hasMany(Table::class, 'maintlbs_id')->orderBy('date');
    }
}
