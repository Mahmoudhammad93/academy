<?php

namespace App\Repositories\Classroom;

interface ClassroomRepositoryInterface
{
    public function getAll();

    public function get($id);

    public function store(array $data);

    public function update($id,array $data);

    public function delete($id);
    
}
