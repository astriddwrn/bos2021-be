<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSampleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'fullName' => Str::random(10),
            'email' => Str::random(6) . "@email.com",
            'password' => Hash::make('TestPass123'),
            'whatsapp' => '08' . rand(1000, 9999) . rand(1000, 9999),
            'line_id' => Str::random(8),
            'nim' => '25' . rand(1000, 9999) . rand(1000, 9999),
            'campus' => 'None',
            'major' => 'None',
            'lnt_course' => Str::random(8),
            'schedule' => [2, 4, 5],
            'batch' => 'None',
            'gender' => 'None',
            'birthDate' => now(),
            'placeBirth' => 'None',
            'domicile' => 'None',
            'address' => 'None'
        ]);
    }
}
