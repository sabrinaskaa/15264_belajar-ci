<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ProductCategorySeeder extends Seeder
{
    public function run()
    {
        $faker = \Faker\Factory::create('id_ID');

        $categories = [
            'Elektronik' => 'Produk-produk elektronik',
            'Pakaian' => 'Berbagai jenis pakaian',
            'Makanan' => 'Produk makanan',
            'Minuman' => 'Produk minuman',
        ];

        foreach ($categories as $name => $desc) {
            $data = [
                'name' => $name,
                'description' => $desc, // Bisa diganti: $faker->sentence jika ingin acak
                'created_at' => date("Y-m-d H:i:s"),
            ];

            $this->db->table('product_category')->insert($data);
        }
    }
}
