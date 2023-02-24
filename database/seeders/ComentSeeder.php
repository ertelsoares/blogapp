<?php

namespace Database\Seeders;

use App\Models\Coment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ComentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Coment::factory(100)->create();
        
    }
}
