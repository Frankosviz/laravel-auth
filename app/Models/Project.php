<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'slug',
        'technologies_used',
        'start_date',
        'end_date',
        'status',
        'url',
        'repository_url',
        'image_path',
    ];

}
