<?php

use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('events')->insert([
            [
                'category' => 'Pellentesque congue',
                'name' => 'Vivamus convallis scelque felis interdum justo',
                'content' => '<p><strong>Quisque feugiat, urna vitae dapibus ultricies, justo purus rhoncus massa, sit amet placerat elit ipsum non eros. Phasellus consectetur eget nulla lobortis tempus. Curabitur fringilla venenatis urna luctus hendrerit.</strong></p>
                                <p>Nulla dolor ligula, faucibus eu faucibus nec, tristique quis dui. Nulla interdum dui ut enim consectetur, eget gravida tortor hendrerit. Ut vestibulum placerat libero vitae sagittis.</p>',
                "startDate" => date('2021-03-23 13:00'),
                "endDate" => date('2021-03-23 13:00'),
                "order" => 1,
                "active" => 1,
                "created_at" => date("Y-m-d H:i:s"),
                "updated_at" => date("Y-m-d H:i:s"),
                "imageurl" => "http://127.0.0.1:8000/uploads/etkinlikler-1.jpg"
            ],
            [
                'category' => 'Pellentesque congue',
                'name' => 'Vivamus convallis scelque felis interdum justo',
                'content' => '<p><strong>Quisque feugiat, urna vitae dapibus ultricies, justo purus rhoncus massa, sit amet placerat elit ipsum non eros. Phasellus consectetur eget nulla lobortis tempus. Curabitur fringilla venenatis urna luctus hendrerit.</strong></p>
                                <p>Nulla dolor ligula, faucibus eu faucibus nec, tristique quis dui. Nulla interdum dui ut enim consectetur, eget gravida tortor hendrerit. Ut vestibulum placerat libero vitae sagittis.</p>',
                "startDate" => date('2021-03-23 13:00'),
                "endDate" => date('2021-03-23 13:00'),
                "order" => 2,
                "active" => 1,
                "created_at" => date("Y-m-d H:i:s"),
                "updated_at" => date("Y-m-d H:i:s"),
                "imageurl" => "http://127.0.0.1:8000/uploads/etkinlikler-2.jpg"
            ],
            [
                'category' => 'Pellentesque congue',
                'name' => 'Vivamus convallis scelque felis interdum justo',
                'content' => '<p><strong>Quisque feugiat, urna vitae dapibus ultricies, justo purus rhoncus massa, sit amet placerat elit ipsum non eros. Phasellus consectetur eget nulla lobortis tempus. Curabitur fringilla venenatis urna luctus hendrerit.</strong></p>
                                <p>Nulla dolor ligula, faucibus eu faucibus nec, tristique quis dui. Nulla interdum dui ut enim consectetur, eget gravida tortor hendrerit. Ut vestibulum placerat libero vitae sagittis.</p>',
                "startDate" => date('2021-03-23 13:00'),
                "endDate" => date('2021-03-23 13:00'),
                "order" => 2,
                "active" => 1,
                "created_at" => date("Y-m-d H:i:s"),
                "updated_at" => date("Y-m-d H:i:s"),
                "imageurl" => "http://127.0.0.1:8000/uploads/etkinlikler-3.jpg"
            ],
        ]);
    }
}
