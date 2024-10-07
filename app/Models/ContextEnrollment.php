<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContextEnrollment extends Model
{
    use HasFactory;

    protected $fillable = ['user_id','context_type','context_id','role','status','meta_data','enrollment_date','complete_date'];

}
