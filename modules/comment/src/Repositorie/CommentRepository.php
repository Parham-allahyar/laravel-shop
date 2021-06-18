<?php

namespace Comment\Repositorie;

use  Comment\Database\Models\Comment;

class CommentRepository
{

    public function getCommentById($id)
    {
        $Comments = Comment::find($id)->with('childs')->where('parent_id', 0)->get();
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
