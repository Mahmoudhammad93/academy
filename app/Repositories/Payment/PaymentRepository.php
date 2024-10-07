<?php

namespace App\Repositories\Payment;

use App\Models\payment;
use App\Repositories\Payment\PaymentRepositoryInterface;

class PaymentRepository implements PaymentRepositoryInterface
{
    public function getAll()
    {
        return payment::all();
    }

    public function get($id){

        return payment::find($id);
    }

    public function store(array $data){

        return payment::create($data);
    }

    public function update($id,array $data){
        
        return payment::find($id)->update($data);
    }

    public function delete($id){

        return payment::destroy($id);
    }

}
