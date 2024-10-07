<?php

namespace App\Repositories\Country;

use App\Models\Country;
use App\Repositories\Country\CountryRepositoryInterface;

class CountryRepository implements CountryRepositoryInterface
{
    public function getAll()
    {
        return Country::all();
    }

    public function get($id){

        return Country::find($id);
    }

    public function store(array $data){

        return Country::create($data);
    }

    public function update($id,array $data){
        
        return Country::find($id)->update($data);
    }

    public function delete($id){

        return Country::destroy($id);
    }

}
