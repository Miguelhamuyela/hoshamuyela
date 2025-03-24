<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{

    protected $model = User::class;


    public function definition()
    {
        return [
            'name' => "admin", //$this->faker->name(),
            'email' => "infosigov@admin.com", //$this->faker->unique()->safeEmail(),
            'email_verified_at' => now(),
            'level' => 'Administrador',
            'password' => bcrypt("t;jfN=2z7DIh"), //'$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ];
    }


    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
