<?php

namespace Comment\Repositorie;

use  Comment\Database\Models\Comment;
use Illuminate\Support\Facades\Auth;
use User\Database\Models\User;
class CommentRepository
{

    public function getCommentById($id)
    {
        $Comments = Comment::find($id)->with('childs')->where('parent_id', 0)->get();
        return $Comments;
    }
    public function getUserComment()
    {
        
        $user =  Auth::user();
        $user =  User::find(1);
        $Comments =Comment::where('commentable_id', $user->id)->get();
        return $Comments;
    }
    public function getAllComment()
    {
        $Comments = Comment::with('childs')->where('parent_id', 0)->get();
        return $Comments;
    }
    public function destroy($id)
    {
        $comment = Comment::find($id);
        $comment->delete();
    }
}
