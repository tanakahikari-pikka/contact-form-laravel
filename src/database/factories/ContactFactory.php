<?php

namespace Database\Factories;

use App\Models\Contact;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ContactFactory extends Factory
{
    protected $model = Contact::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'category_id' => $this->faker->numberBetween(1, 4),
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'gender' => $this->faker->numberBetween(1, 3),
            'email' => $this->faker->unique()->safeEmail,
            'tell' => $this->faker->phoneNumber,
            'address' => str_replace("\n", " ", $this->faker->address),
            'building' => str_replace("\n", " ", $this->faker->secondaryAddress),
            'detail' => str_replace("\n", " ", $this->faker->optional()->word),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
