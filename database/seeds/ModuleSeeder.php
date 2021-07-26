<?php

use Illuminate\Database\Seeder;

class ModuleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('modules')->insert([
            [
                'type' => 'events',
                'name' => 'Etkinlikler',
                "icon" => 'loyalty',
                "order" => 1,
                "active" => 1
            ],
            [
                'type' => 'openPositions',
                'name' => 'Açık Pozisyonlar',
                "icon" => 'work',
                "order" => 2,
                "active" => 1
            ],
        ]);
    }
}
