<?php

namespace App\Repositories\Subject;

use App\Models\Subject;
use App\Repositories\Subject\SubjectRepositoryInterface;

class SubjectRepository implements SubjectRepositoryInterface
{
    public function getAll()
    {
        return \App\Models\Subject::all();
    }

    public function get($id){

        return Subject::find($id);
    }

    public function store(array $data){

        return Subject::create($data);
    }

    public function update($id,array $data){
        
        return Subject::find($id)->update($data);
    }

    public function delete($id){

        return Subject::destroy($id);
    }

}
