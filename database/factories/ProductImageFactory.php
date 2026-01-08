<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ProductImage>
 */
class ProductImageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'image_url' => "https://picsum.photos/seed/" . $this->faker->unique()->numberBetween(1, 1000) . "/600/400",
            'product_id' => $this->faker->numberBetween(1, 100),
            'featured'=> $this->faker->boolean,
        ];
    }
}
