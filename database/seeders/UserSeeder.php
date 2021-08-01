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
            'fullName' => 'SCAC BINUS',
            'email' => 'scac.kemanggisan@binus.edu',
            'password' => Hash::make('SCACxBncc'),
            'gender' => 'admin',
            'birthDate' => now(),
            'placeBirth' => 'admin',
            'domicile' => 'admin',
            'address' => 'admin',
            'campus' => 'admin',
            'major' => 'admin',
            'whatsapp' => 'admin',
            'line_id' => 'admin',
            'lnt_course' => 'admin',
            'nim' => 'admin',
            'role' => 2,
            'schedule' => [1,2,3],
            'batch' => 'admin'
        ]);

        User::create([
            'fullName' => 'Superadmin BNCC Kemanggisan',
            'email' => 'admin_kmg@bncc.net',
            'password' => Hash::make('viva_BNCCKMG!'),
            'gender' => 'admin',
            'birthDate' => now(),
            'placeBirth' => 'admin',
            'domicile' => 'admin',
            'address' => 'admin',
            'campus' => 'admin',
            'major' => 'admin',
            'whatsapp' => 'admin',
            'line_id' => 'admin',
            'lnt_course' => 'admin',
            'nim' => 'admin',
            'role' => 2,
            'schedule' => [1,2,3],
            'batch' => 'admin'
        ]);

        User::create([
            'fullName' => 'Superadmin BNCC Alam Sutera',
            'email' => 'admin_as@bncc.net',
            'password' => Hash::make('viva_BNCCAlsut!'),
            'gender' => 'admin',
            'birthDate' => now(),
            'placeBirth' => 'admin',
            'domicile' => 'admin',
            'address' => 'admin',
            'campus' => 'admin',
            'major' => 'admin',
            'whatsapp' => 'admin',
            'line_id' => 'admin',
            'lnt_course' => 'admin',
            'nim' => 'admin',
            'role' => 3,
            'schedule' => [1,2,3],
            'batch' => 'admin'
        ]);

        User::create([
            'fullName' => 'Superadmin BNCC Bandung',
            'email' => 'admin_bdg@bncc.net',
            'password' => Hash::make('viva_BNCCBDG!'),
            'gender' => 'admin',
            'birthDate' => now(),
            'placeBirth' => 'admin',
            'domicile' => 'admin',
            'address' => 'admin',
            'campus' => 'admin',
            'major' => 'admin',
            'whatsapp' => 'admin',
            'line_id' => 'admin',
            'lnt_course' => 'admin',
            'nim' => 'admin',
            'role' => 4,
            'schedule' => [1,2,3],
            'batch' => 'admin'
        ]);

        User::create([
            'fullName' => 'Superadmin BNCC Malang',
            'email' => 'admin_mlg@bncc.net',
            'password' => Hash::make('viva_BNCCmlg!'),
            'gender' => 'admin',
            'birthDate' => now(),
            'placeBirth' => 'admin',
            'domicile' => 'admin',
            'address' => 'admin',
            'campus' => 'admin',
            'major' => 'admin',
            'whatsapp' => 'admin',
            'line_id' => 'admin',
            'lnt_course' => 'admin',
            'nim' => 'admin',
            'role' => 5,
            'schedule' => [1,2,3],
            'batch' => 'admin'
        ]);
    }
}
