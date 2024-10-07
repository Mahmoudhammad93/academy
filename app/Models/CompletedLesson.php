<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompletedLesson extends Model
{
    use HasFactory;

    protected $table = 'completed_lessons';
    protected $fillable = ['enrol_id','lesson_id','meta_data'];
}
