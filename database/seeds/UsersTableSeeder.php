<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'role_id' => 1,
                'username' => 'san',
                'email' => 'sander.borret@student.kdg.be',
                'first_name' => 'Sander',
                'last_name' => 'Borret',
                'password' => bcrypt('secret')
            ],
            [
                'role_id' => 2,
                'username' => 'tom',
                'email' => 'thomas.verhelst@student.kdg.be',
                'first_name' => 'Thomas',
                'last_name' => 'Verhelst',
                'password' => bcrypt('lalala')
            ]
        ]);
    }
}
