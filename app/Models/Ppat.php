<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ppat extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'address'
    ];

    public function reports()
    {
        return $this->hasMany(Report::class);
    }
}
