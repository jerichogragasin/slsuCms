<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Output extends Model
{
    use HasFactory;
    protected $fillable = [
        'area_id',
        'parameter_id',
        'title',
        'description',
        'files',
    ];
}
