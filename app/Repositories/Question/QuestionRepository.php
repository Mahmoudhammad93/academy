<?php
namespace App\Repositories\Question;

use App\Models\Question;
use App\Repositories\Question\QuestionRepositoryInterface;

class QuestionRepository implements QuestionRepositoryInterface{

    public function getAll()
    {
        // TODO: Implement getAll() method.
    }

    public function create()
    {
        // TODO: Implement create() method.
    }

    public function getByBankId($bank_id){
        return Question::where('bank_id', $bank_id)->get();
    }
}
