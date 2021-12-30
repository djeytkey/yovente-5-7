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
        $user = \App\User::create([
            'first_name' => 'super',
            'last_name' => 'admin',
            'email' => 'super_admin@yovente.com',
            'password' => bcrypt('123456'),
            'phone' => '0689385061',
            'is_active' => '1',
            'is_deleted' => '0',
        ]);

        $user->attachRole('super_admin');
    }
}
