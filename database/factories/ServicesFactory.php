<?php

namespace Database\Factories;

use App\Models\SubCategory;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Services>
 */
class ServicesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'category_id' =>SubCategory::factory(),
            'name' => $this->faker->word(),
            'description'=>$this->faker->paragraph,
            'price'=>$this->faker->numberBetween(100,1000),
        ];
    }
}
