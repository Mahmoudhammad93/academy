<?php

namespace App\Repositories\Role;

use Spatie\Permission\Models\Role;
use App\Repositories\Role\RoleRepositoryInterface;

class RoleRepository implements RoleRepositoryInterface
{
    public function getAll()
    {
        return Role::all();
    }

    public function get($id){

        return Role::find($id);
    }

    public function store(array $data){

        return Role::create($data);
    }

    public function update($id,array $data){
        
        return Role::find($id)->update($data);
    }

    public function delete($id){

        return Role::destroy($id);
    }

}
