<?php

use Illuminate\Database\Seeder;

class CoursesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('courses')->insert([
            [
                'school_id' => 1,
                'name' => 'Professionele bachelor Multimedia en Communicatietechnologie',
                'description' => 'Web, audio, video, 3D, mobile apps, games ... Je krijgt er maar niet genoeg van.
                    In een creatieve en technologische omgeving voel jij je als een vis in het water.
                    Je krijgt een oerdegelijke theoretische én praktische basis mee. Da’s een enorme troef als je daarna op zoek gaat naar werk.
                    Naast die stevige basis is er ruimte voor specialisatie. In welke technologie? Dat kies je zelf.
                    Tijdens je opleiding werk je regelmatig samen met bedrijven en organisaties aan concrete projecten.
                    Je studeert af met een welbepaald keuzepakket: Web&UX, Virtual&3D, Audio&Video.',
                'course_url' => 'https://www.kdg.be/multimedia-technology',
                'contact_name' => 'Jurgen Dedeckere',
                'contact_email' => 'jurgen.dedeckere@kdg.be',
                'contact_phone' => '+32 3 613 17 52',
                'contact_image' => 'jurgen-dedeckere.jpg'
            ],
            [
                'school_id' => 1,
                'name' => 'Professionele bachelor Chemie',
                'description' => 'Wat verbindt een laborant met een farmaceutisch bedrijf, een kwaliteitsverantwoordelijke met een brouwerij en een milieubeambte met de gemeente? Chemie.
                    In het werkveld gaan ze op alle mogelijke manieren om met chemie, dus spelen ook de opleidingen daarop in.
                    Je kan bij ons deze bruisende wetenschap vanuit verschillende invalshoeken bestuderen.
                    Je kan kiezen uit 3 afstudeerrichtingen: Biochemie, Chemie en Procestechnologie.
                    Wat die 3 richtingen bindt? Milieubewustzijn en zorg voor duurzaamheid.',
                'course_url' => 'https://www.kdg.be/bachelor-chemie',
                'contact_name' => 'Imanol Michelena',
                'contact_email' => 'imanol.michelena@kdg.be',
                'contact_phone' => '+32 3 613 17 55',
                'contact_image' => 'imanol-michelena.jpg'
            ],
            [
                'school_id' => 2,
                'name' => 'Master in de rechten',
                'description' => 'De Antwerpse masteropleiding in de rechten omvat 120 studiepunten, wat overeenkomt met twee jaar voltijdse studie. Het programma is samengesteld uit:

                    opleidingsonderdelen in grondslagen- en hulpwetenschappen;
                    juridische opleidingsonderdelen;
                    opleidingsonderdelen met vaardigheden;
                    de meesterproef.
                    De meesterproef verbindt de wetenschappelijke opleiding met een stage in de advocatuur, magistratuur, het notariaat, de overheid, sociale organisaties of ondernemingen.

                    De Antwerpse masteropleiding in de rechten heeft een heel eigen profiel. Naast de zeven verplichte opleidingsonderdelen die door alle studenten worden gevolgd, geef je zelf in grote mate een invulling aan je masteropleiding. Je kan opteren voor een verder doorgedreven algemene vorming in het recht of voor een specialisatie in één van de zeven rechtsdomeinen.',
                'course_url' => 'https://www.kdg.be/bachelor-chemie',
                'contact_name' => 'Een contact_name',
                'contact_email' => 'Een contact_email',
                'contact_phone' => 'Een contact_phone',
                'contact_image' => 'Een contact_image'
            ]
        ]);
    }
}
