<?php

namespace App\Http\Controllers\backend\student;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CommentsController extends Controller
{
    //
    public function storeComment(Request $request, Comment $comment){
        return $this->store($request, $comment, 0);
    }

    public function getComments(Comment $comment,$courseId){
        return $this->get($comment, $courseId, 0);
    }

    public function storeReplay(Request $request, Comment $comment){
        return $this->store($request, $comment, $request['parent_id']);
    }

    public function getReplies(Comment $comment,$courseId,$parent_id){
        return $this->get($comment, $courseId, $parent_id);
    }

    private function store($request, $model, $parent_id){
        $comment = new $model;
        $comment->description = $request['description'];
        $comment->course_id = $request['courseId'];
        $comment->user_id = auth()->user()->id;
        $comment->parent_id = $parent_id;
        $comment->save();

        $comment->name = auth()->user()->name;
        return $comment;
    }

    private function get($model, $course_id, $parent_id){
        return $model::where('course_id', $course_id)
        ->join('users','users.id','comments.user_id')
        ->where('comments.parent_id', $parent_id)
        ->select('comments.description','comments.id','comments.parent_id','comments.user_id','comments.course_id','users.name')
        ->orderBy('comments.updated_at','desc')
        ->get();
    }
}
