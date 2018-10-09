<?php

namespace Jsdecena\Comments\repositories;

use Illuminate\Support\Collection;
use Jsdecena\Baserepo\BaseRepository;
use Jsdecena\Baserepo\BaseRepositoryInterface;
use Jsdecena\Comments\Models\Comment;
use Jsdecena\Comments\Tests\Post;

class PostRepository extends BaseRepository implements BaseRepositoryInterface
{
    /**
     * UserRepository constructor.
     *
     * @param Post $post
     */
    public function __construct(Post $post)
    {
        parent::__construct($post);
        $this->model = $post;
    }

    /**
     * @param array $data
     *
     * @return Comment
     */
    public function createComment(array $data) : Comment
    {
        $comment = $this->model->comments()->save(new Comment($data));
        $commentRepo = new CommentRepository(new Comment);
        return $commentRepo->find($comment->id);
    }

    /**
     * @return Collection
     */
    public function listComments() : Collection
    {
        return $this->model->comments()->getResults();
    }
}