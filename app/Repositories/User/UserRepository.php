<?php

namespace App\Repositories\User;

use App\Models\User;
use App\Repositories\User\UserRepositoryInterface;

class UserRepository implements UserRepositoryInterface
{
    public function getAll()
    {
        return User::all();
    }

    public function get($id){

        return User::find($id);
    }

    public function store(array $data){

        return User::create($data);
    }

    public function update($id,array $data){

        return User::find($id)->update($data);
    }

    public function delete($id){

        return User::destroy($id);
    }

    public function get_inactive_users(){

        return User::where(['active' => 0])->get();
    }

    public function activate_user($id){

        return User::find($id)->update([ 'active' => 1]);
    }
    public function user_grade($id){

        // return GradeUser::where(['user_id' => $id ,''=>''])->get();
        return GradeUser::where(['user_id' => $id , 'context_type' => 'grade'])->first();
        // return DB::table('grade_users')
        //     ->join('grades', 'grade_users.grade_id', '=', 'grades.id')
        //     ->where(['context_type' => 'grade'])
        //     ->get();
        
    }
    public function user_level($id){

        // return GradeUser::where(['user_id' => $id ,''=>''])->get();
        return GradeUser::where(['user_id' => $id , 'context_type' => 'level'])->first();
        // return DB::table('grade_users')
        //     ->join('grades', 'grade_users.grade_id', '=', 'grades.id')
        //     ->where(['context_type' => 'level'])
        //     ->get();
        
    }
}
