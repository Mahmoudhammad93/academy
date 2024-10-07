<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GradeUser extends Model
{
    use HasFactory;

    protected $table = 'grade_users';

    protected $fillable = ['grade_id','user_id','level_id'];

}
