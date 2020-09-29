<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\Post;

$factory->define(Post::class, function (Faker $faker) {
    return [

      'title'    => $faker -> text($maxNbChars = 60),
      'text'     => $faker -> text(),
      'category' => $faker -> word(),
      'like'     => $faker -> randomDigit(),
      'dislike'  => $faker -> randomDigit()
      
    ];
});
