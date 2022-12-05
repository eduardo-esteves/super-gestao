<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SiteContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('site_contacts')->insert([
            0 => [
                'name'              => 'Marilu Miguel',
                'phone'             => '(11) 97878-4541',
                'email'             => 'marilu@gmail.com',
                'reason_contact'    => 1,
                'message'           => 'Erro no cadastro da plataforma',
                'created_at'        => now(),
                'updated_at'        => now(),
            ],
            1 => [
                'name'              => 'Marta Miguel',
                'phone'             => '(11) 97841-3541',
                'email'             => 'marta@gmail.com',
                'reason_contact'    => 1,
                'message'           => 'Upload não funciona',
                'created_at'        => now(),
                'updated_at'        => now(),
            ],
            2 => [
                'name'              => 'Eduardo Tavares',
                'phone'             => '(11) 94741-2561',
                'email'             => 'eduardo@gmail.com',
                'reason_contact'    => 3,
                'message'           => 'Fotos duplicadas',
                'created_at'        => now(),
                'updated_at'        => now(),
            ],
            3 => [
                'name'              => 'Larissa Geovana',
                'phone'             => '(11) 94863-2451',
                'email'             => 'larissa@gmail.com',
                'reason_contact'    => 2,
                'message'           => 'Não recebi retorno de vocês',
                'created_at'        => now(),
                'updated_at'        => now(),
            ],
            4 => [
                'name'              => 'Joana Dark',
                'phone'             => '(21) 92574-2478',
                'email'             => 'joana@gmail.com',
                'reason_contact'    => 3,
                'message'           => 'Fotos não salvam',
                'created_at'        => now(),
                'updated_at'        => now(),
            ],
            5 => [
                'name'              => 'Patricia Silva',
                'phone'             => '(11) 78457-2417',
                'email'             => 'patricia@gmail.com',
                'reason_contact'    => 2,
                'message'           => 'Atraso na confirmação da plataforma',
                'created_at'        => now(),
                'updated_at'        => now(),
            ],
        ]);
    }
}
