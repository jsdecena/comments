<?php

namespace Jsdecena\Comments\Tests;

use Jsdecena\Comments\Repositories\PostRepository;
use Tests\TestCase;

class CommentTest extends TestCase
{
    /** @test */
    public function it_can_list_the_comments_on_a_post()
    {
        $data = [
            'content' => $this->faker->sentence,
            'user_id' => $this->user->id
        ];

        $postRepo = new PostRepository($this->post);
        $postRepo->createComment($data);
        $comments = $postRepo->listComments();

        $comments->each(function ($comment) use ($data) {
            $this->assertEquals($data['content'], $comment->content);
            $this->assertEquals($data['user_id'], $comment->user_id);
        });
    }

    /** @test */
    public function it_can_comment_to_a_post()
    {
        $data = [
            'content' => $this->faker->sentence,
            'user_id' => $this->user->id
        ];

        $postRepo = new PostRepository($this->post);
        $comment = $postRepo->createComment($data);

        $this->assertEquals($data['content'], $comment->content);
        $this->assertEquals($data['user_id'], $comment->user_id);
    }
}