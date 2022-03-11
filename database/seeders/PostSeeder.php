<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $data = [
            [
                'title' => 'Graphic Design Service',
                'image' => 'http://www.classicwebdesigns.net/wp-content/uploads/2020/08/graphic_designing.png',
                'content' => 'Kami telah sukses mengerjakan lebih dari 70 logo untuk perusahaan dengan hasil terbaik dan sesuai dengan masing-masing bisnis.'
            ],
            [
                'title' => 'Digital Advertising',
                'image' => 'https://99designs-blog.imgix.net/blog/wp-content/uploads/2021/12/Digital-marketing-trends-2022.jpg?auto=format&q=60&w=1860&h=1395&fit=crop&crop=faces',
                'content' => 'Kami menawarkan pemasangan iklan di berbagai channel online, mulai dari Google Ads, FB/IG Ads, Youtube Ads, dan Tiktok Ads.'
            ],
            [
                'title' => 'Content Marketing',
                'image' => 'https://101red.com/prime/wp-content/uploads/2021/05/Content-Marketing-Pengertian-Fungsi-dan-Contoh-Penerapannya.png',
                'content' => 'Kami menawarkan sarana marketing berupa konten, baik yang bentuknya tulisan, audio, gambar, atau video.'
            ],
            [
                'title' => 'Email Marketing',
                'image' => 'https://assets.hongkiat.com/uploads/email-marketing-tips-to-do-it-well/email-marketing.jpg',
                'content' => 'Kami menawarkan strategi digital marketing melalui surat elektronik yang paling cocok diterapkan oleh usaha dengan model business-to-business (B2B).'
            ]
        ];
        DB::table('posts')->insert($data);
    }
}
