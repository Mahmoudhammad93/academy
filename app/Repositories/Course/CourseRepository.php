<?php

namespace App\Repositories\Course;

use App\Models\Course;
use App\Repositories\Course\CourseRepositoryInterface;

class CourseRepository implements CourseRepositoryInterface
{
    public function getAll()
    {
        return Course::with('assignments')->get();
    }

    public function get($id){

        return Course::with('assignments')->find($id);
    }

    public function store(array $data){
        $course = new Course;
        return $course->assignments()->create($data);
    }

    public function update($id,array $data){

        return Course::find($id)->update($data);
    }

    public function delete($id){

        return Course::assignments()->destroy($id);
    }

}
