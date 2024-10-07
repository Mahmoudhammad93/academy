<?php

namespace App\Repositories\Term;

use App\Models\Term;
use App\Repositories\Term\TermRepositoryInterface;

class TermRepository implements TermRepositoryInterface
{
    public function getAll()
    {
        return Term::all();
    }

    public function get($id){

        return Term::find($id);
    }

    public function store(array $data){

        return Term::create($data);
    }

    public function update($id,array $data){
        
        return Term::find($id)->update($data);
    }

    public function delete($id){

        return Term::destroy($id);
    }

}
