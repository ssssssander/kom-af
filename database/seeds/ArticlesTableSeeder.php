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
                'title' => 'Help ons de Cultuurcheques te optimaliseren!',
                'content' => 'Vul hier onze bevraging in. Het neemt slechts enkele minuutjes in beslag én er valt een pretpakket te winnen.Meer info over de Cultuurcheques.',
                'time_ago' => '13 dagen',
                'image_url' => 'dummy1.jpg',
                'url' => 'https://www.gate15.be/nl/nieuws/help-ons-de-cultuurcheques-te-optimaliseren'
            ],
            [
                'title' => 'Kick-off voor Antwerpse presidia',
                'content' => 'WAT? De organisatie van een activiteit in de stad is niet altijd even simpel. Daarom organiseren GATE15 en Stad Antwerpen de kick-off voor Antwerpse presidia: schrijf je in voor drie sessies en kom alles te weten over subsidieaanvragen, het doo...',
                'time_ago' => '13 dagen',
                'image_url' => 'dummy2.jpg',
                'url' => 'https://www.gate15.be/nl/nieuws/kick-off-voor-antwerpse-presidia-7'
            ],
            [
                'title' => 'Starterssessies: toekomstige zelfstandigen & bijna-afgestudeerden',
                'content' => 'Op 28 maart kan je met al je vragen en bedenkingen terecht in TAKEOFFANTWERP_ voor de starterssessies. tussen 18:00 en 21:00 staat er daar een team van ervaringsdeskundigen op je te wachten die ervoor gaan zorgen dat je die avond buitenstapt als ...',
                'time_ago' => '1 maand',
                'image_url' => 'dummy3.jpg',
                'url' => 'https://www.gate15.be/nl/nieuws/starterssessies-toekomstige-zelfstandigen-bijna-afgestudeerden'
            ]
        ]);
    }
}
