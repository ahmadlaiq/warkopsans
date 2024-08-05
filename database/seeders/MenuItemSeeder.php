<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MenuItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        \App\Models\MenuItem::factory()->create([
            'category_id' => 1,
            'name' => 'Nasi Goreng',
            'price' => 15000,
            'image' => 'https://www.blibli.com/friends-backend/wp-content/uploads/2023/04/B300026-Cover-resep-nasi-goreng.jpg',
            'public_id' => 'B300026-Cover-resep-nasi-goreng',
            'description' => 'Nasi goreng adalah makanan berupa nasi yang digoreng dan diaduk dalam minyak goreng atau margarin, seringkali ditambah kecap manis, bawang merah, bawang putih, merica, lada hitam, garam, cabai merah, irisan daging ayam, udang, atau telur dan sayuran seperti wortel, kacang polong, dan kecambah.'
        ]);

        \App\Models\MenuItem::factory()->create([
            'category_id' => 1,
            'name' => 'Mie Goreng',
            'price' => 15000,
            'image' => 'https://cdn0-production-images-kly.akamaized.net/rF9J7T6wYPBakuzlp-ym1JveG6w=/0x342:5989x3718/1200x675/filters:quality(75):strip_icc():format(jpeg)/kly-media-production/medias/3930827/original/066100900_1644554867-shutterstock_1984582070.jpg',
            'public_id' => 'mie-goreng-jawa-1',
            'description' => 'Mie goreng adalah hidangan mi yang digoreng dalam minyak goreng panas dengan bumbu dan bahan tambahan lainnya. Mie goreng adalah hidangan yang populer di Indonesia dan Malaysia.'
        ]);

        \App\Models\MenuItem::factory()->create([
            'category_id' => 1,
            'name' => 'Nasi Uduk',
            'price' => 15000,
            'image' => 'https://cdn1-production-images-kly.akamaized.net/bdMMdUeRIi2EGRbRMlFvpgjreVk=/1x60:700x454/800x450/filters:quality(75):strip_icc():format(webp)/kly-media-production/medias/3264167/original/045475800_1602402228-1212646998.jpg',
            'public_id' => 'nasi-uduk-1',
            'description' => 'Nasi uduk adalah makanan khas Betawi yang terbuat dari beras yang dimasak dengan santan dan rempah-rempah. Nasi uduk biasanya disajikan dengan lauk-pauk seperti ayam goreng, tempe orek, sambal terasi, dan telur dadar.'
        ]);

        \App\Models\MenuItem::factory()->create([
            'category_id' => 2,
            'name' => 'Es Teh Manis',
            'price' => 5000,
            'image' => 'https://asset.kompas.com/crops/toOljW__-UqEVhGAJe8UyPdZWnU=/92x67:892x600/750x500/data/photo/2023/08/23/64e59deb79bfb.jpg',
            'public_id' => 'es-teh-manis-1',
            'description' => 'Es teh manis adalah minuman yang terbuat dari air teh yang diberi gula dan es batu. Es teh manis biasanya disajikan dalam gelas besar dengan sedotan.'
        ]);

        \App\Models\MenuItem::factory()->create([
            'category_id' => 2,
            'name' => 'Es Jeruk',
            'price' => 5000,
            'image' => 'https://dcostseafood.id/wp-content/uploads/2021/12/ES-JERUK-murni.jpg',
            'public_id' => 'es-jeruk-1',
            'description' => 'Es jeruk adalah minuman yang terbuat dari air jeruk yang diberi gula dan es batu. Es jeruk biasanya disajikan dalam gelas besar dengan sedotan.'
        ]);

        \App\Models\MenuItem::factory()->create([
            'category_id' => 2,
            'name' => 'Es Campur',
            'price' => 5000,
            'image' => 'https://asset.kompas.com/crops/NLw1zz-GQGF_TP4CydO4ACjfQIs=/0x0:1000x667/750x500/data/photo/2020/04/24/5ea2a3cba9ace.jpg',
            'public_id' => 'es-campur-1',
            'description' => 'Es campur adalah minuman yang terbuat dari campuran buah-buahan, agar-agar, dan es serut. Es campur biasanya disajikan dalam mangkuk besar.'
        ]);

        \App\Models\MenuItem::factory()->create([
            'category_id' => 3,
            'name' => 'Ayam Goreng',
            'price' => 10000,
            'image' => 'https://asset.kompas.com/crops/93Z7RqI2kT4QMVlgmPgqScwgW80=/0x298:750x798/750x500/data/photo/2020/09/25/5f6da653c1860.jpg',
            'public_id' => 'ayam-goreng-1',
            'description' => 'Ayam goreng adalah hidangan ayam yang digoreng dalam minyak panas. Ayam goreng biasanya disajikan dengan nasi putih, sambal, dan lalapan.'
        ]);

        \App\Models\MenuItem::factory()->create([
            'category_id' => 3,
            'name' => 'Ayam Bakar',
            'price' => 10000,
            'image' => 'https://www.sasa.co.id/medias/page_medias/Screen_Shot_2023-01-09_at_17_40_36_(1)_(1)_(1)_(1)_(1)_(1)_(1)_(1).png',
            'public_id' => 'ayam-bakar-1',
            'description' => 'Ayam bakar adalah hidangan ayam yang dibakar dengan bumbu dan saus khusus. Ayam bakar biasanya disajikan dengan nasi putih, sambal, dan lalapan.'
        ]);

        \App\Models\MenuItem::factory()->create([
            'category_id' => 3,
            'name' => 'Ayam Penyet',
            'price' => 10000,
            'image' => 'https://asset.kompas.com/crops/J7KOPBoSnx10zYpoFaid0E5_c-0=/2x0:700x465/750x500/data/photo/2023/11/07/654a25a73f416.jpg',
            'public_id' => 'ayam-penyet-1',
            'description' => 'Ayam penyet adalah hidangan ayam yang digoreng dan dihaluskan dengan ulekan. Ayam penyet biasanya disajikan dengan nasi putih, sambal, dan lalapan.'
        ]);

        \App\Models\MenuItem::factory()->create([
            'category_id' => 4,
            'name' => 'Sate Ayam',
            'price' => 10000,
            'image' => 'https://img-global.cpcdn.com/recipes/a6ca9f36b02b089b/680x482cq70/sate-ayam-khas-madura-foto-resep-utama.jpg',
            'public_id' => 'sate-ayam-1',
            'description' => 'Sate ayam adalah hidangan sate yang terbuat dari daging ayam yang dipotong kecil-kecil dan ditusuk dengan tusukan bambu. Sate ayam biasanya disajikan dengan bumbu kacang dan lontong.'
        ]);

        \App\Models\MenuItem::factory()->create([
            'category_id' => 4,
            'name' => 'Sate Kambing',
            'price' => 10000,
            'image' => 'https://images.tokopedia.net/img/KRMmCm/2023/6/15/87d08ef8-b8ea-4927-988b-46d7b41f9344.jpg',
            'public_id' => 'sate-kambing-1',
            'description' => 'Sate kambing adalah hidangan sate yang terbuat dari daging kambing yang dipotong kecil-kecil dan ditusuk dengan tusukan bambu. Sate kambing biasanya disajikan dengan bumbu kacang dan lontong.'
        ]);

        \App\Models\MenuItem::factory()->create([
            'category_id' => 4,
            'name' => 'Sate Padang',
            'price' => 10000,
            'image' => 'https://asset.kompas.com/crops/rqGBRurZqX4_a5qY31V_4tQfdEo=/0x0:1000x667/750x500/data/photo/2021/03/28/60607a72127cd.jpg',
            'public_id' => 'sate-padang-1',
            'description' => 'Sate padang adalah hidangan sate yang terbuat dari daging sapi yang dipotong kecil-kecil dan ditusuk dengan tusukan bambu. Sate padang biasanya disajikan dengan bumbu kacang dan lontong.'
        ]);
    }
}
