<?php

use Illuminate\Database\Seeder;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles')->insert([
            [
                'user_id' => 1,
                'title' => 'testje',
                'content' => 'lalalala bla zzz',
                'image_url' => 'niks'
            ],
            [
                'user_id' => 2,
                'title' => 'nog een testje',
                'content' => 'bing bang tik tak',
                'image_url' => 'iets?'
            ]
        ]);
    }
}
