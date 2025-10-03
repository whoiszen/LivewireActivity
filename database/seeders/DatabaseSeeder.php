<?php

namespace Database\Seeders;
use Database\Seeders\PostSeeder;
use Illuminate\Database\Seeder;
use Database\Seeders\UserSeeder;
class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call(UserSeeder::class);
        $this->call(PostSeeder::class);
    }
};
