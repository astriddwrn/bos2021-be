<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Schedule;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ScheduleSampleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schedule::create([
            'date' => now(),
            'link1' => 'https://zoom.us/' . Str::random(16),
            'quota' => rand(10, 200),
            'campus' => Str::random(12),
            'lnt_course' => Str::random(8)
        ]);
    }
}
