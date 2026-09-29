<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $createdAt = date('Y-m-d H:i:s');

        $this->db->table('users')->insertBatch([
            ['username' => 'cvales', 'full_name' => 'Cedrick Vales', 'created_at' => $createdAt],
            ['username' => 'jbondoc', 'full_name' => 'Joseph Bondoc', 'created_at' => $createdAt],
            ['username' => 'pcaluag', 'full_name' => 'Philyip Caluag', 'created_at' => $createdAt],
            ['username' => 'lmedina', 'full_name' => 'Lexus Medina', 'created_at' => $createdAt],
            ['username' => 'rodarbe', 'full_name' => 'Raining Odarbe', 'created_at' => $createdAt],
        ]);
    }
}
