<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expens extends Model
{
    use HasFactory;

    protected $fillable = [
        'phase',
        'category',
        'description',
        'qty',
        'costPerUnit',
        'cost',
        'recoveryPercent',
        'recovery',
    ];
}
