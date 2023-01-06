<?php

namespace Database\Seeders;

use App\Models\Cart;
use App\Models\Item;
use App\Models\Welcome;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        Welcome::create([
            'image' => 'kaos1.jpg',
            'name' => 'Black T-Shirt',
            'desc' => 'T-shirt Pria dengan tekstur brushed yang lembut. Desain simpel yang cocok dipadankan dengan berbagai jenis pakaian.',
            'price' => 60000
        ]);

        Welcome::create([
            'image' => 'hoodie1.jpg',
            'name' => 'Brown Hoodie',
            'desc' => 'Jaket hoodie Pria dengan bahan fleece lembut dan siluet lebar. Hoodie yang sempurna untuk bersantai di rumah.',
            'price' => 200000
        ]);

        Welcome::create([
            'image' => 'crewneck1.jpg',
            'name' => 'Black Crewneck',
            'desc' => 'Sweater Pria yang terbuat dari 100% premium wol yang lembut dan hangat. Desain rajut sekitar bahu memberi aksen gaya tersendiri.',
            'price' => 150000
        ]);

        Welcome::create([
            'image' => 'celana1.jpg',
            'name' => 'Beige Short',
            'desc' => 'Celana relax pria dari bahan yang lembut, mudah bergerak saat memakainya. Terlihat stylish di dalam maupun luar rumah.',
            'price' => 190000
        ]);

        Welcome::create([
            'image' => 'hoodie2.jpg',
            'name' => 'Green Hoodie',
            'desc' => 'Hoodie Sweat Pria yang dibuat dari pilihan bahan yang lembut. Terlihat autentik dengan detail yang dirancang dengan cermat.',
            'price' => 220000
        ]);

        Welcome::create([
            'image' => 'kaos2.jpg',
            'name' => 'Grey T-Shirt',
            'desc' => 'Tampilan katun dengan performa AIRism. Desain neckline yang memberi tampilan clean dan rapi.',
            'price' => 70000
        ]);

        Welcome::create([
            'image' => 'celana2.jpg',
            'name' => 'Grey Short',
            'desc' => 'Celana Pendek Pria dengan tekstur unik. Bahan ringan dan nyaman sehingga mudah untuk digerakkan.',
            'price' => 130000
        ]);

        Welcome::create([
            'image' => 'crewneck2.jpg',
            'name' => 'Cream Crewneck',
            'desc' => 'Crewneck Pria dengan tekstur dan warna elegan, dengan potongan stylish dan fit yang ramping.',
            'price' => 170000
        ]);

        Cart::create([
            'image' => 'kaos1.jpg',
            'name' => 'Black T-Shirt',
            'desc' => 'T-shirt Pria dengan tekstur brushed yang lembut. Desain simpel yang cocok dipadankan dengan berbagai jenis pakaian.',
            'price' => 60000
        ]);

        Cart::create([
            'image' => 'hoodie1.jpg',
            'name' => 'Brown Hoodie',
            'desc' => 'Jaket hoodie Pria dengan bahan fleece lembut dan siluet lebar. Hoodie yang sempurna untuk bersantai di rumah.',
            'price' => 200000
        ]);

        Cart::create([
            'image' => 'crewneck1.jpg',
            'name' => 'Black Crewneck',
            'desc' => 'Crewneck Pria yang terbuat dari 100% premium wol yang lembut dan hangat. Desain rajut sekitar bahu memberi aksen gaya tersendiri.',
            'price' => 150000
        ]);

        Cart::create([
            'image' => 'celana1.jpg',
            'name' => 'Beige Short',
            'desc' => 'Celana relax pria dari bahan yang lembut, mudah bergerak saat memakainya. Terlihat stylish di dalam maupun luar rumah.',
            'price' => 130000
        ]);

        Cart::create([
            'image' => 'hoodie2.jpg',
            'name' => 'Green Hoodie',
            'desc' => 'Hoodie Sweat Pria yang dibuat dari pilihan bahan yang lembut. Terlihat autentik dengan detail yang dirancang dengan cermat.',
            'price' => 220000
        ]);

        Cart::create([
            'image' => 'kaos2.jpg',
            'name' => 'Grey T-Shirt',
            'desc' => 'Tampilan katun dengan performa AIRism. Desain neckline yang memberi tampilan clean dan rapi.',
            'price' => 70000
        ]);

        Cart::create([
            'image' => 'celana2.jpg',
            'name' => 'Grey Short',
            'desc' => 'Celana Pendek Pria dengan tekstur unik. Bahan ringan dan nyaman sehingga mudah untuk digerakkan.',
            'price' => 130000
        ]);

        Cart::create([
            'image' => 'crewneck2.jpg',
            'name' => 'Cream Crewneck',
            'desc' => 'Crewneck Pria dengan tekstur dan warna elegan, dengan potongan stylish dan fit yang ramping.',
            'price' => 170000
        ]);

        Item::create([
            'image' => 'kaos1.jpg',
            'name' => 'Black T-Shirt',
            'desc' => 'T-shirt Pria dengan tekstur brushed yang lembut. Desain simpel yang cocok dipadankan dengan berbagai jenis pakaian.',
            'price' => 60000
        ]);

        Item::create([
            'image' => 'hoodie1.jpg',
            'name' => 'Brown Hoodie',
            'desc' => 'Jaket hoodie Pria dengan bahan fleece lembut dan siluet lebar. Hoodie yang sempurna untuk bersantai di rumah.',
            'price' => 200000
        ]);

        Item::create([
            'image' => 'crewneck1.jpg',
            'name' => 'Black Crewneck',
            'desc' => 'Sweater Pria yang terbuat dari 100% premium wol yang lembut dan hangat. Desain rajut sekitar bahu memberi aksen gaya tersendiri.',
            'price' => 150000
        ]);

        Item::create([
            'image' => 'celana1.jpg',
            'name' => 'Beige Short',
            'desc' => 'Celana relax pria dari bahan yang lembut, mudah bergerak saat memakainya. Terlihat stylish di dalam maupun luar rumah.',
            'price' => 190000
        ]);

        Item::create([
            'image' => 'hoodie2.jpg',
            'name' => 'Green Hoodie',
            'desc' => 'Hoodie Sweat Pria yang dibuat dari pilihan bahan yang lembut. Terlihat autentik dengan detail yang dirancang dengan cermat.',
            'price' => 220000
        ]);

        Item::create([
            'image' => 'kaos2.jpg',
            'name' => 'Grey T-Shirt',
            'desc' => 'Tampilan katun dengan performa AIRism. Desain neckline yang memberi tampilan clean dan rapi.',
            'price' => 70000
        ]);

        Item::create([
            'image' => 'celana2.jpg',
            'name' => 'Grey Short',
            'desc' => 'Celana Pendek Pria dengan tekstur unik. Bahan ringan dan nyaman sehingga mudah untuk digerakkan.',
            'price' => 130000
        ]);

        Item::create([
            'image' => 'crewneck2.jpg',
            'name' => 'Cream Crewneck',
            'desc' => 'Crewneck Pria dengan tekstur dan warna elegan, dengan potongan stylish dan fit yang ramping.',
            'price' => 170000
        ]);
    }
}
