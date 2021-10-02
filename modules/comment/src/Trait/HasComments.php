<?php

namespace Comment\Trait;

use Comment\Database\Models\Comment;
use PHPUnit\Framework\MockObject\Builder\Identity;

trait HasComments
{
  public function comments()
  {
    return $this->morphMany(Comment::class, 'commentable');
  }
  public function commentcreats()
  {
    return $this->morphMany(Comment::class, 'creatable');
  }

  // public function comment(string $comment, $parentId )
  // {
   
  //   $comment = new Comment([
  //     'name' => $comment,
  //     'parent_id' => $parentId,
  //     'commentable_id'   => $this->getKey(),
  //     'commentable_type' => get_class(),
  //   ]);
    
  //   return $this->comments()->save($comment);
  // }




  // public function commentAsUser($userId, string $comment , $parentId)
  // {
  //     $commentClass = config('comments.comment_class');

  //     $comment = new $commentClass([
  //         'comment' => $comment,
  //        // 'is_approved' => ($user instanceof Commentator) ? ! $user->needsCommentApproval($this) : false,
  //         'user_id' => $userId,
  //         'parent_id' => $parentId,
  //         'commentable_id' => $this->getKey(),
  //         'commentable_type' => get_class(),
  //     ]);

  //     return $this->comments()->save($comment);
  // }






}
