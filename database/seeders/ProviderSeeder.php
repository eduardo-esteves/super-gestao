<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProviderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('providers')->insert([
            0 => [
                'name'          => 'Casas Bahia',
                'email'         => 'bahia@gmail.com',
                'uf'            => 'BA',
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
            1 => [
                'name'          => 'Magazine Luiza',
                'email'         => 'magazine@gmail.com',
                'uf'            => 'SP',
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
            2 => [
                'name'          => 'Lojas CEM',
                'email'         => 'cem@gmail.com',
                'uf'            => 'SP',
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
            3 => [
                'name'          => 'Lojas Gearosom',
                'email'         => 'gearosom@gmail.com',
                'uf'            => 'PI',
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
            4 => [
                'name'          => 'Lojas Meit',
                'email'         => 'meit@gmail.com',
                'uf'            => 'CE',
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
            5 => [
                'name'          => 'Mil Terra',
                'email'         => 'milterra@gmail.com',
                'uf'            => 'PE',
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
        ]);
    }
}
