<?php

namespace App\Repositories\EducationType;

interface EducationTypeRepositoryInterface
{
    public function getAll();
    public function create($array_data);  
    public function update($id, $array_data);

}
