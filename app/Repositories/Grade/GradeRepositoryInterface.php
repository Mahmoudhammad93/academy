<?php

namespace App\Repositories\Grade;

interface GradeRepositoryInterface
{
    public function getAll($eduObject);

    public function get($id);

    public function store(array $data);

    public function update($id,array $data);

    public function delete($id);

}
