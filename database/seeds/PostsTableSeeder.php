<?php

use App\Post;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i<10; $i++){
            $new_post = new Post();
            $new_post->title = "Titolo post " . ($i + 1 );
            $new_post->slug = Str::slug($new_post->title, '-');
            $new_post->content= ($i + 1 ) . " Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nam harum possimus quaerat consequatur eveniet! Ducimus soluta quasi accusamus veritatis dignissimos quas quos esse! Ullam repellat minima aspernatur perferendis necessitatibus numquam.";
            $new_post->save();
        }
    }
}
