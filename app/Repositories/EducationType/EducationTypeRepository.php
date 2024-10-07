<?php

namespace App\Repositories\EducationType;
use App\Models\EducationType;
use App\Repositories\EducationType\EducationTypeRepositoryInterface;

class EducationTypeRepository implements EducationTypeRepositoryInterface
{
    public function getAll(){
        return EducationType::all();
    }

    public function create($array_data){

    }

    public function update($id, $array_data){

    }
}
