<?php

use Illuminate\Database\Seeder;

use App\News;

class NewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $newsList =config("newsComics");

        foreach ($newsList as $news) {
            $newComic = new News();
            // dump($news);
            // $newComic->fill(["title"=>$news["title"]]);
            $newComic->title = $news["title"];
            $newComic->description = $news["description"];
            $newComic->thumb = $news["thumb"];
            $newComic->price = $news["price"]; ;
            $newComic->series = $news["series"];
            $newComic->sale_date = $news["sale_date"];
            $newComic->type = $news["type"];

            $newComic->save();
        };
        //
    }
}
