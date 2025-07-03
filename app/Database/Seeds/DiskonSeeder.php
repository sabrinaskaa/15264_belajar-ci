<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class DiskonSeeder extends Seeder
{
    public function run()
    {
        $faker = \Faker\Factory::create('id_ID');

        $data = [
            [
                'tanggal' => '2025-06-25',
                'nominal' => '100000',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => NULL,
            ],
            [
                'tanggal' => '2025-06-26',
                'nominal' => '200000',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => NULL,
            ],
            [
                'tanggal' => '2025-06-27',
                'nominal' => '300000',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => NULL,
            ],
            [
                'tanggal' => '2025-06-28',
                'nominal' => '100000',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => NULL,
            ],
            [
                'tanggal' => '2025-06-29',
                'nominal' => '300000',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => NULL,
            ],
            [
                'tanggal' => '2025-06-30',
                'nominal' => '100000',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => NULL,
            ],
            [
                'tanggal' => '2025-07-01',
                'nominal' => '200000',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => NULL,
            ],
            [
                'tanggal' => '2025-07-02',
                'nominal' => '200000',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => NULL,
            ],
            [
                'tanggal' => '2025-07-03',
                'nominal' => '300000',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => NULL,
            ],
            [
                'tanggal' => '2025-07-04',
                'nominal' => '100000',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => NULL,
            ],
        ];

        $this->db->table('diskon')->insertBatch($data);
    }
}
