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
        'doc_report',
        'status',
        'doc_findings'
    ];

    public function notaris()
    {
        return $this->belongsTo(Notaris::class);
    }
}
