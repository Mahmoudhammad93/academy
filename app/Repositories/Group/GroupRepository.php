<?php

namespace App\Repositories\Group;

use App\Models\Group;
use App\Repositories\Group\GroupRepositoryInterface;

class GroupRepository implements GroupRepositoryInterface
{
    public function getAll()
    {
        return Group::all();
    }

    public function get($id){

        return Group::find($id);
    }

    public function store(array $data){

        return Group::create($data);
    }

    public function update($id,array $data){
        
        return Group::find($id)->update($data);
    }

    public function delete($id){

        return Group::destroy($id);
    }

}
