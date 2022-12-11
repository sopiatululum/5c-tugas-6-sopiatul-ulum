<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Merk;
use App\Models\Produk;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        Merk::create([
           'nama' => 'Dior',
        ]);

        Merk::create([
           'nama' => 'Prada',
        ]);
        Merk::create([
           'nama' => 'YSL',
        ]);
        Merk::create([
           'nama' => 'Chanel',
        ]);
        Merk::create([
           'nama' => 'LV',
        ]);
        Merk::create([
           'nama' => 'Celine',
        ]);
        Merk::create([
           'nama' => 'Tweetly',
        ]);

        Produk::create([
            'kode_produk'=> '08654',
            'nama'=> 'Jam Tangan',
            'harga'=> 1500000,
            'merk_id'=>'1',
        ]);
        Produk::create([
            'kode_produk'=> '08655',
            'nama'=> 'Hoddie Chanel',
            'harga'=> 1200000,
            'merk_id'=>'1',
        ]);
        Produk::create([
            'kode_produk'=> '04534',
            'nama'=> 'Sneakers LV',
            'harga'=> 2800000,
            'merk_id'=>'2',
        ]);
        Produk::create([
            'kode_produk'=> '04535',
            'nama'=> 'Topi Chanel',
            'harga'=> 1000000,
            'merk_id'=>'2',
        ]);
        Produk::create([
            'kode_produk'=> '06545',
            'nama'=> 'Parfum Dior',
            'harga'=> 3000000,
            'merk_id'=>'3',
        ]);
        Produk::create([
            'kode_produk'=> '07545',
            'nama'=> 'T-Shirt',
            'harga'=> 1300000,
            'merk_id'=>'4',
        ]);
        Produk::create([
            'kode_produk'=> '09525',
            'nama'=> 'Tas Prada',
            'harga'=> 3100000,
            'merk_id'=>'5',
        ]);
        Produk::create([
            'kode_produk'=> '09535',
            'nama'=> 'Tas YSL',
            'harga'=> 1400000,
            'merk_id'=>'5',
        ]);
        Produk::create([
            'kode_produk'=> '05436',
            'nama'=> 'Tote Bag',
            'harga'=> 890000,
            'merk_id'=>'6',
        ]);
        Produk::create([
            'kode_produk'=> '02436',
            'nama'=> 'Jaket Celine',
            'harga'=> 2700000,
            'merk_id'=>'7',
        ]);
    }
}
