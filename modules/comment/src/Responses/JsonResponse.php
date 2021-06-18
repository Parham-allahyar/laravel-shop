<?php

namespace Category\Responses;

use Illuminate\Support\Facades\Facade;
use Illuminate\Http\Response;
use Comment\Http\Resources\CommentResource;
class JsonResponse extends Facade
{
    public function destroy()
    {
        return response('deleted' , Response::HTTP_OK);
    }

    public function getAllComment($comment)
    {
        $comments =  new CommentResource($comment);
        return response($comments, Response::HTTP_OK);
    }

    public function getCommentById($comment)
    {
        $comment =  new CommentResource($comment);
        return response($comment, Response::HTTP_OK);
    }
}