<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Super Admin',
            'email' => 'admin@espinatv.com',
            // 'email_verified_at' => now(),
            'password' => Hash::make('123456'),
            'created_at' => now(),
            'updated_at' => now(),
            // 'remember_token'=>Str::ramdom(6)
        ]);
    }
}
