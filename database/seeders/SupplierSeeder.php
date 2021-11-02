<?php

namespace Database\Seeders;

use App\Models\Account;
use App\Models\Supplier;
use Illuminate\Database\Seeder;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Supplier::factory(10)->create();
        Account::factory(5)->create();
    }
}
