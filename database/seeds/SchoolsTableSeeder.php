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
            ['name' => 'Karel de Grote Hogeschool', 'image_url' => 'school_images/kdg.jpg', 'school_url' => 'https://www.kdg.be/'],
            ['name' => 'Universiteit Antwerpen', 'image_url' => 'school_images/ua.png', 'school_url' => 'https://www.uantwerpen.be/nl/'],
            ['name' => 'Thomas More', 'image_url' => 'school_images/tm.png', 'school_url' => 'http://www.thomasmore.be/'],
            ['name' => 'AP Hogeschool Antwerpen', 'image_url' => 'school_images/ap.png', 'school_url' => 'https://www.ap.be/'],
            ['name' => 'Hogere Zeevaartschool Antwerpen', 'image_url' => 'school_images/ama.png', 'school_url' => 'https://www.hzs.be/nl/'],
            ['name' => 'Institute of Tropical Medicine Antwerp', 'image_url' => 'school_images/itm.png', 'school_url' => 'https://www.itg.be/']
        ]);
    }
}
