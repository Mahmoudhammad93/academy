<?php

namespace App\Repositories\Grade;

use App\Models\Grade;
use App\Repositories\Grade\GradeRepositoryInterface;

class GradeRepository implements GradeRepositoryInterface
{
    public function getAll($eduObject)
    {
        return Grade::orderBy('parent_id')->where('parent_id',0)->where('education_type_id', $eduObject->id)->get();
    }

    public function get($id){

        return Grade::find($id);
    }

    public function store(array $data){

        return Grade::create($data);
    }

    public function update($id,array $data){

        return Grade::find($id)->update($data);
    }

    public function delete($id){

        return Grade::destroy($id);
    }
    public function get_grades_for_group(){

        return Grade::where('parent_id' ,'!=', 0)->get();
    }
}
