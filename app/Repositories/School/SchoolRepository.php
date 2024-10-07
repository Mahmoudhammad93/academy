<?php

namespace App\Repositories\School;

use App\Models\School;
use App\Repositories\School\SchoolRepositoryInterface;

class SchoolRepository implements SchoolRepositoryInterface
{
    public function getAll()
    {
        return School::all();
    }

    public function get($id){

        return School::find($id);
    }

    public function store(array $data){

        return School::create($data);
    }

    public function update($id,array $data){
        
        return School::find($id)->update($data);
    }

    public function delete($id){

        return School::destroy($id);
    }

}
