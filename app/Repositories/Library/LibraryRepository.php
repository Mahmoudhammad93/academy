<?php

namespace App\Repositories\Library;

use App\Models\library;
use App\Repositories\Library\LibraryRepositoryInterface;

class LibraryRepository implements LibraryRepositoryInterface
{
    public function getAll()
    {
        return Library::all();
    }

    public function get($id){

        return Library::find($id);
    }

    public function store(array $data){

        return Library::create($data);
    }

    public function update($id,array $data){
        
        return Library::find($id)->update($data);
    }

    public function delete($id){

        return Library::destroy($id);
    }

    public function show($type){

        return Library::where('file_type' ,'LIKE', $type)->get();
    }

}
