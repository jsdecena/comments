<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(\Jsdecena\Comments\Models\Comment::class, function (Faker\Generator $faker) {
    $user = factory(config('comments.user'))->create();

    return [
        'commentable_type' => config('commentable_type'),
        'commentable_id' => config('commentable_id'),
        'subtype' => null,
        'content' => $faker->sentence,
        'source' => null,
        'ip_address' => null,
        'user_id' => $user->id,
    ];
});
