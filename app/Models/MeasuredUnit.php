<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MeasuredUnit extends Model
{
    use HasFactory;

    protected $fillable = ['unit', 'description',];
}
