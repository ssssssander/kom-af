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
                'user_id' => 2,
                'title' => 'Custom artikel',
                'content' => 'Een artikel dat niet gescraped is van GATE15, maar toegevoegd via deze site.',
                'time_ago' => '1 dag',
                'image_url' => 'custom_article_dummy.jpg',
	            'created_at'=>'2017-05-10 16:00:38',
	            'updated_at'=>'2017-05-10 16:00:38'
            ]
        ]);
    }
}
