<?php

use App\School;
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
        School::create([
            ['name' => 'Karel de Grote Hogeschool', 'image_url' => 'aa'],
            ['name' => 'Universiteit Antwerpen', 'image_url' => 'bb']
        ]);
    }
}