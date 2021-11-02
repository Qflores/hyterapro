<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'Administrador de plataforma',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('1234')
        ]);

        User::factory(15)->create();
    }
}
