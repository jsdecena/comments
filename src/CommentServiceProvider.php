<?php

namespace Jsdecena\Comments;

use Illuminate\Support\ServiceProvider;

class CommentServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '../database' => database_path()
        ], 'comment-migrations');

        $this->publishes([
            __DIR__ . '../factories' => database_path('factories')
        ], 'comment-config');

        $this->publishes([
            __DIR__ . '../config' => base_path('config')
        ], 'comment-config');

        $this->loadMigrationsFrom(__DIR__ . '../database');
    }
}