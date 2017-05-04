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
            ['name' => 'Karel de Grote Hogeschool', 'image_url' => 'logo KdG.jpg', 'school_url' => 'https://www.kdg.be/'],
            ['name' => 'Universiteit Antwerpen', 'image_url' => 'logoUA.png', 'school_url' => 'https://www.uantwerpen.be/nl/'],
            ['name' => 'Thomas More', 'image_url' => 'logoThomas More.png', 'school_url' => 'http://www.thomasmore.be/'],
            ['name' => 'AP Hogeschool Antwerpen', 'image_url' => 'logo AP.png', 'school_url' => 'https://www.ap.be/'],
            ['name' => 'Hogere Zeevaartschool Antwerpen', 'image_url' => 'logoAMA.png', 'school_url' => 'https://www.hzs.be/nl/'],
            ['name' => 'Institute of Tropical Medicine Antwerp', 'image_url' => 'logoITM.png', 'school_url' => 'https://www.itg.be/']
        ]);
    }
}
