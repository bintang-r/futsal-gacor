<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use JadwalSeeder;
use LapanganSeeder;
use OperatorSeeder;
use TransaksiSeeder;
use UserSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            LapanganSeeder::class,
            JadwalSeeder::class,
            OperatorSeeder::class,
            TransaksiSeeder::class,
        ]);
    }
}
