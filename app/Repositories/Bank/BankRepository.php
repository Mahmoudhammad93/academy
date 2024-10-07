<?php

namespace App\Repositories\Bank;

use App\Models\Bank;
use App\Repositories\Bank\BankRepositoryInterface;

class BankRepository implements BankRepositoryInterface
{
    public function getCourseBanks($course_id){
        return Bank::where('course_id', $course_id)->get();
    }
}
