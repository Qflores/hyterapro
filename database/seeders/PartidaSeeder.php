<?php

namespace Database\Seeders;

use App\Models\Partida;
use Illuminate\Database\Seeder;

class PartidaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Partida::factory(115)->create();
    }
}
