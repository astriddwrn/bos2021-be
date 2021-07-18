<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'SCAC Binus',
            'email' => 'scac.kemanggisan@binus.edu',
            'password' => Hash::make('SCACxBNCC'),
            'campus' => 'admin',
            'major' => 'admin',
            'whatsapp' => 'admin',
            'line_id' => 'admin',
            'lnt_course' => 'admin',
            'nim' => 'admin',
            'role' => 1,
            'schedule_id' => 1
        ]);

        User::create([
            'name' => 'Superadmin BNCC',
            'email' => 'admin@bncc.net',
            'password' => Hash::make('VIVABNCC!'),
            'campus' => 'admin',
            'major' => 'superadmin',
            'whatsapp' => 'superadmin',
            'line_id' => 'superadmin',
            'lnt_course' => 'superadmin',
            'nim' => 'superadmin',
            'role' => 2,
            'schedule_id' => 1
        ]);

        User::create([
            'name' => 'Superadmin BNCC Malang',
            'email' => 'adminmalang@bncc.net',
            'password' => Hash::make('VIVA_BNCCMalang!'),
            'campus' => 'admin',
            'major' => 'superadmin malang',
            'whatsapp' => 'superadmin malang',
            'line_id' => 'superadmin malang',
            'lnt_course' => 'superadmin malang',
            'nim' => 'superadmin malang',
            'role' => 3,
            'schedule_id' => 1
        ]);
    }
}
