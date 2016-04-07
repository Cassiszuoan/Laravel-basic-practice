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

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Post::class, function (Faker\Generator $faker) {
    return [
                'title' => $faker->sentence,
        		'sub_title'=>$faker->sentence,
        		'content' =>$faker->paragraph,
        		'page_view' => rand(0,20),
        		'created_at' => \Carbon\Carbon::now()->addDays(rand(0,20)),
    ];
});


$factory->define(App\Comment::class, function (Faker\Generator $faker) {
    return [
        
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'content' =>$faker->paragraph,
        'post_id' => rand(0,20),
        'created_at' => \Carbon\Carbon::now()->addDays(rand(0,20)),
    ];
});

