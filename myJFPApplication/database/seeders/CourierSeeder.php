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
            'name' => 'Courier 1',
            'email' => 'a@myjfp.com',
            'password' => bcrypt('abcdefgh'),
            'email_verified_at' => now(),
        ]);
        $user->assignRole('courier');
        $user = User::create([
            'name' => 'Courier 2',
            'email' => 'b@myjfp.com',
            'password' => bcrypt('abcdefgh'),
            'email_verified_at' => now(),
        ]);
        $user->assignRole('courier');
        $user = User::create([
            'name' => 'Courier 3',
            'email' => 'c@myjfp.com',
            'password' => bcrypt('abcdefgh'),
            'email_verified_at' => now(),
        ]);
        $user->assignRole('courier');
        $user = User::create([
            'name' => 'Courier 4',
            'email' => '4@myjfp.com',
            'password' => bcrypt('abcdefgh'),
            'email_verified_at' => now(),
        ]);
        $user->assignRole('courier');
        $user = User::create([
            'name' => 'Courier 5',
            'email' => '5@myjfp.com',
            'password' => bcrypt('abcdefgh'),
            'email_verified_at' => now(),
        ]);
        $user->assignRole('courier');
        $user = User::create([
            'name' => 'Courier 6',
            'email' => '6@myjfp.com',
            'password' => bcrypt('abcdefgh'),
            'email_verified_at' => now(),
        ]);
        $user->assignRole('courier');
        $user = User::create([
            'name' => 'Courier 7',
            'email' => '7@myjfp.com',
            'password' => bcrypt('abcdefgh'),
            'email_verified_at' => now(),
        ]);
        $user->assignRole('courier');
        $user = User::create([
            'name' => 'Courier 8',
            'email' => '8@myjfp.com',
            'password' => bcrypt('abcdefgh'),
            'email_verified_at' => now(),
        ]);
        $user->assignRole('courier');
        $user = User::create([
            'name' => 'Courier 9',
            'email' => '9@myjfp.com',
            'password' => bcrypt('abcdefgh'),
            'email_verified_at' => now(),
        ]);
        $user->assignRole('courier');
        $user = User::create([
            'name' => 'Courier 10',
            'email' => '10@myjfp.com',
            'password' => bcrypt('abcdefgh'),
            'email_verified_at' => now(),
        ]);
        $user->assignRole('courier');
      
            
        
       
    }
}
