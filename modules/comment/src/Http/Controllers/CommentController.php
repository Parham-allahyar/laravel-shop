<?php

namespace Comment\Http\Controllers;


use App\Http\Controllers\Controller;

use Comment\Facade\commentProviderFacade;

class CommentController extends Controller
{

    public function getCommentById($id)
    {
        commentProviderFacade::getCommentById($id);
        
    }


    public function getAllComment()
    {
        commentProviderFacade::getAllComment();
    }


    public function destroy($id)
    {
        commentProviderFacade::destroy($id);

    }
}
