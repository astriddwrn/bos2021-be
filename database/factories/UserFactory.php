<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

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
            'password' => Hash::make('TestPass123'),
            'whatsapp' => '08' . rand(1000, 9999) . rand(1000, 9999),
            'line_id' => Str::random(8),
            'personal_email' => $this->faker->unique()->safeEmail(),
            'nim' => '25' . rand(1000, 9999) . rand(1000, 9999),
            'campus' => ['KMG', 'ALS', 'BDG', 'MLG'][rand(0, 3)],
            'major' => 'None',
            'lnt_course' => Str::random(8),
            'schedule' => [2, 4, 5],
            'batch' => 'None',
            'gender' => 'None',
            'birthDate' => now(),
            'placeBirth' => 'None',
            'domicile' => 'None',
            'address' => 'None',
            'payment_pic' => ['HHxpCr8lBB_2581608534_1628235782.png', null][rand(0, 1)]
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
