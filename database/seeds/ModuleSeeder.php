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
                'category' => 'Ar Tarım Akademi',
                'name' => 'Yaklaşan Etkinlikler',
                'title'  => '',
                'content' => '<p>Praesent non purus non massa eleifend finibus. Praesent sodales id mi ut facilisis. Morbi eget metus maximus, mollis elit eget, scelerisque massa. Nullam rhoncus fringilla ipsum sit amet luctus. Fusce sapien erat, semper nec justo at, mollis eleifend justo. Ut nec nisl porta libero cursus varius.</p>',
                "icon" => 'loyalty',
                "order" => 1,
                "active" => 1,
                "created_at" => date("Y-m-d H:i:s"),
                "updated_at" => date("Y-m-d H:i:s") 
            ],
            [
                'type' => 'openPositions',
                'category' => 'Kariyer',
                'name' => 'Açık Pozisyonlar',
                'title'  => 'Müşteri Etkileşimi ile Cazip Kariyer Fırsatları - AR TARIM',
                'content' => '<p>&Ouml;ğrenci, mezun veya iş tecr&uuml;besi olan biri olsanız da AR TARIM&rsquo; da tohumluk patates odaklı kariyeriniz i&ccedil;in &ccedil;eşitli fırsatlar bulabilirsiniz.</p>
                            <p>İnovasyon g&uuml;c&uuml; ve başarısıyla tanınan bir şirket olarak, s&uuml;rekli motive olmuş ve yetenekli insanlar arıyoruz. AR TARIM Tohum Patates Akademisi, profesyonelliğe giden yolunuz olacak!</p>',
                "icon" => 'work',
                "order" => 2,
                "active" => 1,
                "created_at" => date("Y-m-d H:i:s"),
                "updated_at" => date("Y-m-d H:i:s") 
            ],
        ]);
    }
}
