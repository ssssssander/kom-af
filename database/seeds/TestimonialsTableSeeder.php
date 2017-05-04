<?php

use Illuminate\Database\Seeder;

class TestimonialsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('testimonials')->insert([
            [
                'student_name' => 'Een student_name',
                'student_image_url' => 'Een student_image_url',
                'title' => 'Trots op onze studenten: Robotarm ASLAN spelt Vlaamse gebarentaal',
                'content' => 'Content',
                'video_url' => 'https://www.youtube.com/embed/DQd633bUoxk',
                'image_url' => '?'
            ],
            [
                'student_name' => 'Een student_name',
                'student_image_url' => 'Een student_image_url',
                'title' => 'Straf Antwerps project: ratten trainen om levens te redden',
                'content' => 'Content',
                'video_url' => '?',
                'image_url' => 'rat.jpeg'
            ],
            [
                'student_name' => 'Een student_name',
                'student_image_url' => 'Een student_image_url',
                'title' => 'Re-Do blaast papier nieuw leven in',
                'content' => 'Content',
                'video_url' => 'https://www.youtube.com/embed/Xqw7hnzWPMM',
                'image_url' => '?'
            ],
            [
                'student_name' => 'Julie Vrijens',
                'student_image_url' => 'Een student_image_url',
                'title' => 'Julie Vrijens: van artdirector tot ontwerpster van een Oscarjurk',
                'content' => 'Content',
                'video_url' => '?',
                'image_url' => 'Red_Juliet.jpg'
            ],
        ]);
    }
}
