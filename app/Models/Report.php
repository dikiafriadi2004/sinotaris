<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;

    protected $fillable = [
        'name_report',
        'date_report',
        'ppat_id',
        'doc_report',
        'doc_finding'
    ];

    public function ppat()
    {
        return $this->belongsTo(Ppat::class);
    }
}
