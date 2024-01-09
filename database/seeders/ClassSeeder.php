<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Models\Classroom;

class ClassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Classroom::insert(
            [
                'namakelas' => 'VII F',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
            );
    }
}
