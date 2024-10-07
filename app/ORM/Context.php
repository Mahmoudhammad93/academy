<?php
namespace App\ORM;

use App\Models\Course;

class Context {
    public static function get_enrolled_context($term_id){
        return Course::where('term_id', $term_id)
        ->join('context_enrollments','context_enrollments.context_id','courses.id')
        ->join('terms','terms.id','courses.term_id')
        ->where('context_enrollments.user_id',auth()->user()->id)
        ->where('terms.id', $term_id)
        ->get();
    }
}
