<?php

namespace App\Repositories\User;

interface UserRepositoryInterface
{
    public function getAll();

    public function get($id);

    public function store(array $data);

    public function update($id,array $data);

    public function delete($id);

    public function get_inactive_users();

    public function activate_user($id);

    public function user_grade($id); 

    public function user_level($id); 
    
}
