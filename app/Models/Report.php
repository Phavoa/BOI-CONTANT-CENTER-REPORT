<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;
    protected $fillable = [
        'states', // Add 'states' to the fillable array
        // Add other columns here if needed
        'entry_date',
        'entries',
        'update',
        'requests',
        'payment_issues',
        'wrong_location',
        'call_dropped',
        'total',
    ];
}
