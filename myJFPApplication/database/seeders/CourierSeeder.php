<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class CourierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'C',
            'email' => 'c@myjfp.com',
            'password' => bcrypt('abcdefgh'),
            'email_verified_at' => now(),
        ]);
        $user->assignRole('courier');
    }
}
