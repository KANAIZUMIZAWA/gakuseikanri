<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class School_grades extends Model
{
    use HasFactory;

    protected $fillable = [
        'grade',
        'term',
        'japanese',
        'math',
        'science',
        'scocial_studies',
        'music',
        'home_economics',
        'english',
        'art',
        'health_and_physical_education'
    ];

}
