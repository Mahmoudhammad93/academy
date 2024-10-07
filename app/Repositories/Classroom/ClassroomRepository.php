<?php

namespace App\Repositories\Classroom;

use App\Models\Classroom;
use App\Repositories\Classroom\ClassroomRepositoryInterface;

class ClassroomRepository implements ClassroomRepositoryInterface
{
    public function getAll()
    {
        return Classroom::all();
    }

    public function get($id){

        return Classroom::find($id);
    }

    public function store(array $data){

        return Classroom::create($data);
    }

    public function update($id,array $data){
        
        return Classroom::find($id)->update($data);
    }

    public function delete($id){

        return Classroom::destroy($id);
    }

}
