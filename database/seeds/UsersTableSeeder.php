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
        $user = \App\User::UpdateOrCreate([
            'name' => 'liangze',

            'email' => 'liangzelee@gmail.com',

            'password' => '12345678',
        ]);

        factory(\App\User::class, 20)->create();
    }
}
