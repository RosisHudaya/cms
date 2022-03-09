<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = [
        [
            'name'=>'Nam Vitae Odio',
            'image'=>'img/image-01.jpg',
        ],
        [
            'name'=>'Integer ornare',
            'image'=>'img/image-02.jpg',
        ],
        [
            'name'=>'Cras non augue',
            'image'=>'img/image-03.jpg',
        ],
        [
            'name'=>'Dolor lacus',
            'image'=>'img/image-04.jpg',
        ],
        [
            'name'=>'Quisque velit',
            'image'=>'img/image-05.jpg',
        ],
        [
            'name'=>'Suspendisse suscipit',
            'image'=>'img/image-06.jpg',
        ],
        [
            'name'=>'Facilisis justo',
            'image'=>'img/image-07.jpg',
        ],
        [
            'name'=>'Vivamus facilisis',
            'image'=>'img/image-08.jpg',
        ]
        ];
        
        \DB::table('posts')->insert($posts);
    }
}
