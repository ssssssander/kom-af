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
            ['template_name' => 'algemeen', 'hero_image_url' => 'pexels-photo-103127-min.jpeg'],
            ['template_name' => 'testimonials', 'hero_image_url' => 'pexels-photo-296881-min.jpeg'],
            ['template_name' => 'scholen', 'hero_image_url' => 'pexels-photo-66363-min.jpeg'],
            ['template_name' => 'nieuws', 'hero_image_url' => 'pexels-photo-196667-min.jpeg'],
            ['template_name' => 'gids', 'hero_image_url' => 'pexels-photo-29672-min.jpg'],
        ]);
    }
}
