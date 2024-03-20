<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class SiteConfigSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('site_configs')->insert([
            'hero_title' => 'Callender Hamilton (CH)',
            'hero_subtitle' => 'Proyek KPBU Penggantian atau Duplikasi jembatan Callender Hamilton (CH) di Pulau Jawa oleh PT Baja Titian Utama',
            'hero_image1' => '/hero/about.webp',
            'hero_image2' => '/hero/about.webp',
            'hero_image3' => '/hero/about.webp',
            'about_title' => 'Profil',
            'about_description' => '<strong>PT Baja Titian Utama </strong>adalah perusahaan yang resmi berdiri pada tanggal 18 November 2021, yang memegang konsesi Proyek Penggantian dan/atau Duplikasi Jembatan Callender Hamilton di Pulau Jawa. Dengan total konsesi selama 12 tahun yang terdiri dari 2 tahun masa konstruksi dan 10 tahun masa layanan. Dengan lingkup pekerjaan meliputi penggantian dan/atau duplikasi di 37 lokasi jembatan CH eksisting dengan Jembatan Steel Box Girder, Steel I Girder, beserta bangunan pelengkap (termasuk Structural Health Monitoring System/ SHMS), serta 0&M selama Masa Layanan.',
            'about_image' => '/hero/about.webp',
            'address_full' => 'ITS Tower, Nifarro Park <br /> Jalan Raya Pasar Minggu <br /> Jakarta Selatan',
            'social_facebook_link' => 'https://www.facebook.com/profile.php?id=100089226504104',
            'social_twitter_link' => 'https://twitter.com/BajaTitianUtama',
            'social_instagram_link' => 'https://www.instagram.com/bajatitianutama.official',
            'social_facebook' => 'Facebook',
            'social_twitter' => 'Twitter',
            'social_instagram' => 'Instagram',
        ]);
    }
}
