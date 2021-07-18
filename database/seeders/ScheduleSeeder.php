<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Schedule;

class ScheduleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schedule::create([
            'date' => '2020-08-24 09:20:00',
            'quota' => 200,
            'link1' => 'binus.zoom.us/',
            'link2' => 'binus.zoom.us/'
        ]);

        Schedule::create([
            'date' => '2020-08-25 11:20:00',
            'quota' => 200,
            'link1' => 'binus.zoom.us/',
            'link2' => 'binus.zoom.us/'
        ]);

        Schedule::create([
            'date' => '2020-08-26 13:20:00',
            'quota' => 200,
            'link1' => 'binus.zoom.us/',
            'link2' => 'binus.zoom.us/'
        ]);

    }
}
