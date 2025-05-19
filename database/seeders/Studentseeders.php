<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
    use Illuminate\Support\Facades\DB;

class Studentseeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

      $data = [
    ["shahid" => fake()->name()],
    ["shahid" => fake()->name()],
    ["shahid" => fake()->name()],
    ["shahid" => fake()->name()],
  
];

DB::table('student')->insert($data);

    }
}
