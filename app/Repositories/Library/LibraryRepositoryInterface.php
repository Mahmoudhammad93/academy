<?php

namespace App\Repositories\Library;

interface LibraryRepositoryInterface
{
    public function getAll();

    public function get($id);

    public function store(array $data);

    public function update($id,array $data);

    public function delete($id);
    
    public function show($type);
}
