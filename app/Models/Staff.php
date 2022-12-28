<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'grade',
        'lob',
        'shortLOB',
        'bu',
        'shortBU',
        'practiceGroup',
        'shortPG',
        'office',
        'rackRate',
        'budRecovey',
        'costRate',
        'budgetUtil',
        'fte',
    ];
}
