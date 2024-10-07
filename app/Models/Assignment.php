<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assignment extends Model
{
    use HasFactory;
    protected $fillable = ['type', 'assignmentable_id', 'assignmentable_type', 'description'];

    public function assignmentable(){
        return $this->morphTo();
    }
}
