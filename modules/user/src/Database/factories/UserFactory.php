<?php

namespace Database\Factories;

use  User\Database\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    
    protected $model = User::class;

 
    public function definition()
    {
        return [
            'first_name' => $this->faker->firstName(),
            'last_name' => $this->faker->lastName(),
            'phone_number' => $this->faker->phoneNumber(),
            'email' => $this->faker->unique()->safeEmail(),
            // 'first_name' => 'de',
            // 'last_name' => 'de',
            // 'phone_number' =>'099',
            // 'email' => $this->faker->unique()->safeEmail(),
         
        ];
    }

   
   
}
