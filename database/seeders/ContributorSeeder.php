<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Contributor;
class ContributorSeeder extends Seeder
{
    public function run(): void
    {
        Contributor::create(['name' => 'Luca', 'email' => 'luca@gmail.it'])->projects()->attach([1, 2]);
        Contributor::create(['name' => 'Pino', 'email' => 'pino@gmail.it'])->projects()->attach([2, 4]);

    }
}
