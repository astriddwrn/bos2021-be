<?php

namespace Database\Factories;

use App\Models\Member;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class MemberFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Member::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'fullName' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'whatsapp' => '08' . rand(1000, 9999) . rand(1000, 9999),
            'line_id' => Str::random(4) . rand(100, 999),
            'nim' => '25' . rand(1000, 9999) . rand(1000, 9999),
            'campus' => ['KMG', 'ALS', 'BDG', 'MLG'][rand(0, 3)],
            'major' => 'None',
            'lnt_course' => 'None',
            'batch' => ['Batch 1', 'Batch 2', 'Batch 3', 'Batch 4', 'Batch 5'][rand(0, 4)],
            'gender' => ['Male', 'Female'][rand(0, 1)],
            'birthDate' => now(),
            'placeBirth' => 'None',
            'domicile' => 'None',
            'address' => 'None',
            'bnccid' => 'BNCC21' . rand(0,9) . rand(0,9) . rand(0,9),
            'linkedinUrl' => "https://www.linkedin.com/in/" . $this->faker->userName(),
            'githubUrl' => "https://github.com/" . $this->faker->userName(),
            'ktp-upload' => "Demarco Friesen_2555903028_ktp1629815160.png",
            'fyp-upload' => "Demarco Friesen_2555903028_fyp1629815160.png"
        ];
    }
}
