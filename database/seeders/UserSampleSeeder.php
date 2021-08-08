<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Factories\UserFactory;
use Database\Seeders;

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
        // User::create([
        //     'fullName' => 'testing',
        //     'email' => 'test@binus.ac.id',
        //     'password' => Hash::make('TestPass123'),
        //     'whatsapp' => '08' . rand(1000, 9999) . rand(1000, 9999),
        //     'line_id' => Str::random(4) . rand(100, 999),
        //     'personal_email' => 'test@email.com',
        //     'nim' => '25' . rand(1000, 9999) . rand(1000, 9999),
        //     'campus' => ['KMG', 'ALS', 'BDG', 'MLG'][rand(0, 3)],
        //     'major' => 'None',
        //     'lnt_course' => 'None',
        //     'schedule' => [2, 4, 5],
        //     'batch' => ['Batch 1', 'Batch 2', 'Batch 3', 'Batch 4', 'Batch 5'][rand(0, 4)],
        //     'gender' => ['Male', 'Female'][rand(0, 1)],
        //     'birthDate' => now(),
        //     'placeBirth' => 'None',
        //     'domicile' => 'None',
        //     'address' => 'None',
        //     'payment_pic' => ['HHxpCr8lBB_2581608534_1628235782.png', null][rand(0, 1)]
        // ]);
        \App\Models\User::factory()->count(300)->create();
    }
}
