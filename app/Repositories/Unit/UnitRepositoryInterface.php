<?php

namespace App\Repositories\Unit;

interface UnitRepositoryInterface
{
    public function store(array $data);
    public function getUnitsByCurriculumId($curr_id);

}
