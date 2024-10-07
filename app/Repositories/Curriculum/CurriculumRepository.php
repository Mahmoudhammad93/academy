<?php

namespace App\Repositories\Curriculum;

use App\Models\Curriculum;
use App\Repositories\Curriculum\CurriculumRepositoryInterface;

class CurriculumRepository implements CurriculumRepositoryInterface
{
    public function getAll()
    {
        return Curriculum::all();
    }

    public function get($id)
    {
        return Curriculum::find($id);
    }

    public function store(array $data)
    {
        return Curriculum::create($data);
    }

    public function update($id, array $data)
    {
        return Curriculum::find($id)->update($data);
    }

    public function delete($id)
    {
        return Curriculum::destroy($id);
    }
    public function getByCourseId($course_id)
    {
        $lang = app()->getLocale();
        return Curriculum::where('course_id', $course_id)->select('id', 'name_en')->get();
    }
}
