<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Model\Category;
use App\Model\Question;
use App\User;
use Faker\Generator as Faker;

$factory->define(Question::class, function (Faker $faker) {
    $title=$faker->sentence;
    return [
        'title'=>$faker->sentence,
        'slug'=>$title,
        'body'=>$faker->text,
        'user_id'=>function(){
            return User::all()->random();
        },
        'category_id'=>function(){
            return Category::all()->random();
        }
    ];
});
