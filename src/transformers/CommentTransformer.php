<?php

namespace Stormport\Package\comments\src\transformers;

use Jsdecena\Comments\Models\Comment;
use Jsdecena\Comments\repositories\UserRepository;
use League\Fractal;

class CommentTransformer extends Fractal\TransformerAbstract
{
    /**
     * @param Comment $comment
     *
     * @return array
     */
    public function transform(Comment $comment)
    {
        $userRepo = new UserRepository(config('comments.user'));

        return [
            'id' => (int) $comment->id,
            'content' => $comment->content,
            'subtype' => $comment->subtype,
            'source' => $comment->source,
            'ip_address' => $comment->ip_address,
            'user' => $userRepo->findUserById($comment->user_id),
            'created_at' => $comment->created_at,
            'updated_at' => $comment->updated_at
        ];
    }
}