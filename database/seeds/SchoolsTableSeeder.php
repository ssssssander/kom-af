<?php

use Illuminate\Database\Seeder;

class SchoolsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('schools')->insert([
            ['name' => 'Karel de Grote Hogeschool', 'image_url' => 'kdg.jpg', 'school_url' => 'https://www.kdg.be/'],
            ['name' => 'Universiteit Antwerpen', 'image_url' => 'ua.png', 'school_url' => 'https://www.uantwerpen.be/nl/'],
            ['name' => 'Thomas More', 'image_url' => 'tm.png', 'school_url' => 'http://www.thomasmore.be/'],
            ['name' => 'AP Hogeschool Antwerpen', 'image_url' => 'ap.png', 'school_url' => 'https://www.ap.be/'],
            ['name' => 'Hogere Zeevaartschool Antwerpen', 'image_url' => 'ama.png', 'school_url' => 'https://www.hzs.be/nl/'],
            ['name' => 'Institute of Tropical Medicine Antwerp', 'image_url' => 'itm.png', 'school_url' => 'https://www.itg.be/']
        ]);
    }
}
