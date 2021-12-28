<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Gallery;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       Gallery::create([
           'img'=>'img1.jpg',
           'body'=>'Jhon Doe'
       ]);
       Gallery::create([
        'img'=>'img2.jpg',
        'body'=>'Sarah Doe'
    ]);
    Gallery::create([
        'img'=>'img3.jpg',
        'body'=>'Robe Hope'
    ]);
        
    }
}
