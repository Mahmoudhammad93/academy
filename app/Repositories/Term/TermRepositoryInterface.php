<?php

namespace App\Repositories\Term;

interface TermRepositoryInterface
{
    public function getAll();

    public function get($id);

    public function store(array $data);

    public function update($id,array $data);

    public function delete($id);
    
}
