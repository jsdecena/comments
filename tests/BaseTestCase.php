<?php

namespace Tests;

use Faker\Generator;
use Faker\Provider\Lorem;
use Jsdecena\Comments\Tests\Post;
use Jsdecena\Comments\Tests\User;

abstract class BaseTestCase extends \Orchestra\Testbench\TestCase
{
    protected $faker;
    protected $user;
    protected $post;

    /**
     * Setup the test environment.
     */
    protected function setUp()
    {
        parent::setUp();

        $this->loadMigrationsFrom([
            '--database' => 'testing',
            '--realpath' => realpath(__DIR__ . '/database/migrations'),
        ]);

        $this->withFactories(__DIR__ . '/database/factories');

        $this->faker = new Generator;
        $this->faker->addProvider(Lorem::class);

        $this->user = User::create([
            'name' => $this->faker->word
        ]);

        $this->post = Post::create([
            'title' => $this->faker->word
        ]);
    }

    /**
     * Define environment setup.
     *
     * @param  \Illuminate\Foundation\Application $app
     *
     * @return void
     */
    protected function getEnvironmentSetUp($app)
    {
        // Setup default database to use sqlite :memory:
        $app['config']->set('database.default', 'testbench');
        $app['config']->set('database.connections.testbench', [
            'driver' => 'sqlite',
            'database' => ':memory:',
            'prefix' => '',
        ]);
        $app['config']->set('comment.user', 'Jsdecena\Comments\Tests\User');
    }
}