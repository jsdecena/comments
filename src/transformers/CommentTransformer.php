<?php

namespace Stormport\Package\comments\src\transformers;

use Jsdecena\Comments\Models\Comment;
use League\Fractal;
use Stormport\Persons\Person;
use Stormport\Persons\Repositories\PersonRepository;

class CommentTransformer extends Fractal\TransformerAbstract
{
    /**
     * @param Comment $comment
     *
     * @return array
     * @throws \Stormport\Persons\Exceptions\PersonNotFoundErrorException
     */
    public function transform(Comment $comment)
    {
        $userRepo = new PersonRepository(new Person);

        return [
            'id' => (int) $comment->id,
            'content' => $comment->content,
            'subtype' => $comment->subtype,
            'source' => $comment->source,
            'ip_address' => $comment->ip_address,
            'user' => $userRepo->findPersonById($comment->user_id),
            'created_at' => $comment->created_at,
            'updated_at' => $comment->updated_at
        ];
    }
}