<?php

use Illuminate\Database\Seeder;

class HeroImagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('hero_images')->insert([
            ['template_name' => 'algemeen', 'hero_image_url' => 'algemeen.jpeg', 'video' => false],
            ['template_name' => 'testimonials', 'hero_image_url' => 'testimonials.jpeg', 'video' => false],
            ['template_name' => 'scholen', 'hero_image_url' => 'scholen.jpeg', 'video' => false],
            ['template_name' => 'nieuws', 'hero_image_url' => 'nieuws.jpeg', 'video' => false],
            ['template_name' => 'gids', 'hero_image_url' => 'gids.jpeg', 'video' => false],
            ['template_name' => 'zoeken', 'hero_image_url' => 'zoeken.jpeg', 'video' => false]
        ]);
    }
}
