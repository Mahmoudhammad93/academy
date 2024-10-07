<?php
namespace App\Repositories\Question;

interface QuestionRepositoryInterface {
    public function getAll();
    public function create();
    public function getByBankId($bank_id);
}
