<?php

namespace App\Repositories\Curriculum;

interface CurriculumRepositoryInterface
{
    public function getAll();

    public function get($id);

    public function store(array $data);

    public function update($id,array $data);

    public function delete($id);

    public function getByCourseId($course_id);

}
