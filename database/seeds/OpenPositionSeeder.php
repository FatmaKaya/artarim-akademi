<?php

use Illuminate\Database\Seeder;

class OpenPositionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('open_positions')->insert([
            [
                'category' => 'Pellentesque congue',
                'name' => 'Vivamus convallis scelque felis interdum justo',
                'description' => '<ul>
                                    <li>Praesent non purus non massa eleifend finibus.</li>
                                    <li>Praesent sodales id mi ut facilisis.</li>
                                    <li>Morbi eget metus maximus mollis elit eget scelerisque massa.</li>
                                    <li>Nullam rhoncus fringilla ipsum sit amet luctus.</li>
                                    <li>Fusce sapien erat semper nec justo at mollis eleifend justo.</li>
                                    <li>Ut nec nisl porta libero cursus varius.</li>
                                </ul>',
                'content' => '<p>Sed a commodo dui. Aliquam consectetur rhoncus nulla, ullamcorper posuere tortor porttitor nec. Phasellus quis placerat lacus, in blandit dolor. Ut vel egestas nibh.</p>
                                <p>Nam fringilla tempus quam in lacinia. Praesent efficitur nisi eu justo cursus, sit amet pretium sem aliquet. Etiam non pulvinar erat, ac pellentesque est. 
                                Maecenas lobortis venenatis ullamcorper. Proin pharetra convallis quam at tincidunt. In hac habitasse platea dictumst.
                                 Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Quisque feugiat tortor dictum, malesuada arcu et, elementum nulla. Sed eget iaculis turpis. Suspendisse non euismod nibh.</p>',
                
                "order" => 1,
                "active" => 1,
                "created_at" => date("Y-m-d H:i:s"),
                "updated_at" => date("Y-m-d H:i:s"),
            ],
            [
                'category' => 'Pellentesque congue',
                'name' => 'Vivamus convallis scelque felis interdum justo',
                'description' => '<ul>
                                    <li>Praesent non purus non massa eleifend finibus.</li>
                                    <li>Praesent sodales id mi ut facilisis.</li>
                                    <li>Morbi eget metus maximus mollis elit eget scelerisque massa.</li>
                                    <li>Nullam rhoncus fringilla ipsum sit amet luctus.</li>
                                    <li>Fusce sapien erat semper nec justo at mollis eleifend justo.</li>
                                    <li>Ut nec nisl porta libero cursus varius.</li>
                                </ul>',
                'content' => '<p>Sed a commodo dui. Aliquam consectetur rhoncus nulla, ullamcorper posuere tortor porttitor nec. Phasellus quis placerat lacus, in blandit dolor. Ut vel egestas nibh.</p>
                                <p>Nam fringilla tempus quam in lacinia. Praesent efficitur nisi eu justo cursus, sit amet pretium sem aliquet. Etiam non pulvinar erat, ac pellentesque est. 
                                Maecenas lobortis venenatis ullamcorper. Proin pharetra convallis quam at tincidunt. In hac habitasse platea dictumst.
                                 Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Quisque feugiat tortor dictum, malesuada arcu et, elementum nulla. Sed eget iaculis turpis. Suspendisse non euismod nibh.</p>',
                
                "order" => 2,
                "active" => 1,
                "created_at" => date("Y-m-d H:i:s"),
                "updated_at" => date("Y-m-d H:i:s"),
            ],
        ]);
    }
}
