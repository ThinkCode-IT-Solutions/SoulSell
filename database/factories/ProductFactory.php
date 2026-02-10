<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->words(3, true),
            'slug' => $this->faker->unique()->slug(),
            'brand' => $this->faker->company(),
            'description' => $this->faker->paragraph(),
            'model' => $this->faker->bothify('??-####'),
            'year' => $this->faker->year(),
            'selling_price' => $this->faker->randomFloat(2, 500, 5000),
            'old_selling_price' => $this->faker->optional()->randomFloat(2, 600, 5500),
            'category_id' => $this->faker->numberBetween(1, 10),
            'ram' => $this->faker->randomElement([4, 8, 16, 32, 64]),
            'display_type' => $this->faker->randomElement(['IPS', 'OLED', 'LED', 'TN']),
            'display_resolution' => $this->faker->randomElement(['1920x1080', '2560x1440', '3840x2160']),
            'display_size' => $this->faker->randomElement(['13.3"', '14"', '15.6"', '17.3"']),
            'touch_capable' => $this->faker->boolean(),
            'storage' => $this->faker->randomElement([128, 256, 512, 1024, 2048]),
            'color' => $this->faker->colorName(),
            'build_material' => $this->faker->randomElement(['Aluminum', 'Plastic', 'Carbon Fiber', 'Magnesium Alloy']),
            'weight' => $this->faker->randomFloat(2, 1.0, 3.5),
            'processor' => $this->faker->randomElement(['Intel Core i5', 'Intel Core i7', 'AMD Ryzen 5', 'AMD Ryzen 7', 'Apple M1']),
            'generation' => $this->faker->randomElement(['10th Gen', '11th Gen', '12th Gen', '13th Gen']),
            'battery_capacity' => $this->faker->numberBetween(40, 100) . 'Wh',
            'battery_timing' => $this->faker->numberBetween(4, 12) . ' hours',
            'charger_power' => $this->faker->randomElement(['45W', '65W', '90W', '120W']),
            'charging_type' => $this->faker->randomElement(['USB-C', 'Barrel Jack', 'MagSafe']),
            'is_active' => $this->faker->boolean(100), // 100% chance of being active
        ];
    }
}
