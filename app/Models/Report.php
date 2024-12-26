<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;

    protected $fillable = [
        'name_akta',
        'date_report',
        'ppat_id'
    ];

    public function ppat()
    {
        return $this->belongsTo(Ppat::class);
    }
}
