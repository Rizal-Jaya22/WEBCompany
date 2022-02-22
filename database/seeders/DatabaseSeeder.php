<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Gallery;
use App\Models\Portfolio;
use App\Models\Home;
use App\Models\Profile;
use App\Models\Blog;
use App\Models\Contact;


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
            'title'=>'Our Team',
            'img'=>'',
            'body'=>'',
            'subbody'=>'',
            'video'=>''
        ]);

       Gallery::create([
            'title'=>'',
           'img'=>'img1.jpg',
           'body'=>'',
           'subbody'=>'',
           'video'=>'voli.mp4'
       ]);
       Gallery::create([
        'title'=>'',
        'img'=>'img2.jpg',
        'body'=>'',
        'subbody'=>'',
        'video'=>'voli1.mp4'

    ]);
    Gallery::create([
        'title'=>'',
        'img'=>'img3.jpg',
        'body'=>'',
        'subbody'=>'',
        'video'=>'voli2.mp4'
    ]);

    Portfolio::create([
        'title'=>'Our Services',
        'body'=>''
    ]);

    Portfolio::create([
        'title'=>'WEB DEVELOPMENT',
        'body'=>'merupakan pekerjaan programmer yang bertugas untuk membuat berbagai aplikasi dan website untuk klien dan perusahaan. Banyak perusahaan berlomba-lomba membuat website. Ini menjadi peluang bagi orang yang ingin terjun di dunia web development....'
    ]);
    Portfolio::create([
        'title'=>'GRAPHIC DESIGN',
        'body'=>'salah satu bentuk seni lukis (gambar) untuk menciptakan, atau mengatur elemen rupa seperti ilustrasi, foto, tulisan, dan garis di atas suatu media dengan tujuan untuk diproduksi dan dikomunikasikan sebagai sebuah pesan...'
    ]);
    
    Portfolio::create([
        'title'=>'BUSINESS BRANDING',
        'body'=>'merupakan salah satu cara membedakan bisnis Anda dari pesaing dan mengklarifikasi apa yang Anda tawarkan yang membuat bisnis Anda menjadi pilihan yang lebih baik, berbeda, dan memiliki nilai lebih. Branding dibangun untuk menjadi representasi dari bisnis Anda..'
    ]);

    Portfolio::create([
        'title'=>'CONTENT WRITING',
        'body'=>'penulis konten adalah seorang penulis profesional yang memproduksi konten-konten teks di website atau media online. ...'
    ]);

    Portfolio::create([
        'title'=>'APP DEVELOPMENT',
        'body'=>'Pengembangan aplikasi atau App Development didefinisikan sebagai proses dari awal ide hingga pemantauan setelah peluncuran sebuah aplikasi seluler.'
    ]);

    Portfolio::create([
        'title'=>'DIGITAL MARKETING',
        'body'=>'ialah penggunaan internet dan penggunaan teknologi interaktif lain untuk membuat dan menghubungkan dialog antara perusahaan dan konsumen yang telah teridentifikasi....'
    ]);

    Home::create([
        'img'=>'hero.svg',
        'body'=>'#BikinNyata Ide Kreatif Yang Kalian Impikan'
    ]);

    Profile::create([
        'title'=>'Euphoriya',
        'body'=>'',
        'img'=>'img1.jpg',
        'name'=>'RIZAL'
    ]);

    Profile::create([
        'title'=>'PageBulb',
        'body'=>'',
        'img'=>'img2.jpg',
        'name'=>'Mila'
    ]);

    Profile::create([
        'title'=>'OnePageLove',
        'body'=>'',
        'img'=>'img3.jpg',
        'name'=>'ROB'
    ]);

    Blog::create([
        'title'=>'Is remote work working? A one year check-in',
        'body'=>'30',
        'img'=>'blog1.jpeg',
        'name'=>'Februari'
    ]);
    Blog::create([
        'title'=>'10 ways to keep your remote teams engaged',
        'body'=>'29',
        'img'=>'blog2.jpeg',
        'name'=>'Februari'
    ]);
    Blog::create([
        'title'=>'How to make a concept map (+Examples)',
        'body'=>'28',
        'img'=>'blog3.jpeg',
        'name'=>'Februari'
    ]);

    Contact::create([
        'title'=>'Contact',
        'body'=>'GET IN TOUCH',
        'lokasi'=>'Skopje, Macedonia',
        'email'=>'email@gmail.com & tomsaulnier@gmail.com',
        'nohp'=>'+42 374 5967 & +99 123 5967'
    ]);
    }
}
