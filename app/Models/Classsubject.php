<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classsubject extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'status',
        'subject_id',
        'created_by',
        'class_id',
    ];

}
