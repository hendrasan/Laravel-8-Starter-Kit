<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DefaultAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create(array(
            'role_id'           => 1,
            'email'             => 'admin@app.com',
            'email_verified_at' => now(),
            'password'          => Hash::make('123456'),
            'first_name'        => 'Admin',
            'last_name'         => 'App'
        ));
    }
}
