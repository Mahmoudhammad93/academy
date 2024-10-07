<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseTimetable extends Model
{
    use HasFactory;

    protected $fillable = ['name_en','name_ar','week_day','week','month','year','from','to','course_id'];

}
