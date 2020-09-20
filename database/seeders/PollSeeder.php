<?php

namespace Database\Seeders;

use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PollSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $date = Carbon::create(2020, 9, 28, 0, 0, 0);

        DB::table('polls')->insert([
            'title' => Str::random(10),
            'starts_at' => $date->format('Y-m-d H:i:s'),
            'ends_at' => $date->addWeeks(rand(1, 52))->format('Y-m-d H:i:s'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        $date = Carbon::create(2020, 9, 1, 0, 0, 0);

        DB::table('polls')->insert([
            'title' => Str::random(10),
            'starts_at' => $date->format('Y-m-d H:i:s'),
            'ends_at' => $date->addWeeks(rand(1, 52))->format('Y-m-d H:i:s'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        $date = Carbon::create(2020, 7, 1, 0, 0, 0);

        DB::table('polls')->insert([
            'title' => Str::random(10),
            'starts_at' => $date->format('Y-m-d H:i:s'),
            'ends_at' => $date->addWeeks(rand(1, 52))->format('Y-m-d H:i:s'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        $date = Carbon::create(2020, 4, 1, 0, 0, 0);

        DB::table('polls')->insert([
            'title' => Str::random(10),
            'starts_at' => $date->format('Y-m-d H:i:s'),
            'ends_at' => $date->addWeeks(rand(1, 52))->format('Y-m-d H:i:s'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}
