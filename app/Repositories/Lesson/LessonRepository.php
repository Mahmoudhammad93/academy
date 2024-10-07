<?php

namespace App\Repositories\Lesson;

use App\Models\Lesson;
use App\Repositories\Lesson\LessonRepositoryInterface;

class LessonRepository implements LessonRepositoryInterface
{
    public function getUnitLessons($unit_id){
        return Lesson::where('unit_id', $unit_id)->get();
    }
}
