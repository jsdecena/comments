<?php

namespace Stormport\Package\comments\src\repositories;

use Jsdecena\Baserepo\BaseRepository;
use Jsdecena\Comments\Models\Comment;

class CommentRepository extends BaseRepository
{
    /**
     * CommentRepository constructor.
     *
     * @param Comment $comment
     */
    public function __construct(Comment $comment)
    {
        parent::__construct($comment);
    }
}