<?php

namespace App\Repositories\Unit;

use App\Models\Unit;
use App\Repositories\Unit\UnitRepositoryInterface;

class UnitRepository implements UnitRepositoryInterface
{

    public function store(array $data){

        return Unit::create($data);
    }

    public function getUnitsByCurriculumId($curr_id){
        return Unit::where('curriculum_id', $curr_id)->with('assignments')->select('id','name_en','name_ar')->get();
    }

}
