<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        //         ID
        // name(string)
        // surname(string)
        // username(string)
        // company_id(bigInteger) - skaicius
        // image_url(string)

        //Faker naudojam faker biblioteka
        return [
            'name' => $this->faker->firstName(), // ims varda is faker bibliotekos
            'surname' => $this->faker->lastName(),
            'username' => $this->faker->userName(),
            //'company_id' => rand(1, 250),
            'company_id' => $this->faker->numberBetween(1, 250),
            'image_url' => $this->faker->imageUrl(),
        ];
    }
}
