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
            'role_id' => 1,
            'username' => 'san',
            'first_name' => 'Sander',
            'last_name' => 'Borret',
            'password' => bcrypt('secret')
        ]);
    }
}
