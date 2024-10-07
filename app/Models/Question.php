<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;
    protected $fillable = ["title", "mark", "answer", "options","bank_id","unit_id","lesson_id","level","type","curriculum_id", "has_image"];
}
