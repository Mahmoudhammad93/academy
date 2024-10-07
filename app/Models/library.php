<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class library extends Model
{
    use HasFactory;
    protected $fillable = ['title','file_type','file_extension','url','path','description','course_id'];
}
