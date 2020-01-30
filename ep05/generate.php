<?php

require __DIR__."/vendor/autoload.php";

use Faker\Provider\Image;
use Faker\Provider\Lorem;
use Source\Models\Post;
set_time_limit(500);

for($i=0; $i<10; $i++){
    $post = new Post();
    $post->title = Lorem::text(80);
    $post->cover = Image::image("images", 300, 150);
    if($post->cover){
        $post->description = Lorem::paragraphs(2, true);
        $post->save();
    }
}