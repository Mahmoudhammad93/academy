<?php

namespace App\Repositories\Payment;

interface PaymentRepositoryInterface
{
    public function getAll();

    public function get($id);

    public function store(array $data);

    public function update($id,array $data);

    public function delete($id);
    
}
