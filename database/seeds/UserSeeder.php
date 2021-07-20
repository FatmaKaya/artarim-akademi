<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'email' => 'kaya.fatma.kaya@hotmail.com',
            'password' => md5('psw123.'),
        ]);
    }
}
