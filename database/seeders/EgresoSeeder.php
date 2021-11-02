<?php

namespace Database\Seeders;

use App\Models\Egreso;
use Illuminate\Database\Seeder;

class EgresoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Egreso::factory(250)->create();
    }
}
