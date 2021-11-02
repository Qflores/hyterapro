<?php

namespace Database\Seeders;

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
        $this->call(UserSeeder::class);

        $this->call(SupplierSeeder::class);

        $this->call(AccountSeeder::class);

        $this->call(ProyectoSeeder::class);

        $this->call(UnidadSeeder::class);

        $this->call(ComponentSeeder::class);

        $this->call(PartidaSeeder::class);

        $this->call(EgresoSeeder::class);
    }
}
