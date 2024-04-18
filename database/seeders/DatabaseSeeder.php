<?php

namespace Database\Seeders;

use App\Enums\UserRoleEnum;
use App\Models\User;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        User::create([
            'name' => 'Anastasiia',
            'email' => 'Anastasia.beetroot@gmail.com',
            'password' => '12341234',
            'role' => UserRoleEnum::ADMIN->value
        ]);

        User::factory(10)->create();

        $this->call([
            CategorySeeder::class,
            PostSeeder::class,
            TagSeeder::class,
            SubscriptionSeeder::class,
        ]);
    }

}
