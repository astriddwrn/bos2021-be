<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Factories\MemberFactory;

class MemberSampleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MemberFactory::new()->count(10)->create();
    }
}
