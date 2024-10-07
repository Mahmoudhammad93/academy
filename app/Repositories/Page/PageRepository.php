<?php

namespace App\Repositories\Page;

use App\Models\Page;
use App\Repositories\Page\PageRepositoryInterface;

class PageRepository implements PageRepositoryInterface
{
    public function getAll()
    {
        return Page::all();
    }

    public function get($id){

        return Page::find($id);
    }

    public function store(array $data){

        return Page::create($data);
    }

    public function update($id,array $data){
        
        return Page::find($id)->update($data);
    }

    public function delete($id){

        return Page::destroy($id);
    }

}
